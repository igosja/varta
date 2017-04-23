<?php

class m170422_151643_pageportfolio extends CDbMigration
{
    public function up()
    {
        $this->createTable('pageportfolio', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pageportfolio', array('id' => null));
    }

    public function down()
    {
        $this->dropTable('pageportfolio');
    }
}