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


    public function actionTest()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'data' => [
                'message' => 'Hai',
                'chartData' => [
                    ['Year', 'Sales', 'Expenses', 'Profit'],
                    ['2014', 1000, 400, 200],
                    ['2015', 1170, 460, 250],
                    ['2016', 660, 1120, 300],
                    ['2017', 1030, 540, 350],
                ],
                'chartOptions' => [
                    'chart' => [
                        'title' => 'Company Performance',
                        'subtitle' => 'Sales, Expenses, and Profit: 2014-2017',
                    ],
                ],
            ],
        ];
    }

}
