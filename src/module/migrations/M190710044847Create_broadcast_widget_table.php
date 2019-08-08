<?php

namespace codexten\yii\modules\dashboard\migrations;

use yii\db\Migration;

/**
 * Class M190710044847Create_dashboard_widget_table
 *
 * @package codexten\yii\modules\dashboard\migrations
 */
class M190710044847Create_dashboard_widget_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dashboard_widget}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'code' => $this->string(50),
            'data' => $this->text(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-dashboard_widget-user_id}}',
            '{{%dashboard_widget}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-dashboard_widget-user_id}}',
            '{{%dashboard_widget}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-dashboard_widget-user_id}}',
            '{{%dashboard_widget}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-dashboard_widget-user_id}}',
            '{{%dashboard_widget}}'
        );

        $this->dropTable('{{%dashboard_widget}}');
    }
}
