<?php

class Project extends CActiveRecord
{
    public function tableName()
    {
        return 'project';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_ua, seo_title_ru, seo_title_ua, url', 'length', 'max' => 255),
            array('text_ru, text_ua, seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
            array('portfolio_id', 'required'),
            array('portfolio_id', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'Название (Русский)',
            'h1_ua' => 'Название (Українська)',
            'portfolio_id' => 'Категория',
            'text_ru' => 'Текст (Русский)',
            'text_ua' => 'Текст (Українська)',
            'url' => 'URL',
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

    public function relations()
    {
        return array(
            'image' => array(self::HAS_MANY, 'ProjectImage', array('project_id' => 'id'), 'order' => '`order`'),
            'portfolio' => array(self::HAS_ONE, 'Portfolio', array('id' => 'portfolio_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}