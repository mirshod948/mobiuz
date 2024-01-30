<?php

use yii\db\Migration;

/**
 * Class m240130_093209_feedback
 */
class m240130_093209_feedback extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->unique()->notNull(),
            'phone' => $this->string(20)->notNull(),
            'message' => $this->text()->notNull(),
            'captcha' => $this->string(10)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240130_093209_feedback cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240130_093209_feedback cannot be reverted.\n";

        return false;
    }
    */
}
