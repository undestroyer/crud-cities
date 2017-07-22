<?php

use yii\db\Migration;

class m170722_113126_insert_city_table extends Migration
{
    public function safeUp()
    {
        $this->insert('city', array(
            'name' => 'Красноярск',
            'stateId' => 24,
            'population' => 1080000,
            'telephoneCode' => '391'
        ));
    }

    public function safeDown()
    {
        echo "m170722_113126_insert_city_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170722_113126_insert_city_table cannot be reverted.\n";

        return false;
    }
    */
}
