<?php

use codexten\yii\base\Module;
use codexten\yii\modules\dashboard\controllers\DashboardController;

return [
    'modules' => [
        'dashboard' => [
            'class' => Module::class,
            'viewPath' => '@moduleDashboard/views',
            'controllerMap' => [
                'dashboard' => [
                    'class' => DashboardController::class,
                ],
            ],
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
