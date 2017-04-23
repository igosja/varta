<?php

class ProjectController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('portfolio/index'));
    }

    public function actionView($id)
    {
        $o_project = Project::model()->with('image')->findByAttributes(array('url' => $id, 'status' => 1));
        if (!$o_project) {
            $this->redirect(array('portfolio/index'));
        }
        $o_page = PagePortfolio::model()->findByPk(1);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language] => array('portfolio/index'),
        );
        $o_page = Portfolio::model()->findByAttributes(array('id' => $o_project->id));
        $this->breadcrumbs[$o_page['h1_' . Yii::app()->language]] = array('portfolio/index', 'id' => $o_page->url);
        $this->breadcrumbs[] = $o_project['h1_' . Yii::app()->language];
        $o_prev = Project::model()->findByAttributes(
            array('status' => 1, 'portfolio_id' => $o_project->portfolio_id),
            array('select' => 'url', 'condition' => 'id>' . $o_project->id, 'order' => 'id')
        );
        $o_next = Project::model()->findByAttributes(
            array('status' => 1, 'portfolio_id' => $o_project->portfolio_id),
            array('select' => 'url', 'condition' => 'id<' . $o_project->id, 'order' => 'id DESC')
        );
        $this->setSEO($o_project);
        $this->render('view', array(
            'o_next' => $o_next,
            'o_prev' => $o_prev,
            'o_project' => $o_project
        ));
    }
}