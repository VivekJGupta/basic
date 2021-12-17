<?php

use yii\db\Migration;

/**
 * Class m211216_073321_yii_project
 */
class m211216_073321_yii_project extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211216_073321_yii_project cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211216_073321_yii_project cannot be reverted.\n";

        return false;
    }
    */
}
