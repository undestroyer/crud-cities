<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m170722_080515_create_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('city', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'stateId' => 'integer NOT NULL',
            'population' => 'integer NOT NULL',
            'telephoneCode' => 'string NOT NULL',
        ]);
        $this->addForeignKey('city_state_id', 'city', 'stateId', 'state', 'id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('city');
    }
}
