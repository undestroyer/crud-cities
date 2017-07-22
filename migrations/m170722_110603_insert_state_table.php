<?php

use yii\db\Migration;

class m170722_110603_insert_state_table extends Migration
{
    public function safeUp()
    {
        $fp = fopen("./listofareas.txt", "r"); // Открываем файл в режиме чтения

        $states = array();
        if ($fp)
        {
            $i = 0;
            while (!feof($fp))
            {
                //заполняем построчно
                $states[$i] = fgets($fp, 999);
                $i++;
            }
        }
        else{
            fclose($fp);
        }

        foreach ($states as $state) {
            $this->insert('state', array('name' => $state));
        }
    }

    public function safeDown()
    {
        echo "m170722_110603_insert_state_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170722_110603_insert_state_table cannot be reverted.\n";

        return false;
    }
    */
}
