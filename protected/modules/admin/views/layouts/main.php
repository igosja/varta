<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Административный раздел">
    <script src="/js/jquery.js"></script>
    <title>Административный раздел</title>
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/bootstrap-toggle.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= CHtml::link('Админ', array('index/index'), array('class' => 'navbar-brand')); ?>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <?= CHtml::link('<i class="fa fa-sign-out fa-fw"></i>', array('/site/logout')); ?>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="javascript:;">Главная страница<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Тексты и SEO', array('pagemain/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Слайдер', array('slide/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">О нас<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Тексты и SEO', array('pageabout/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Наша команда', array('team/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Услуги<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Тексты и SEO', array('pageservice/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Услуги', array('service/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Потрфолио<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Тексты и SEO', array('pageportfolio/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Категории', array('portfolio/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Проекты', array('project/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?= CHtml::link('Контакты', array('pagecontact/index')); ?>
                    </li>
                    <li>
                        <?= CHtml::link('Языки', array('language/index')); ?>
                    </li>
                    <li>
                        <?= CHtml::link('Переводы', array('translate/index')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'separator' => '',
            'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
            'inactiveLinkTemplate' => '<li class="active">{label}</li>',
            'tagName' => 'ul',
            'htmlOptions' => array('class' => 'breadcrumb'),
            'links' => $this->breadcrumbs,
        )); ?>
        <?= $content; ?>
    </div>
</div>
<script src="/js/ckeditor/ckeditor.js"></script>
<script src="/js/bootstrap-toggle.min.js"></script>
<script src="/js/rowsorter.js"></script>
<script src="/js/admin.min.js"></script>
<script src="/js/admin.js"></script>
</body>
</html>