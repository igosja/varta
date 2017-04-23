<section class="content">
    <div class="wrap usluga">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="uslugi-b clearfix">
            <?php foreach ($a_service as $item) { ?>
                <?= CHtml::link(
                    '<img src="' . ImageIgosja::resize($item->image_id, 290, 290) . '" alt="">
                    <div class="uslugi-b__i__in">
                        <div class="uslugi-b__i__title">' . $item['h1_' . Yii::app()->language] . '</div>
                        <div class="uslugi-b__i__btn">' . Yii::t('views.service.index', 'read-mode') . '</div>
                    </div>',
                    array('service/view', 'id' => $item->url),
                    array('class' => 'uslugi-b__i')
                ); ?>
            <?php } ?>
        </div>
        <div class="centered">
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>