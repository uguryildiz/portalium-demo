<?php

use yii\db\Migration;

class m010101_010101_demo extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('demo', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
        ], $tableOptions);

        $this->insert('demo', [
            'name' => 'Uğur YILDIZ',
        ]);
    }

    public function down()
    {
        $this->dropTable('demo');
    }
}
