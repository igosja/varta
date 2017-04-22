<?php

class ServiceController extends Controller
{
    public function actionIndex()
    {
//        $o_mainpage = MainPage::model()->findByPk(1);
//        $this->setSEO($o_mainpage);
        $this->render('index', array(
//            'o_mainpage' => $o_mainpage
        ));
    }

    public function actionView($id)
    {
//        $o_mainpage = MainPage::model()->findByPk(1);
//        $this->setSEO($o_mainpage);
        $this->render('view', array(
//            'o_mainpage' => $o_mainpage
        ));
    }
}