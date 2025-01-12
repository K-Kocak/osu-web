<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Models;

use App\Exceptions\InvariantException;
use App\Models\Multiplayer\UserScoreAggregate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $season_id
 * @property float $total_score
 * @property int $user_id
 */
class UserSeasonScore extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $primaryKey = ':composite';
    protected $primaryKeys = ['user_id', 'season_id'];

    public function calculate(): void
    {
        $rooms = $this->season->rooms()
            ->withPivot('group_indicator')
            ->get();

        $userScores = UserScoreAggregate::whereIn('room_id', $rooms->pluck('id'))
            ->where('user_id', $this->user_id)
            ->get();

        $factors = $this->season->scoreFactorsOrderedForCalculation();
        $roomsGrouped = $rooms->groupBy('pivot.group_indicator');

        if ($roomsGrouped->count() > count($factors)) {
            throw new InvariantException(osu_trans('rankings.seasons.validation.not_enough_factors'));
        }

        foreach ($roomsGrouped as $rooms) {
            $groupUserScores = $userScores
                ->whereIn('room_id', $rooms->pluck('id'))
                ->pluck('total_score');

            if ($groupUserScores === null) {
                continue;
            }

            $scores[] = $groupUserScores->max();
        }

        rsort($scores);

        $scoreCount = count($scores);
        $total = 0;

        for ($i = 0; $i < $scoreCount; $i++) {
            $total += $scores[$i] * $factors[$i];
        }

        $this->total_score = $total;
    }

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }
}
