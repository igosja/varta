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
    array(
        'name' => 'portfolio_id',
        'value' => $model->portfolio->h1_ru,
    ),
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
<div class="col-lg-12">
    <?php
    $columns = array(
        array(
            'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            'htmlOptions' => array('class' => 'text-center'),
            'type' => 'raw',
            'value' => function () {
                return '<i class="fa fa-arrows-v sorter">';
            },
        ),
        array(
            'name' => 'image_id',
            'sortable' => false,
            'type' => 'raw',
            'value' => function ($image) {
                return '<div class="col-lg-6"><a href="javascript:;" class="thumbnail"><img src="'
                    . $image->image->url
                    . '"/></a></div>';
            }
        ),
        array(
            'buttons' => array(
                'delete' => array(
                    'url' => 'CHtml::normalizeUrl(array("deleteimage", "id" => $data->id))',
                )),
            'class' => 'CButtonColumn',
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
            'template' => '{delete}',
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $image->search(),
//        'filter' => $model,
        'itemsCssClass' => 'table table-striped table-bordered sort-table',
        'htmlOptions' => array('data-controller' => $this->uniqueid),
        'pager' => array(
            'header' => '',
            'footer' => '',
            'internalPageCssClass' => '',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
            'nextPageCssClass' => 'next',
            'lastPageCssClass' => 'next',
            'prevPageLabel' => '<',
            'firstPageLabel' => '<<',
            'previousPageCssClass' => 'prev',
            'firstPageCssClass' => 'prev',
            'selectedPageCssClass' => 'active',
            'htmlOptions' => array('class' => 'pagination'),
        ),
        'pagerCssClass' => 'pager-css-class',
        'rowHtmlOptionsExpression' => 'array("data-id" => $data->id, "data-controller" => "' . $this->uniqueid . '")',
        'summaryCssClass' => 'text-left',
        'summaryText' => 'Показаны записи <strong>{start}</strong>-<strong>{end}</strong> из <strong>{count}</strong>.',
    ));
    ?>
</div>