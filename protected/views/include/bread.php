<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'activeLinkTemplate' => '<a href="{url}">{label}</a>',
    'homeLink' => CHtml::link(Yii::t('views.include.bread', 'home'), array('index/index')),
    'htmlOptions' => array('class' => 'breadchambs'),
    'inactiveLinkTemplate' => '<span>{label}</span>',
    'links' => $this->breadcrumbs,
    'separator' => '',
    'tagName' => 'div',
)); ?>