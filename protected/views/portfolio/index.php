<section class="content">
    <div class="wrap usluga">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="b-portfolio__menu">
            <?= CHtml::link(
                'Все',
                array('portfolio/index'),
                array('class' => 'b-portfolio__menu__i ' . (!Yii::app()->request->getQuery('id') ? 'active' : ''))
            ); ?>
            <?php foreach ($a_portfolio as $item) { ?>
                <?= CHtml::link(
                    $item['h1_' . Yii::app()->language],
                    array('portfolio/index', 'id' => $item->url),
                    array('class' => 'b-portfolio__menu__i ' . (Yii::app()->request->getQuery('id') == $item->url ? 'active' : ''))
                ); ?>
            <?php } ?>
        </div>
        <div class="uslugi-b clearfix">
            <?php foreach ($a_project as $item) { ?>
                <?= $this->renderPartial('/portfolio/item', array('item' => $item)); ?>
            <?php } ?>
        </div>
        <?php if ($more) { ?>
            <a
                    href="javascript:;"
                    class="portfolio-more"
                    data-id="<?= Yii::app()->request->getQuery('id', 0); ?>"
                    data-page="1"
            >
                <?= Yii::t('views.portfolio.index', 'load-mode'); ?>
            </a>
        <?php } ?>
    </div>
</section>