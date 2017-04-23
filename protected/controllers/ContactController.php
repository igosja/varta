<?php

class ContactController extends Controller
{
    public function actionIndex()
    {
        $model = new Feedback();
        if ($data = Yii::app()->request->getPost('Feedback')) {
            $model->attributes = $data;
            if ($model->validate()) {
                $model->send();
                Yii::app()->user->setFlash('form', true);
                $this->refresh();
            }
        }
        $o_page = PageContact::model()->findByPk(1);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->setSEO($o_page);
        $this->render('index', array(
            'model' => $model,
            'o_page' => $o_page,
        ));
    }
}