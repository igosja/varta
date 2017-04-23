<?php

class ServiceController extends Controller
{
    public function actionIndex()
    {
        $a_service = Service::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('h1_ru', 'h1_ua', 'image_id', 'url'), 'order' => '`order`')
        );
        $o_page = PageService::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_service' => $a_service,
            'o_page' => $o_page,
        ));
    }

    public function actionView($id)
    {
        $o_service = Service::model()->findByAttributes(array('url' => $id, 'status' => 1));
        if (!$o_service) {
            $this->redirect(array('index'));
        }
        $o_page = PageService::model()->findByPk(1);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language] => array('index'),
            $o_service['h1_' . Yii::app()->language],
        );
        $o_prev = Service::model()->findByAttributes(
            array('status' => 1),
            array('select' => 'url', 'condition' => 'id>' . $o_service->id, 'order' => '`order`, id')
        );
        $o_next = Service::model()->findByAttributes(
            array('status' => 1),
            array('select' => 'url', 'condition' => 'id<' . $o_service->id, 'order' => '`order` DESC, id DESC')
        );
        $this->setSEO($o_service);
        $this->render('view', array(
            'o_next' => $o_next,
            'o_prev' => $o_prev,
            'o_service' => $o_service,
        ));
    }
}