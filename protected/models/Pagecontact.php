<?php

class PageContact extends CActiveRecord
{
    public function tableName()
    {
        return 'pagecontact';
    }

    public function rules()
    {
        return array(
            array(
                'address_1_ru, address_1_ua, address_2_ru, address_2_ua, address_3_ru, address_3_ua,
                shedule_1_ru, shedule_1_ua, shedule_2_ru, shedule_2_ua, shedule_3_ru, shedule_3_ua,
                telephone_1, telephone_2, h1_ru, h1_ua, seo_title_ru, seo_title_ua',
                'length', 'max' => 255),
            array('email', 'email'),
            array('facebook, instagram, pinterest, vk', 'url'),
            array('lat, lng', 'numerical'),
            array('seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'address_1_ru' => 'Адрес 1 (Русский)',
            'address_1_ua' => 'Адрес 1 (Українська)',
            'address_2_ru' => 'Адрес 2 (Русский)',
            'address_2_ua' => 'Адрес 2 (Українська)',
            'address_3_ru' => 'Адрес 3 (Русский)',
            'address_3_ua' => 'Адрес 3 (Українська)',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'h1_ru' => 'H1 (Русский)',
            'h1_ua' => 'H1 (Українська)',
            'instagram' => 'Instagram',
            'lat' => 'Google map lat',
            'lng' => 'Google map lng',
            'pinterest' => 'Pinterest',
            'shedule_1_ru' => 'График пн-пт (Русский)',
            'shedule_1_ua' => 'График пн-пт (Українська)',
            'shedule_2_ru' => 'График сб (Русский)',
            'shedule_2_ua' => 'График сб (Українська)',
            'shedule_3_ru' => 'График вс (Русский)',
            'shedule_3_ua' => 'График вс (Українська)',
            'telephone_1' => 'Телефон 1',
            'telephone_2' => 'Телефон 2',
            'vk' => 'Вконтакте',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}