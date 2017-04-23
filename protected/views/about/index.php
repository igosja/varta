<section class="content">
    <div class="wrap usluga">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <img src="<?= ImageIgosja::resize($o_page->image_id, 1180, 400); ?>" alt="" class="usluga-img" />
        <h2><?= $o_page['h2_' . Yii::app()->language]; ?></h2>
        <?= $o_page['text_1_' . Yii::app()->language]; ?>
        <h3><?= $o_page['h3_' . Yii::app()->language]; ?></h3>
        <div class="our-team clearfix">
            <?php foreach ($a_team as $item) { ?>
                <div class="our-team__i">
                    <img src="<?= ImageIgosja::resize($item->image_id, 290, 290); ?>" alt="">
                </div>
            <?php } ?>
        </div>
        <?= $o_page['text_2_' . Yii::app()->language]; ?>
    </div>
</section>