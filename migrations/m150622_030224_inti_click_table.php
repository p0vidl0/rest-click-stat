<?php

use yii\db\Migration;

class m150622_030224_inti_click_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'click',
            [
                'id' => 'pk',
                'object' => 'string',
                'timestamp' => 'integer',
                'referer' => 'string',
                'user_ip4' => 'string',
                'user_host' => 'string',
                'user_agent' => 'string',
            ]);

    }

    public function down()
    {
        $this->dropTable('click');

        return true;
    }
}