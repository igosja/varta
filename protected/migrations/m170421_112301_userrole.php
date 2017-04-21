<?php

class m170421_112301_userrole extends CDbMigration
{
    public function up()
    {
        $this->createTable('userrole', array(
            'id' => 'pk',
            'name' => 'varchar(255) not null',
        ));

        $this->insertMultiple('userrole', array(
            array('name' => 'Администратор'),
            array('name' => 'Модератор'),
            array('name' => 'Пользователь'),
        ));
    }

    public function down()
    {
        $this->dropTable('userrole');
    }
}