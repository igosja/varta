<?php

class Portfolio extends CActiveRecord
{
    public function tableName()
    {
        return 'portfolio';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_ua, seo_title_ru, seo_title_ua, url', 'length', 'max' => 255),
            array('seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
            array('order, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'Название (Русский)',
            'h1_ua' => 'Название (Українська)',
            'image_id' => 'Изображение',
            'url' => 'URL',
            'order' => 'Порядок',
            'status' => 'Статус',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}