<?php

class m170422_123453_pageabout extends CDbMigration
{
    public function up()
    {
        $this->createTable('pageabout', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'h2_ru' => 'varchar(255) not null',
            'h2_ua' => 'varchar(255) not null',
            'h3_ru' => 'varchar(255) not null',
            'h3_ua' => 'varchar(255) not null',
            'image_id' => 'int(11) default 0',
            'text_1_ru' => 'text not null',
            'text_1_ua' => 'text not null',
            'text_2_ru' => 'text not null',
            'text_2_ua' => 'text not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pageabout', array('id' => null));
    }

    public function down()
    {
        $this->dropTable('pageabout');
    }
}