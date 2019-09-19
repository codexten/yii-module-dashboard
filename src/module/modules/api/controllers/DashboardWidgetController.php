<?php

namespace codexten\yii\modules\dashboard\modules\api\controllers;

use codexten\yii\modules\auth\helpers\UserHelper;
use codexten\yii\modules\dashboard\modules\api\models\DashboardWidget;
use codexten\yii\rest\ActiveController;
use yii\web\NotFoundHttpException;

class DashboardWidgetController extends ActiveController
{
    /**
     * @inheritDoc
     */
    public function actions()
    {
        return [];
    }

    public function actionRefresh($code)
    {
        $model = DashboardWidget::find()->byUserId(UserHelper::getMyId())->byCode($code)->one();
//        if ($model === null) {
//            $model = new DashboardWidget([
//                'code' => $code,
//                'user_id' => UserHelper::getMyId(),
//            ]);
//            $model->save();
//        }
    }

    public function actionView($code)
    {
        $model = DashboardWidget::findOne(['code' => $code, 'user_id' => UserHelper::getMyId()]);
        if ($model) {
            return $model;
        }

        throw new NotFoundHttpException();

    }
}
