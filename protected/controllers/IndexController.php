<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $a_service = Service::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('h1_ru', 'h1_ua', 'image_id', 'url'), 'order' => '`order`')
        );
        $a_slide = Slide::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('image_id'), 'order' => '`order`')
        );
        $o_page = PageMain::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_service' => $a_service,
            'a_slide' => $a_slide,
            'o_page' => $o_page,
        ));
    }
}