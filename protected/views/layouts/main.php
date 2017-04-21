<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>        +<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js homepage"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <meta property="og:title" content="<?= $this->seo_title; ?>" />
    <meta property="og:description" content="<?= $this->seo_description; ?>" />
    <meta property="og:type" content="text" />
    <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . $this->og_image; ?>" />
    <meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta http-equiv="content-language" content="ru" />
    <meta name="viewport" content="width=1240">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900&amp;subset=cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/main.css">

    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="/js/vendor/libs.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a target="_blank" rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="sitewrap">
    <header class="clearfix">
        <div class="wrap">
            <div class="header-top clearfix">
                <?= CHtml::link('<img src="/img/logo.png" alt="">', array('index/index'), array('class' => 'logo')); ?>
                <div class="header-phones">
                    <a href="tel:+380442415556"><span>+38</span> 044 241 55 56</a>
                    <a href="tel:+380507652354"><span>+38</span> 050 765 23 54</a>
                </div>
                <div class="header-top__right clearfix">
                    <div class="header-email">E-mail: <a href="mailto:vartist@ukr.net">vartist@ukr.net</a></div>
                    <a href="javascript:;" data-selector="form-order" class="header-offer overlayElementTrigger">Замовити послугу</a>
                    <div class="jqui-lang">
                        <select name="" id="">
                            <option value=""  selected="">Укр</option>
                            <option value="" >Рус</option>
                        </select>
                    </div>
                </div>
            </div>
            <nav>
                <a href="javascript:;" class="nav-link">Про нас</a>
                <a href="javascript:;" class="nav-link">Послуги</a>
                <a href="javascript:;" class="nav-link">Портфоліо</a>
                <a href="javascript:;" class="nav-link">Контакти</a>
            </nav>
        </div>
    </header>
    <?= $content; ?>
    <div class="clearfix-footer"></div>
</div>
<footer>
    <div class="wrap">
        <div class="footer-top clearfix">
            <div class="footer-soc clearfix">
                <a href="javascript:;" class="footer-soc__facebook"></a>
                <a href="javascript:;" class="footer-soc__insta"></a>
                <a href="javascript:;" class="footer-soc__vk"></a>
                <a href="javascript:;" class="footer-soc__pint"></a>
            </div>
            <div class="footer-contacts clearfix">
                <div class="footer-phones clearfix">
                    <a href="tel:+38 044 241 55 56"><span>+38</span> 044 241 55 56</a>
                    <a href="tel:+38 050 765 23 54"><span>+38</span> 050 765 23 54</a>
                </div>
                <a href="mailto:vartist@ukr.net" class="footer-mail">vartist@ukr.net</a>
            </div>
            <a href="javascript:;" class="to-top">Вверх</a>
        </div>
        <div class="footer-info clearfix">
            <div class="footer-info__copy">© 2014—2017  «Вартість» проектне бюро, строительство и архитектура</div>
            <div class="footer-info__maks">
                <a href="javascript:;" class="maks-logo">Макс</a>
                <div>
                    <a href="tel:067-96-255-26">067-96-255-26</a><br />
                    <a href="mailto:panditmaximus@gmail.com">panditmaximus@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
        <div class="of-form form-order clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <form>
                <div class="of-form__title">Замовити послуги</div>
                <div class="of-wrap clearfix">
                    <div class="need"><input type="text" class="of-input of-input_name" placeholder="Ваше имя" required /></div>
                    <div class="need"><input type="tel" class="of-input of-input_phone phone_mask" placeholder="Телефон" required /></div>
                    <input type="email" class="of-input of-input_email" placeholder="E-mail" required=" " />
                    <div class="jqui-select need">
                        <select name="" id="">
                            <option value=""  selected="">Послуга</option>
                            <option value="" >Послуга 1</option>
                        </select>
                    </div>
                    <textarea placeholder="Комментарий" class="of-form__textarea"></textarea>
                    <div class="of-form__text"><span></span>Поля обов’язкові для заповнення</div>
                    <a href="javascript:;" class="of-submit of-submit-form">Замовити</a>
                </div>
            </form>
        </div>
        <div class="of-form form-thanks clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <div class="of-form__thanks">
                <span>Спасибо</span><br>
                Я с Вами свяжусь<br>
                ближайшим временем
            </div>
        </div>
    </div>
</section>
</body>
</html>