<?php

class ProjectController extends Controller
{
    public function actionView($id)
    {
//        $o_mainpage = MainPage::model()->findByPk(1);
//        $this->setSEO($o_mainpage);
        $this->render('view', array(
//            'o_mainpage' => $o_mainpage
        ));
    }
}