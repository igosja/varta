<?php

class AboutController extends Controller
{
    public function actionIndex()
    {
        $a_team = Team::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('image_id'), 'order' => '`order`', 'limit' => 4)
        );
        $o_page = PageAbout::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_team' => $a_team,
            'o_page' => $o_page,
        ));
    }
}