<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_project['h1_' . Yii::app()->language]; ?></h1>
    </div>
    <div class="slider-out">
        <div class="slider clearfix">
            <?php foreach ($o_project->image as $item) { ?>
                <div><img src="<?= ImageIgosja::resize($item->image_id, 980, 600); ?>" alt=""></div>
            <?php } ?>
        </div>
        <a href="javascript:;" class="next"></a>
        <a href="javascript:;" class="prev"></a>
    </div>
    <div class="slider-nav">
        <?php foreach ($o_project->image as $item) { ?>
            <div><img src="<?= ImageIgosja::resize($item->image_id, 100, 61); ?>" alt=""></div>
        <?php } ?>
    </div>
    <div class="wrap">
        <?= $o_project['text_' . Yii::app()->language]; ?>
        <div class="pager centered">
            <?php if ($o_prev) { ?>
                <?= CHtml::link(
                    Yii::t('views.project.view', 'prev'),
                    array('project/view', 'id' => $o_prev->url),
                    array('class' => 'pager__prev')
                ); ?>
            <?php } ?>
            <?php if ($o_next) { ?>
                <?= CHtml::link(
                    Yii::t('views.project.view', 'next'),
                    array('project/view', 'id' => $o_next->url),
                    array('class' => 'pager__next')
                ); ?>
            <?php } ?>
        </div>
    </div>
</section>