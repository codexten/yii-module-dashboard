<?php

namespace codexten\yii\modules\dashboard\controllers;

use codexten\yii\web\Controller;
use yii\web\Response;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRenderWidget($id)
    {
        return $this->renderAjax("widgets/{$id}");
    }


//    public function actionTest()
//    {
//        \Yii::$app->response->format = Response::FORMAT_JSON;
//
//        return [
//            'data' => [
//                'message' => 'Hai',
//                'chartData' => [
//                    ['Year', 'Sales', 'Expenses', 'Profit'],
//                    ['2014', 1000, 400, 200],
//                    ['2015', 1170, 460, 250],
//                    ['2016', 660, 1120, 300],
//                    ['2017', 1030, 540, 350],
//                ],
//                'chartOptions' => [
//                    'chart' => [
//                        'title' => 'Company Performance',
//                        'subtitle' => 'Sales, Expenses, and Profit: 2014-2017',
//                    ],
//                ],
//            ],
//        ];
//    }

    public function actionColumnChart()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'ColumnChart',
                'chartData' => [
                    ['', 'This Month', 'This Week', 'Today'],
                    ['New Trs', 100, 50, 25],
                ],
                'chartOptions' => [
                    'title' => 'New Tr Details',
                    'vAxis' => [
                        'title' => 'No Of TRs',
                    ],
                    'series' => [
                        1 => [
                            'color' => '#a4c2f4',
                        ],
                        2 => [
                            'color' => '#cfe2f3',
                        ],
                    ],
                    'width' => 640,
                    'height' => 480,
                ],
                'settings' => [
                    'packages' => [
                        'corechart',
                    ],
                ],
            ],
        ];
    }


    public function actionSteppedAreaChart()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'SteppedAreaChart',
                'chartData' => [
                    ['Month', 'Total', 'Optimized'],
                    ['Jan', 5000, 4000,],
                    ['Feb', 2500, 2000,],
                    ['Mar', 4000, 2500,],
                    ['Apr', 4500, 2300,],
                    ['May', 3000, 1500,],
                    ['June', 4000, 2000,],
                    ['July', 4800, 2400,],
                    ['Aug', 5000, 2500,],
                ],
                'chartOptions' => [
                    'title' => 'Optimization Performance Chart',
                    'vAxis' => [
                        'title' => 'No Of TRs',
                    ],
                    'hAxis' => [
                        'title' => 'Month',
                    ],
                    'width' => 640,
                    'height' => 480,
                ],
                'settings' => [
                    'packages' => [
                        'corechart',
                    ],
                ],
            ],
        ];
    }


    public function actionGauge()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'Gauge',
                'chartData' => [
                    ['Label', 'Value'],
                    ['Memory', 80],
                    ['CPU', 55],
                    ['Network', 68],
                ],
                'chartOptions' => [
                    'width' => 400,
                    'height' => 120,
                    'redFrom' => 90,
                    'redTo' => 100,
                    'yellowFrom' => 75,
                    'yellowTo' => 90,
                    'minorTicks' => 5,
                ],
                'settings' => [
                    'packages' => [
                        ['gauge', 'corechart', 'table'],
                    ],
                ],
            ],
        ];
    }

    public function actionComboChart()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'ComboChart',
                'chartData' => [
                    ['Month', 'count', 'avg'],
                    ['Jan', 7, 7],
                    ['Feb', 9, 9],
                    ['Mar', 12, 12],
                    ['Apr', 6, 6],
                    ['May', 10, 10],
                    ['June', 8, 8],
                    ['July', 5, 5],
                    ['Aug', 13, 13],
                    ['Sep', 12, 12],
                    ['Oct', 10, 10],
                    ['Nov', 9, 9],
                    ['Dec', 8, 8],
                ],
                'chartOptions' => [
                    'title' => 'Monthly Coffee Production by Country',
                    'vAxis' => [
                        'title' => 'Count',
                    ],
                    'hAxis' => [
                        'title' => 'Month',
                    ],
                    'seriesType' => 'bars',
                    'series' => [
                        1 => [
                            'type' => 'line',
                        ],
                    ],
                ],
                'settings' => [
                    'packages' => [
                        'corechart',
                    ],
                ],
            ],
        ];
    }

    public function actionPieChart()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'PieChart',
                'chartData' => [
                    ['A', 'B'],
                    ['Active TRs', 100],
                    ['Inactive TRs', 25],
                    ['Completed TRs', 1250],
                ],
                'chartOptions' => [
                    'width' => 640,
                    'height' => 480,
                    'legacyScatterChartLabels' => true,
                    'is3D' => false,
                    'pieHole' => '0.5',
                    'booleanRole' => 'certainty',
                    'slices' => [
                        0 => [
                            'color' => '#9fc5e8',
                        ],
                        1 => [
                            'color' => '#cccccc',
                        ],
                        2 => [
                            'color' => '#4a86e8',
                        ],
                    ],
                ],
                'settings' => [
                    'packages' => [
                        'corechart',
                    ],
                ],
            ],
        ];
    }
}
