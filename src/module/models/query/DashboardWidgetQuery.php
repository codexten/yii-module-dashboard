<?php

namespace codexten\yii\modules\dashboard\models\query;

use yii\db\ActiveQuery;
use codexten\yii\modules\dashboard\models\DashboardWidget;

class DashboardWidgetQuery extends ActiveQuery
{
    /**
     * @inheritdoc
     * @return DashboardWidget[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DashboardWidget|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param $userId
     *
     * @return $this
     */
    public function byUserId($userId)
    {
        $this->andWhere(['user_id' => $userId]);

        return $this;
    }

    /**
     * @param $code
     *
     * @return $this
     */
    public function byCode($code)
    {
        $this->andWhere(['code' => $code]);

        return $this;
    }
}
