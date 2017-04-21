<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
    </div>
</div>
<?= $this->renderPartial('/include/grid-view-text'); ?>
<div class="col-lg-12">
    <?php
    $columns = array(
        array(
            'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            'name' => 'id',
        ),
        array(
            'name' => 'code',
        ),
        array(
            'name' => 'name',
        ),
        array(
            'filter' => false,
            'name' => 'status',
            'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            'type' => 'raw',
            'value' => function ($data) {
                if (1 == $data->status) {
                    $checked = 'checked';
                } else {
                    $checked = '';
                }
                $input = '<input
                                class="status"
                                data-id="' . $data->id . '"
                                type="checkbox" ' . $checked . '
                                data-toggle="toggle"
                                data-size="mini"
                                data-onstyle="success"
                              />';
                return $input;
            }
        ),
        array(
            'template' => '{view} {update}',
            'class' => 'CButtonColumn',
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $model->search(),
        'filter' => $model,
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
        'rowCssClass' => array('sorter'),
        'rowHtmlOptionsExpression' => 'array("data-id" => $data->id, "data-controller" => "' . $this->uniqueid . '")',
        'summaryCssClass' => 'text-left',
        'summaryText' => 'Показаны записи <strong>{start}</strong>-<strong>{end}</strong> из <strong>{count}</strong>.',
    ));
    ?>
</div>