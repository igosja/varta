<?php

class PortfolioController extends Controller
{
    const ON_PAGE = 12;

    public function actionIndex($id = 0)
    {
        $a_portfolio = Portfolio::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        if ($id) {
            $o_page = PagePortfolio::model()->findByPk(1);
            $this->breadcrumbs = array(
                $o_page['h1_' . Yii::app()->language] => array('index'),
            );
            $o_page = Portfolio::model()->findByAttributes(array('status' => 1, 'url' => $id));
            if (!$o_page) {
                $this->redirect(array('index'));
            }
            $a_project = Project::model()->with('image')->findAllByAttributes(
                array('status' => 1, 'portfolio_id' => $o_page->id),
                array('select' => array('h1_ru', 'h1_ua', 'url'), 'limit' => self::ON_PAGE)
            );
            $count = Project::model()->countByAttributes(array('status' => 1, 'portfolio_id' => $o_page->id));
        } else {
            $o_page = PagePortfolio::model()->findByPk(1);
            $a_project = Project::model()->with('image')->findAllByAttributes(
                array('status' => 1),
                array('select' => array('h1_ru', 'h1_ua', 'url'), 'limit' => self::ON_PAGE)
            );
            $count = Project::model()->countByAttributes(array('status' => 1));
        }
        if ($count > self::ON_PAGE) {
            $more = true;
        } else {
            $more = false;
        }
        $this->breadcrumbs[] = $o_page['h1_' . Yii::app()->language];
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_portfolio' => $a_portfolio,
            'a_project' => $a_project,
            'more' => $more,
            'o_page' => $o_page,
        ));
    }

    public function actionMore($id = 0)
    {
        $page = Yii::app()->request->getQuery('page', 0);
        if ($id) {
            $o_page = Portfolio::model()->findByAttributes(array('status' => 1, 'url' => $id));
            $a_project = Project::model()->with('image')->findAllByAttributes(
                array('status' => 1, 'portfolio_id' => $o_page->id),
                array('select' => array('h1_ru', 'h1_ua', 'url'), 'limit' => self::ON_PAGE, 'offset' => $page * self::ON_PAGE)
            );
            $count = Project::model()->countByAttributes(array('status' => 1, 'portfolio_id' => $o_page->id));
        } else {
            $a_project = Project::model()->with('image')->findAllByAttributes(
                array('status' => 1),
                array('select' => array('h1_ru', 'h1_ua', 'url'), 'limit' => self::ON_PAGE, 'offset' => $page * self::ON_PAGE)
            );
            $count = Project::model()->countByAttributes(array('status' => 1));
        }
        if ($count > self::ON_PAGE * $page + self::ON_PAGE) {
            $more = true;
        } else {
            $more = false;
        }
        $result = array('list' => '', 'more' => $more);
        foreach ($a_project as $item) {
            $result['list'] .= $this->renderPartial('/portfolio/item', array('item' => $item), true);
        }
        print json_encode($result);
    }
}