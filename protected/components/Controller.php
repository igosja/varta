<?php

class Controller extends CController
{
    public $a_language = array();
    public $breadcrumbs = array();
    public $contact;
    public $layout = 'main';
    public $menu = array();
    public $model;
    public $og_image;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;

    public function init()
    {
        $this->a_language = Language::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('code', 'name'), 'order' => '`order`')
        );
        if ($language = Yii::app()->request->getQuery('language')) {
            Yii::app()->language = $language;
        } else {
            $language = Language::model()->find(array('select' => array('code'), 'order' => '`order`'));
            Yii::app()->language = $language->code;
        }
        print '<pre>';
        print_r($language);
        exit;
        $clientScript = Yii::app()->getClientScript();
        $clientScript->scriptMap = array(
            'jquery.js' => false,
        );
        $this->contact = PageContact::model()->findByPk(1);
        $this->model = new Order();
        if ($data = Yii::app()->request->getPost('Order')) {
            $this->model->attributes = $data;
            if ($this->model->validate()) {
                $this->model->send();
                Yii::app()->user->setFlash('form', true);
                $this->refresh();
            }
        }
    }

    public function beforeAction($action)
    {
        if ($language = Yii::app()->request->getPost('language')) {
            Yii::app()->language = $language;
            $redirect = array($this->uniqueId . '/' . $this->action->id);
            if (Yii::app()->request->getQuery('id')) {
                $redirect['id'] = Yii::app()->request->getQuery('id');
            }
            $this->redirect($redirect);
        }
        return $action;
    }

    public function setSEO($model)
    {
        if ($model['seo_title_' . Yii::app()->language]) {
            $this->seo_title = $model['seo_title_' . Yii::app()->language];
        } else {
            $this->seo_title = $model['h1_' . Yii::app()->language];
        }
        if ($model['seo_description_' . Yii::app()->language]) {
            $this->seo_description = $model['seo_description_' . Yii::app()->language];
        }
        if ($model['seo_keywords_' . Yii::app()->language]) {
            $this->seo_keywords = $model['seo_keywords_' . Yii::app()->language];
        }
    }
}