<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Console\Commands;

use App\Libraries\Store\ShopifyOrder;
use App\Models\Store\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Shopify\Clients\Storefront;
use Symfony\Component\Console\Helper\ProgressBar;

class StoreMigrateShopifyCheckouts extends Command
{
    protected $signature = 'store:migrate-shopify-checkouts';

    protected $description = 'Migrates Shopify orders using Checkout ids to the Order or Cart ids.';

    private Storefront $client;
    /** @var ProgressBar[]  */
    private array $progress;

    private static function getOrderIdFromNode(array $node): ?int
    {
        // array of name-value pairs.
        $attributes = $node['customAttributes'];

        foreach ($attributes as $attribute) {
            if ($attribute['key'] === 'orderId') {
                return get_int($attribute['value']);
            }
        }

        return null;
    }

    public function handle()
    {
        $this->client = ShopifyOrder::storefontClient('unauthenticated_read_checkouts');

        /** @var \Symfony\Component\Console\Output\ConsoleOutput $output */
        $output = $this->output->getOutput();
        for ($i = 0; $i < 3; $i++) {
            $section[] = $output->section();
        }

        $this->progress['orders'] = new ProgressBar($section[0]);
        $this->progress['orders']->setMessage('Orders read');
        $this->progress['gids'] = new ProgressBar($section[1]);
        $this->progress['gids']->setMessage('response nodes processed');
        $this->progress['updated'] = new ProgressBar($section[2]);
        $this->progress['updated']->setMessage('Orders updated');

        foreach ($this->progress as $progress) {
            $progress->setFormat('[%bar%] %current% %message%');
            $progress->start();
        }

        Order::where('provider', 'shopify')->whereNotNull('reference')->chunkById(1000, function (Collection $chunk) {
            $ordersById = $chunk->map(fn (Order $order) => new ShopifyOrder($order))->keyBy('order.order_id');
            $this->progress['orders']->advance(count($ordersById));

            $ids = $ordersById->values()->map(fn (ShopifyOrder $order) => $order->getCheckoutId())->filter();
            $idChunks = $ids->chunk(100);

            foreach ($idChunks as $idChunk) {
                // values() because laravel uses preserve_keys: true ...
                $body = $this->queryCheckoutIds($idChunk->values());

                $errors = $body['errors'] ?? null;
                $nodes = $body['data']['nodes'] ?? null;

                if ($errors !== null) {
                    $this->error($this->printableResponse($errors));
                }

                foreach ($nodes as $node) {
                    $this->progress['gids']->advance();
                    // nodes appear to be returned in order of values queried, including nulls set for not found
                    if ($node !== null) {
                        $orderId = static::getOrderIdFromNode($node);
                        if ($orderId !== null) {
                            $order = $ordersById[$orderId];
                            if (isset($node['order'])) {
                                $order->updateOrderWithGql($node['order']);
                            } else {
                                // orders that haven't completed checkout.
                                $order->order->update(['shopify_url' => $node['webUrl']]);
                            }

                            $this->progress['updated']->advance();
                        }
                    }
                }

                sleep(1);
            }
        });

        foreach ($this->progress as $progress) {
            $progress->finish();
        }
    }

    /**
     * Query will return a completely misleading error if there are ids that don't match the node type.
     */
    private function queryCheckoutIds(Collection $ids)
    {
        $query = <<<QUERY
        {
            nodes(ids: {$ids->toJson(JSON_UNESCAPED_SLASHES)}) {
                ... on Checkout {
                    id
                    webUrl
                    customAttributes {
                        key
                        value
                    }
                    order {
                        canceledAt
                        financialStatus
                        fulfillmentStatus
                        id
                        orderNumber
                        processedAt
                        statusUrl
                        billingAddress {
                            countryCodeV2
                        }
                    }
                }
            }
        }
        QUERY;

        return $this->client->query($query)->getDecodedBody();
    }

    private function printableResponse($value)
    {
        return is_array($value) ? json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) : $value;
    }
}
