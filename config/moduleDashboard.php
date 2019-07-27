<?php

use codexten\yii\base\Module;

return [
    'modules' => [
        'dashboard' => [
            'class' => Module::class,
            'viewPath' => '@moduleDashboard/views',
        ],
    ],

    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/widgets/views' => [
                        '@moduleDashboard/widgets/views',
                    ],
                ],
            ],
        ],
    ],
];
