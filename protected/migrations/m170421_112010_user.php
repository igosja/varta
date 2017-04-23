<?php

class m170421_112010_user extends CDbMigration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => 'pk',
            'username' => 'varchar(255) not null',
            'password' => 'varchar(32) not null',
            'userrole_id' => 'tinyint(1) default 3',
        ));

        $this->createIndex('userrole_id', 'user', 'userrole_id');

        $this->insert('user', array(
            'username' => 'admin',
            'password' => '3679163934587a4abafd80a44d0e318a',
            'userrole_id' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('user');
    }
}