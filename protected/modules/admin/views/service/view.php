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
    'url',
    'h1_ua',
    array(
        'name' => 'text_ua',
        'type' => 'raw',
    ),
    'h1_ru',
    array(
        'name' => 'text_ru',
        'type' => 'raw',
    ),
    array(
        'name' => 'image_id',
        'type' => 'raw',
        'value' => isset($model->image->url)
            ? '<div class="col-lg-12"><a href="javascript:;" class="thumbnail"><img src="'
            . $model->image->url
            . '"/></a></div>'
            : '',
    ),
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