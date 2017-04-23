<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
            <li>
                <?= CHtml::link('Редактировать', array('update', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<?php
$attributes = array(
    'id',
    'h1_ua',
    'seo_title_ua',
    'seo_description_ua',
    'seo_keywords_ua',
    'h1_ru',
    'seo_title_ua',
    'seo_description_ua',
    'seo_keywords_ua',
    array(
        'name' => 'status',
        'type' => 'raw',
        'value' => '<input
            class="status"
            data-id="' . $model->id . '"
            data-onstyle="success"
            data-size="mini"
            data-toggle="toggle"
            type="checkbox"
            ' . ($model->status ? 'checked' : '') . '
          />',
    ),
);
$this->widget('zii.widgets.CDetailView', array(
    'attributes' => $attributes,
    'data' => $model,
    'htmlOptions' => array('class' => 'table'),
    'itemCssClass' => '',
    'itemTemplate' => '<tr data-controller="' . $this->uniqueid . '"><td class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">{label}</td><td>{value}</td></tr>',
    'nullDisplay' => '-',
));
?>