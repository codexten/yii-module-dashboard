<?php

namespace codexten\yii\modules\dashboard\models;

use codexten\yii\db\ActiveRecord;
use codexten\yii\modules\auth\models\User;
use paulzi\jsonBehavior\JsonBehavior;
use Yii;
use codexten\yii\modules\dashboard\models\query\DashboardWidgetQuery;

/**
 * This is the model class for table "{{%dashboard_widget}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property string|array $data
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * Class DashboardWidget
 */
class DashboardWidget extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%dashboard_widget}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['code', 'data'], 'safe'],
            [
                ['user_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => User::class,
                'targetAttribute' => ['user_id' => 'id'],
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors[] = [
            'class' => JsonBehavior::class,
            'attributes' => ['data'],
        ];

        return $behaviors;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:dashboard', 'ID'),
            'user_id' => Yii::t('codexten:dashboard', 'User ID'),
            'code' => Yii::t('codexten:dashboard', 'Code'),
            'data' => Yii::t('codexten:dashboard', 'Data'),
            'status' => Yii::t('codexten:dashboard', 'Status'),
            'created_at' => Yii::t('codexten:dashboard', 'Created At'),
            'updated_at' => Yii::t('codexten:dashboard', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return DashboardWidgetQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DashboardWidgetQuery(get_called_class());
    }
}
