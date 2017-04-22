<section class="content">
    <div class="wrap usluga">
        <div class="breadchambs">
            <a href="javascript:;">Головна</a>
            <span>Послуги</span>
        </div>
        <h1 class="m-title">Послуги</h1>
        <div class="uslugi-b clearfix">
            <?php for ($i=1; $i<=8; $i++) { ?>
                <?= CHtml::link(
                    '<img src="/img/uslugi-page/uslugi-' . $i . '.jpg" alt="">
                    <div class="uslugi-b__i__in">
                        <div class="uslugi-b__i__title">Проектування</div>
                        <div class="uslugi-b__i__btn">Детальніше</div>
                    </div>',
                    array('service/view', 'id' => $i),
                    array('class' => 'uslugi-b__i')
                ); ?>
            <?php } ?>
        </div>
        <div class="centered">
            <p>
                Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <p>
                Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
            </p>
            <p class="grey">“Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio”</p>
        </div>
    </div>
</section>