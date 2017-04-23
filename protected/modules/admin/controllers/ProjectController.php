<?php

class ProjectController extends AController
{
    public $h1 = 'Проекты';
    public $title = 'Проекты';
    public $model_name = 'Project';

    public function actionIndex()
    {
        $model = $this->getModel('search');
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

    public function actionUpdate($id = 0)
    {
        $this->h1 = 'Редактирование проекта';
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                if (empty($model->url)) {
                    $model->url = $model->id . '-' . str_replace($this->rus, $this->lat, $model->h1_ua);
                    $model->save();
                }
                $this->uploadImage($model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->h1_ru] = array('view', 'id' => $id);
        }
        $a_portfolio = Portfolio::model()->findAll(array('order' => '`order`'));
        $this->render('form', array('model' => $model, 'a_portfolio' => $a_portfolio));
    }

    public function actionView($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $image = new ProjectImage('search');
        $image->dbCriteria->order = '`order` ASC';
        $image->unsetAttributes();
        $image->attributes = array('project_id' => $id);
        $this->h1 = $model->h1_ru;
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $model->h1_ru,
        );
        $this->render('view', array('model' => $model, 'image' => $image));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function actionDeleteimage($id)
    {
        $model = ProjectImage::model()->findByPk($id);
        $project_id = $model->project_id;
        $model->delete();
        $this->redirect(array('view', 'id' => $project_id));
    }

    public function actionStatus($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function actionOrder($id)
    {
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        ProjectImage::model()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = ProjectImage::model()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = ProjectImage::model()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
    }

    public function uploadImage($id)
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
                $image_id = $o_image->id;
                $model = new ProjectImage();
                $model->image_id = $image_id;
                $model->project_id = $id;
                $model->save();
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}