<?php

class m170421_110710_language extends CDbMigration
{
    public function up()
    {
        $this->createTable('language', array(
            'id' => 'pk',
            'code' => 'varchar(5) not null',
            'name' => 'varchar(255) not null',
            'order' => 'tinyint(1) default 0',
            'status' => 'tinyint(1) default 1',
        ));

        $this->createIndex('order', 'language', 'order');
        $this->createIndex('status', 'language', 'status');

        $this->insertMultiple('language', array(
            array('code' => 'ua', 'name' => 'Укр', 'order' => 0),
            array('code' => 'ru', 'name' => 'Рус', 'order' => 1),
        ));
    }

    public function down()
    {
        $this->dropTable('language');
    }
}