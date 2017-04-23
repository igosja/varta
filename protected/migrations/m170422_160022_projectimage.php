<?php

class m170422_160022_projectimage extends CDbMigration
{
    public function up()
    {
        $this->createTable('projectimage', array(
            'id' => 'pk',
            'image_id' => 'int(11) default 0',
            'project_id' => 'int(11) default 0',
            'order' => 'int(11) default 0',
        ));

        $this->createIndex('project_id', 'projectimage', 'project_id');
        $this->createIndex('order', 'projectimage', 'order');
    }

    public function down()
    {
        $this->dropTable('projectimage');
    }
}