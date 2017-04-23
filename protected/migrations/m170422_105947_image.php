<?php

class m170422_105947_image extends CDbMigration
{
    public function up()
    {
        $this->createTable('image', array(
            'id' => 'pk',
            'url' => 'varchar(255) NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('image');
    }
}