<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'audio' => [
        'autoplay' => 'Пусни следващата песен автоматично',
    ],

    'defaults' => [
        'page_description' => 'osu! - Ритъмът е само на *клик* от вас! Със специални режими на игра като Ouendan/EBA и Taiko, както и напълно фунциониращ редактор на бийтмапове.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'бийтмап сет',
            'beatmapset_covers' => 'бийтмап сет корици',
            'contest' => 'конкурс',
            'contests' => 'конкурси',
            'root' => 'конзола',
        ],

        'artists' => [
            'index' => 'автори',
        ],

        'changelog' => [
            'index' => 'списък',
        ],

        'help' => [
            'index' => 'osu!wiki',
            'sitemap' => 'Карта на сайта',
        ],

        'store' => [
            'cart' => 'количка',
            'orders' => 'моите поръчки',
            'products' => 'продукти',
        ],

        'tournaments' => [
            'index' => 'турнири',
        ],

        'users' => [
            'modding' => 'редакции',
            'multiplayer' => 'мултиплейър',
            'show' => 'инфо',
        ],
    ],

    'gallery' => [
        'close' => 'Затвори (Esc)',
        'fullscreen' => 'Превключи на цял екран',
        'zoom' => 'Приближи/отдалечи',
        'previous' => 'Предишно (лява стрелка)',
        'next' => 'Следващо (дясна стрелка)',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'бийтмапове',
        ],
        'community' => [
            '_' => 'общност',
            'dev' => 'разработка',
        ],
        'help' => [
            '_' => 'помощ',
            'getAbuse' => 'докладване за нередност',
            'getFaq' => 'чзв',
            'getRules' => 'правила',
            'getSupport' => 'не, наистина, искам помощ!',
        ],
        'home' => [
            '_' => 'начало',
            'team' => 'екип',
        ],
        'rankings' => [
            '_' => 'класации',
            'kudosu' => 'kudosu',
        ],
        'store' => [
            '_' => 'магазин',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Общи',
            'home' => 'Начало',
            'changelog-index' => 'Списък с промени',
            'beatmaps' => 'Списък с бийтмапове',
            'download' => 'Изтегли osu!',
        ],
        'help' => [
            '_' => 'Помощ & Общност',
            'faq' => 'Често Задавани Въпроси',
            'forum' => 'Форум на Общност',
            'livestreams' => 'Игри На Живо',
            'report' => 'Докладване за Проблем',
            'wiki' => 'osu!wiki',
        ],
        'legal' => [
            '_' => 'Правила и Състояние',
            'copyright' => 'Авторски права (DMCA)',
            'privacy' => 'Поверителност',
            'server_status' => 'Състояние на сървърите',
            'source_code' => 'Програмен код',
            'terms' => 'Условия за ползване',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => 'Невалиден параметър на заявка',
            'description' => '',
        ],
        '404' => [
            'error' => 'Страницата липсва',
            'description' => "Извиняваме се, но страницата която търсите не е тук!",
        ],
        '403' => [
            'error' => "Вие не трябва да сте тук.",
            'description' => 'Може да опитате да се върнете назад.',
        ],
        '401' => [
            'error' => "Вие не трябва да сте тук.",
            'description' => 'Може да опитате да се върнете назад. Или влезте в профила си.',
        ],
        '405' => [
            'error' => 'Страницата липсва',
            'description' => "Извиняваме се, но страницата която търсите не е тук!",
        ],
        '422' => [
            'error' => 'Невалиден параметър на заявка',
            'description' => '',
        ],
        '429' => [
            'error' => 'Достигнат е лимитът на заявките',
            'description' => '',
        ],
        '500' => [
            'error' => 'Ох не, нещо се счупи! Т - Т',
            'description' => "Ние сме автоматично осведомени за всяка неизправност.",
        ],
        'fatal' => [
            'error' => 'Ох не, нещо се счупи! (доста зле) Т - Т',
            'description' => "Ние сме автоматично осведомени за всяка неизправност.",
        ],
        '503' => [
            'error' => 'Спрян за профилактика!',
            'description' => "Профилактиката обикновено трае от 5 секунди до 10 минути. В случай че стане повече от 10 минути, проверете :link за повече информация.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "За всеки случай, това е код, който да дадете на поддръжката!",
    ],

    'popup_login' => [
        'button' => 'вход / регистрация',

        'login' => [
            'forgot' => "Забравих си данните",
            'password' => 'парола',
            'title' => 'Влезте, за да продължите',
            'username' => 'потребителско име',

            'error' => [
                'email' => "Потребителското име или имейл адресът не съществуват",
                'password' => 'Грешна парола',
            ],
        ],

        'register' => [
            'download' => 'Изтегли',
            'info' => 'Изтеглете osu! за да си създадете един!',
            'title' => "Нямате акаунт?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Настройки',
            'follows' => 'Следвани',
            'friends' => 'Приятели',
            'logout' => 'Изход',
            'profile' => 'Моят Профил',
        ],
    ],

    'popup_search' => [
        'initial' => 'Пишете тук за търсене!',
        'retry' => 'Търсенето е неуспешно. Кликнете, за да опитате отново.',
    ],
];
