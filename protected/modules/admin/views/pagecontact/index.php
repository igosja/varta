<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Редактировать', array('update', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<?php
$attributes = array(
    'telephone_1',
    'telephone_2',
    'email',
    'facebook',
    'instagram',
    'pinterest',
    'vk',
    'lat',
    'lng',
    'h1_ua',
    'address_1_ua',
    'address_2_ua',
    'address_3_ua',
    'shedule_1_ua',
    'shedule_2_ua',
    'shedule_3_ua',
    'seo_title_ua',
    'seo_description_ua',
    'seo_keywords_ua',
    'h1_ru',
    'address_1_ru',
    'address_2_ru',
    'address_3_ru',
    'shedule_1_ru',
    'shedule_2_ru',
    'shedule_3_ru',
    'seo_title_ru',
    'seo_description_ru',
    'seo_keywords_ru',
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