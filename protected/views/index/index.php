<section class="content content_main">
    <div id="slider" class="owl-carousel">
        <div class="item">
            <img src="/img/slide-1.jpg" alt="" />
        </div>
        <div class="item">
            <img src="/img/slide-2.jpg" alt="" />
        </div>
        <div class="item">
            <img src="/img/slide-1.jpg" alt="" />
        </div>
        <div class="item">
            <img src="/img/slide-2.jpg" alt="" />
        </div>
    </div>
    <div class="wrap">
        <div class="m-text">
            <h1 class="m-text__title">Наші послуги</h1>
            <p> euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
            <p class="grey">“Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio”</p>
        </div>
        <div class="b-items clearfix">
            <?php for ($i=1; $i<=8; $i++) { ?>
                <?= CHtml::link(
                    '<img src="/img/uslugi/usluga-' . $i . '.jpg" alt="" class="b-item__img">
                    <span class="b-item__text"><span></span>Проектування</span>',
                    array('service/view', 'id' => $i),
                    array('class' => 'b-item')
                )?>
            <?php } ?>
        </div>
    </div>
</section>