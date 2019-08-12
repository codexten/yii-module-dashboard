<?php

use codexten\yii\modules\dashboard\modules\api\controllers\DashboardWidgetController;
use codexten\yii\modules\dashboard\modules\api\models\DashboardWidget;
use codexten\yii\rest\ActiveController;

return [
    'modules' => [
        'api' => [
            'controllerMap' => [
                'dashboard-widget' => [
                    'class' => DashboardWidgetController::class,
                    'modelClass' => DashboardWidget::class,
                ],
            ],
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => [
                'api' => [
                    'controller' => [
                        'api/dashboard-widget',
                    ],
                ],
            ],
        ],
    ],
];
