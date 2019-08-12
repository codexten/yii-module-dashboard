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

    public function actionTest()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'type' => 'ComboChart',
                'chartData' => [
                    ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                    ['2004/05', 165, 938, 522, 998, 450, 614.6],
                    ['2005/06', 135, 1120, 599, 1268, 288, 682],
                    ['2006/07', 157, 1167, 587, 807, 397, 623],
                    ['2007/08', 139, 1110, 615, 968, 215, 609.4],
                    ['2008/09', 136, 691, 629, 1026, 366, 569.6],

                ],
                'chartOptions' => [
                    'title' => 'Monthly Coffee Production by Country',
                    'vAxis' => [
                        'title' => 'Cups',
                    ],
                    'hAxis' => [
                        'title' => 'Month',
                    ],
                    'seriesType' => 'bars',
                    'series' => [
                        5 => [
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
}
