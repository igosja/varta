<section class="content">
    <div class="wrap">
        <div class="breadchambs">
            <a href="javascript:;">Головна</a>
            <a href="javascript:;">Портфоліо</a>
            <span>Будівництво моста “Парк Юрського Періоду”</span>
        </div>
        <h1 class="m-title">Будівництво моста “Парк Юрського Періоду”</h1>
    </div>
    <div class="slider-out">
        <div class="slider clearfix">
            <div><img src="/img/project-1.jpg" alt=""></div>
            <div><img src="/img/project-2.jpg" alt=""></div>
            <div><img src="/img/project-1.jpg" alt=""></div>
            <div><img src="/img/project-2.jpg" alt=""></div>
            <div><img src="/img/project-1.jpg" alt=""></div>
            <div><img src="/img/project-2.jpg" alt=""></div>
        </div>
        <a href="javascript:;" class="next"></a>
        <a href="javascript:;" class="prev"></a>
    </div>
    <div class="slider-nav">
        <div><img src="/img/project-1.jpg" alt=""></div>
        <div><img src="/img/project-2.jpg" alt=""></div>
        <div><img src="/img/project-1.jpg" alt=""></div>
        <div><img src="/img/project-2.jpg" alt=""></div>
        <div><img src="/img/project-1.jpg" alt=""></div>
        <div><img src="/img/project-2.jpg" alt=""></div>
    </div>
    <div class="wrap">
        <h2 class="project__title">Абзац</h2>
        <p>
            Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <p>
            Aenean euismod bibendum laoreet. Proin <a href="">gravida</a> dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
        </p>
        <p class="grey">“Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio”</p>
        <div class="pager centered">
            <?= CHtml::link('Попередня послуга', array('project/view', 'id' => 1), array('class' => 'pager__prev')); ?>
            <?= CHtml::link('Слідуюча послуга', array('project/view', 'id' => 1), array('class' => 'pager__next')); ?>
        </div>
    </div>
</section>