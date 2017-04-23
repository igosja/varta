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

    public function actionTranslate()
    {
        $a_text = array(
            array('views.contact.index', 'shedule'),
            array('views.contact.index', 'address'),
            array('views.contact.index', 'telephone'),
            array('views.contact.index', 'mon-fri'),
            array('views.contact.index', 'sat'),
            array('views.contact.index', 'sun'),
            array('views.contact.index', 'form-title'),
            array('views.contact.index', 'form-send'),
            array('form.feedback', 'name'),
            array('form.feedback', 'telephone'),
            array('form.feedback', 'email'),
            array('form.feedback', 'text'),
            array('form', 'form-required'),
            array('views.include.bread', 'home'),
            array('views.layout.main', 'link-order-service'),
            array('views.layout.main', 'link-about-us'),
            array('views.layout.main', 'link-service'),
            array('views.layout.main', 'link-portfolio'),
            array('views.layout.main', 'link-contacts'),
            array('views.layout.main', 'up'),
            array('views.layout.main', 'copyright'),
            array('views.layout.main', 'form-title'),
            array('form.order', 'name'),
            array('form.order', 'telephone'),
            array('form.order', 'email'),
            array('form.order', 'text'),
            array('views.layout.main', 'form-send'),
            array('views.layout.main', 'thanks'),
            array('views.layout.main', 'we-will-call'),
            array('views.portfolio.index', 'load-mode'),
            array('views.portfolio.item', 'read-mode'),
            array('views.project.view', 'prev'),
            array('views.project.view', 'next'),
            array('views.service.index', 'read-mode'),
            array('views.service.view', 'prev'),
            array('views.service.view', 'next'),
        );

        foreach ($a_text as $item) {
            $s_model = new SourceMessage();
            $s_model->category = $item[0];
            $s_model->message = $item[1];
            $s_model->timecreated = time();
            $s_model->timemodified = time();
            $s_model->save();

            $model = new Message();
            $model->id = $s_model->id;
            $model->language = 'ru';
            $model->timecreated = time();
            $model->timemodified = time();
            $model->save();

            $model = new Message();
            $model->id = $s_model->id;
            $model->language = 'ua';
            $model->timecreated = time();
            $model->timemodified = time();
            $model->save();
        }

        print 'ok';
    }
}