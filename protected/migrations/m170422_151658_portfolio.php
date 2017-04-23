<?php

class m170422_151658_portfolio extends CDbMigration
{
    public function up()
    {
        $this->createTable('portfolio', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
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

        $this->createIndex('order', 'portfolio', 'order');
        $this->createIndex('status', 'portfolio', 'status');
        $this->createIndex('url', 'portfolio', 'url');
    }

    public function down()
    {
        $this->dropTable('portfolio');
    }
}