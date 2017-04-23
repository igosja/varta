<?php

class m170422_151714_project extends CDbMigration
{
    public function up()
    {
        $this->createTable('project', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'portfolio_id' => 'int(11) default 0',
            'text_ru' => 'text not null',
            'text_ua' => 'text not null',
            'status' => 'tinyint(1) DEFAULT 1',
            'url' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->createIndex('portfolio_id', 'project', 'portfolio_id');
        $this->createIndex('status', 'project', 'status');
        $this->createIndex('url', 'project', 'url');
    }

    public function down()
    {
        $this->dropTable('project');
    }
}