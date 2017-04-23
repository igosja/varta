<section class="content">
    <div class="wrap usluga">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_service['h1_' . Yii::app()->language]; ?></h1>
        <img src="<?= ImageIgosja::resize($o_service->image_id, 1600, 500); ?>" alt="" class="usluga-img"/>
        <?= $o_service['text_' . Yii::app()->language]; ?>
        <div class="pager centered">
            <?php if ($o_prev) { ?>
                <?= CHtml::link(
                    Yii::t('views.service.view', 'prev'),
                    array('service/view', 'id' => $o_prev->url),
                    array('class' => 'pager__prev')
                ); ?>
            <?php } ?>
            <?php if ($o_next) { ?>
                <?= CHtml::link(
                    Yii::t('views.service.view', 'next'),
                    array('service/view', 'id' => $o_next->url),
                    array('class' => 'pager__next')
                ); ?>
            <?php } ?>
        </div>
    </div>
</section>