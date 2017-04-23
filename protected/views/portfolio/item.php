<?= CHtml::link(
    '<img src="' . ImageIgosja::resize((isset($item->image[0]->image_id) ? $item->image[0]->image_id : 0), 290, 290) . '" alt="">
    <div class="uslugi-b__i__in">
        <div class="uslugi-b__i__title">' . $item['h1_' . Yii::app()->language] . '</div>
        <div class="uslugi-b__i__btn">' . Yii::t('views.portfolio.item', 'read-mode') . '</div>
    </div>',
    array('project/view', 'id' => $item->url),
    array('class' => 'uslugi-b__i')
); ?>