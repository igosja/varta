<?php

class PageaboutController extends AController
{
    public $h1 = 'О нас';
    public $title = 'О нас';
    public $model_name = 'PageAbout';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->breadcrumbs = array(
            $this->title,
        );
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate()
    {
        $this->h1 = 'Редактирование страницы';
        $model = $this->getModel()->findByPk(1);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                if ($image_id = $this->uploadImage()) {
                    $model->image_id = $image_id;
                    $model->save();
                }
                $this->redirect(array('index'));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        $this->render('form', array('model' => $model));
    }

    public function uploadImage()
    {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            $file = $image['tmp_name'];
            $image_url = ImageIgosja::put_file($file, $ext);
            $o_image = new Image();
            $o_image->url = $image_url;
            $o_image->save();
            return $o_image->primaryKey;
        }
        return false;
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}