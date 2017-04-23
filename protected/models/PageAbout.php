<?php

class PageAbout extends CActiveRecord
{
    public function tableName()
    {
        return 'pageabout';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_ua, h2_ru, h2_ua, h3_ru, h3_ua, seo_title_ru, seo_title_ua', 'length', 'max' => 255),
            array('text_1_ru, text_1_ua, text_2_ru, text_2_ua, seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
            array('image_id', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'H1 (Русский)',
            'h1_ua' => 'H1 (Українська)',
            'h2_ru' => 'H2 (Русский)',
            'h2_ua' => 'H2 (Українська)',
            'h3_ru' => 'H3 (Русский)',
            'h3_ua' => 'H3 (Українська)',
            'image_id' => 'Изображение',
            'text_1_ru' => 'Текст 1 (Русский)',
            'text_1_ua' => 'Текст 1 (Українська)',
            'text_2_ru' => 'Текст 2 (Русский)',
            'text_2_ua' => 'Текст 2 (Українська)',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}