<?php

namespace codexten\yii\modules\dashboard\controllers;

use codexten\yii\web\Controller;

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

}
