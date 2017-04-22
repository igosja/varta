<section class="content">
    <div class="wrap usluga">
        <div class="breadchambs">
            <a href="javascript:;">Головна</a>
            <span>Портфоліо</span>
        </div>
        <h1 class="m-title">Портфоліо</h1>
        <div class="b-portfolio__menu">
            <?= CHtml::link('Все', array('portfolio/index'), array('class' => 'b-portfolio__menu__i')); ?>
            <?= CHtml::link('Проектування', array('portfolio/index', 'id' => 1), array('class' => 'b-portfolio__menu__i active')); ?>
        </div>
        <div class="uslugi-b clearfix">
            <?php for ($i=1; $i<=12; $i++) { ?>
                <?= CHtml::link(
                    '<img src="/img/uslugi-page/uslugi-1.jpg" alt="">
                    <div class="uslugi-b__i__in">
                        <div class="uslugi-b__i__title">Объект ' . $i . '</div>
                        <div class="uslugi-b__i__btn">Детальніше</div>
                    </div>',
                    array('project/view', 'id' => $i),
                    array('class' => 'uslugi-b__i')
                ); ?>
            <?php } ?>
        </div>
        <a href="javascript:;" class="portfolio-more">Загрузити ще</a>
    </div>
</section>