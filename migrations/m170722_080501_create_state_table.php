<?php

use yii\db\Migration;

/**
 * Handles the creation of table `state`.
 */
class m170722_080501_create_state_table extends Migration
{

    public function up()
    {
        $this->createTable('state', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('state');
    }
}
