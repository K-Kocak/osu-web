<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => '',
    'delete' => '',
    'loading' => '',
    'mark_read' => '',
    'none' => '',
    'see_all' => '',
    'see_channel' => 'чатқа өту',
    'verifying' => '',

    'action_type' => [
        '_' => 'бәрі',
        'beatmapset' => 'карталар',
        'build' => '',
        'channel' => 'чат',
        'forum_topic' => 'форум',
        'news_post' => 'жаңалықтар',
        'user' => '',
    ],

    'filters' => [
        '_' => 'бәрі',
        'user' => '',
        'beatmapset' => 'карталар',
        'forum_topic' => '',
        'news_post' => 'жаңалықтар',
        'build' => '',
        'channel' => 'чат',
    ],

    'item' => [
        'beatmapset' => [
            '_' => '',

            'beatmap_owner_change' => [
                '_' => 'Қонақтың қиындығы',
                'beatmap_owner_change' => '',
                'beatmap_owner_change_compact' => '',
            ],

            'beatmapset_discussion' => [
                '_' => 'Картаның пікірталасы',
                'beatmapset_discussion_lock' => '":title"-дің пікірталасы жабылды',
                'beatmapset_discussion_lock_compact' => 'Пікірталас жабылды',
                'beatmapset_discussion_post_new' => '',
                'beatmapset_discussion_post_new_empty' => '',
                'beatmapset_discussion_post_new_compact' => '',
                'beatmapset_discussion_post_new_compact_empty' => '',
                'beatmapset_discussion_review_new' => '',
                'beatmapset_discussion_review_new_compact' => '',
                'beatmapset_discussion_unlock' => '',
                'beatmapset_discussion_unlock_compact' => 'Пікірталас ашылды',

                'review_count' => [
                    'praises' => '',
                    'problems' => '',
                    'suggestions' => '',
                ],
            ],

            'beatmapset_problem' => [
                '_' => '',
                'beatmapset_discussion_qualified_problem' => '',
                'beatmapset_discussion_qualified_problem_empty' => '',
                'beatmapset_discussion_qualified_problem_compact' => '',
                'beatmapset_discussion_qualified_problem_compact_empty' => '',
            ],

            'beatmapset_state' => [
                '_' => '',
                'beatmapset_disqualify' => '',
                'beatmapset_disqualify_compact' => '',
                'beatmapset_love' => '',
                'beatmapset_love_compact' => '',
                'beatmapset_nominate' => '',
                'beatmapset_nominate_compact' => '',
                'beatmapset_qualify' => '',
                'beatmapset_qualify_compact' => '',
                'beatmapset_rank' => '',
                'beatmapset_rank_compact' => '',
                'beatmapset_remove_from_loved' => '',
                'beatmapset_remove_from_loved_compact' => '',
                'beatmapset_reset_nominations' => '',
                'beatmapset_reset_nominations_compact' => '',
            ],

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
                'comment_reply' => '',
                'comment_reply_compact' => '',
            ],
        ],

        'channel' => [
            '_' => 'Чат',

            'announcement' => [
                '_' => '',

                'announce' => [
                    'channel_announcement' => '',
                    'channel_announcement_compact' => ':title',
                    'channel_announcement_group' => '',
                ],
            ],

            'channel' => [
                '_' => '',

                'pm' => [
                    'channel_message' => '',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => '',
                ],
            ],
        ],

        'build' => [
            '_' => '',

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
                'comment_reply' => '',
                'comment_reply_compact' => '',
            ],
        ],

        'news_post' => [
            '_' => 'Жаңалықтар',

            'comment' => [
                '_' => '',

                'comment_new' => '',
                'comment_new_compact' => '',
                'comment_reply' => '',
                'comment_reply_compact' => '',
            ],
        ],

        'forum_topic' => [
            '_' => '',

            'forum_topic_reply' => [
                '_' => '',
                'forum_topic_reply' => '',
                'forum_topic_reply_compact' => '',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                '_' => '',

                'user_beatmapset_new' => '',
                'user_beatmapset_new_compact' => '',
                'user_beatmapset_new_group' => '',

                'user_beatmapset_revive' => '',
                'user_beatmapset_revive_compact' => '',
            ],
        ],

        'user_achievement' => [
            '_' => '',

            'user_achievement_unlock' => [
                '_' => 'Жаңа медаль ',
                'user_achievement_unlock' => '":title" ашылды!',
                'user_achievement_unlock_compact' => '":title" ашылды!',
                'user_achievement_unlock_group' => '',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmap_owner_change' => [
                'beatmap_owner_change' => '',
            ],

            'beatmapset_discussion' => [
                'beatmapset_discussion_lock' => '',
                'beatmapset_discussion_post_new' => '',
                'beatmapset_discussion_unlock' => '',
            ],

            'beatmapset_problem' => [
                'beatmapset_discussion_qualified_problem' => '',
            ],

            'beatmapset_state' => [
                'beatmapset_disqualify' => '',
                'beatmapset_love' => '',
                'beatmapset_nominate' => '',
                'beatmapset_qualify' => '',
                'beatmapset_rank' => '',
                'beatmapset_remove_from_loved' => '',
                'beatmapset_reset_nominations' => '',
            ],

            'comment' => [
                'comment_new' => '',
            ],
        ],

        'channel' => [
            'announcement' => [
                'announce' => '',
            ],

            'channel' => [
                'pm' => '',
            ],
        ],

        'build' => [
            'comment' => [
                'comment_new' => '',
            ],
        ],

        'news_post' => [
            'comment' => [
                'comment_new' => '',
            ],
        ],

        'forum_topic' => [
            'forum_topic_reply' => [
                'forum_topic_reply' => '',
            ],
        ],

        'user' => [
            'user_beatmapset_new' => [
                'user_beatmapset_new' => '',
                'user_beatmapset_revive' => '',
            ],
        ],
    ],
];
