<?php

class m170423_080557_pagecontact extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagecontact', array(
            'id' => 'pk',
            'address_1_ru' => 'varchar(255) not null',
            'address_1_ua' => 'varchar(255) not null',
            'address_2_ru' => 'varchar(255) not null',
            'address_2_ua' => 'varchar(255) not null',
            'address_3_ru' => 'varchar(255) not null',
            'address_3_ua' => 'varchar(255) not null',
            'email' => 'varchar(255) not null',
            'facebook' => 'varchar(255) not null',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'instagram' => 'varchar(255) not null',
            'lat' => 'varchar(255) not null',
            'lng' => 'varchar(255) not null',
            'shedule_1_ru' => 'varchar(255) not null',
            'shedule_1_ua' => 'varchar(255) not null',
            'shedule_2_ru' => 'varchar(255) not null',
            'shedule_2_ua' => 'varchar(255) not null',
            'shedule_3_ru' => 'varchar(255) not null',
            'shedule_3_ua' => 'varchar(255) not null',
            'pinterest' => 'varchar(255) not null',
            'telephone_1' => 'varchar(255) not null',
            'telephone_2' => 'varchar(255) not null',
            'vk' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pagecontact', array('id' => null));
    }

    public function down()
    {
        $this->dropTable('pagecontact');
    }
}