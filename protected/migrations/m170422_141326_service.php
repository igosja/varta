<?php

class m170422_141326_service extends CDbMigration
{
    public function up()
    {
        $this->createTable('service', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'image_id' => 'int(11) default 0',
            'text_ru' => 'text not null',
            'text_ua' => 'text not null',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'url' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->createIndex('order', 'service', 'order');
        $this->createIndex('status', 'service', 'status');
        $this->createIndex('url', 'service', 'url');
    }

    public function down()
    {
        $this->dropTable('service');
    }
}