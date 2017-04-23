<?php

class SlideController extends AController
{
    public $h1 = 'Слайды';
    public $title = 'Слайды';
    public $model_name = 'Slide';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->dbCriteria->order = '`order` ASC';
        $model->unsetAttributes();
        if (isset($_GET[$this->model_name])) {
            $model->attributes = $_GET[$this->model_name];
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate()
    {
        $this->h1 = 'Загрузка слайдов';
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $this->h1,
        );
        $model = $this->getModel();
        $this->uploadImage();
        $this->render('form', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $model->delete();
        $this->redirect(array('index'));
    }

    public function actionStatus($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function actionOrder($id)
    {
        $id = (int)$id;
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        $this->getModel()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
    }

    public function uploadImage()
    {
        if (isset($_FILES['image']['name'][0]) && !empty($_FILES['image']['name'][0])) {
            $image = $_FILES['image'];
            for ($i = 0, $count_image = count($image['name']); $i < $count_image; $i++) {
                $ext = $image['name'][$i];
                $ext = explode('.', $ext);
                $ext = end($ext);
                $file = $image['tmp_name'][$i];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->primaryKey;
                $model = $this->getModel();
                $model->image_id = $image_id;
                $model->save();
            }
            $this->redirect(array('index'));
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}