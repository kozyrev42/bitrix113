<?
/* проверка на подключение битрикса */
/* чтобы файл не исполнялся на прямую без ядра битрикса */
/* если КОНСТАНТА не объявлена или не равна true, то завершение скрипта */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();


/* проверка главная у нас страница или нет */

/* метод Возвращает путь к текущей странице относительно корня */
/* $APPLICATION->GetCurPage(true)       // "/index.php" */
/* $APPLICATION->GetCurPage(false)      // "/" */

/* SITE_DIR - url корня сайта -> "/" */

/* в переменную сохраняется true, если отработан "/index.php" */
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;

?>



<!DOCTYPE html>
<!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->

<head>

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <title>Заголовок окна браузера</title> -->
    <!-- чтобы <title> можно было править из админки -->
    <title><? $APPLICATION->ShowTitle(); ?></title>



    <!-- метод выведет/подгрузит все мета-тэги и все подключения скриптов -->
    <? $APPLICATION->ShowHead(); ?>

    <!-- <link rel="stylesheet" type="text/css" href="<? SITE_TEMPLATE_PATH ?>/css/common-styles.css" /> -->
    <!-- подключим стили специальным методом -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/common-styles.css'); ?>
    <link rel="icon" href="<? SITE_TEMPLATE_PATH ?>/ico/favicon_bx.png">

    <!-- подключаем скрипты специальным методом, чтобы при каждой итерации скрипта, выполнялся файл с сервера, а не из кэша браузера -->
    <!--[if lt IE 9]>
	<script src="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-html5shiv-respond.min.js'); ?>"></script>
	<![endif]-->

    <!--[if gte IE 9]><!-->
    <script src="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/vendor/modernizr.min.js'); ?>"></script>
    <!--<![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
    <p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
            href="http://browsehappy.com/">
        обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
        Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
    <![endif]-->

    <!-- <?php var_dump(SITE_TEMPLATE_PATH) ?> -->

    <? $APPLICATION->ShowPanel(); ?>
    <!-- подключение панели администратора для публичной части сайта -->

    <div class="sticky-wrap">
        <header>
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <a class="logo" href="#">
                                <div class="image">Intervolga.ru</div>
                                <div id="slogan-rand" class="slogan">
                                    <noscript>Сайты и реклама в интернете</noscript>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-7 col-xs-12 hidden-xs">
                                    <ul class="btn-list-inline">
                                        Самый лучший производитель одежды
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-xs-12 hidden-print">
                                    <div class="input-group-search">
                                        <input type="text" class="form-control" placeholder="Поиск...">
                                        <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul class="phone-list">
                                <li><i>+7 (495)</i> <b>000-00-00</b></li>
                                <li><i>+7 (8442)</i> <b>00-00-00</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <div class="navbar navbar-intervolga">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav">
                            <span class="sr-only">Переключить навигацию</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">InterVolga.ru</a>
                    </div>
                    <div class="collapse navbar-collapse" id="top-nav">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Главная страница</a></li>
                            <li><a href="#">Каталог товаров</a></li>
                            <li><a href="#">Новости компании</a></li>
                            <li><a href="#">Гарантия</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Дилерам</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- если станица Главная/index.php, то выводим блок вёрстки Главной страницы -->
        <? if ($bIsMainPage) : ?>
            <div class="slider-responsive">
                <div class="slider-responsive-panel">
                    <input data-toggle="radio-switch" type="checkbox">
                    <span>Наши лучшие предложения Вам</span>
                </div>
                <div class="toggle-height">
                    <div class="slider-responsive-controls">
                        <a class="hidden-xs" href="#prev"></a>
                        <a class="hidden-xs" href="#next"></a>
                    </div>
                    <div class="slider-responsive-inner">


                        <div class="slider-responsive-inner-item active">
                            <div class="slider-responsive-inner-item-img" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/slider-main/1.jpg')">
                                <div class="slider-responsive-inner-item-img-title">
                                    <div class="h2">Одежда для велосипедистов</div>
                                    <div>В следующем году наша компания начинает коллекции одежды для велосипедистов. Не пропустите!</div>
                                    <a href="#" class="link">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-responsive-inner-item">
                            <div class="slider-responsive-inner-item-img" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/slider-main/2.jpg')">
                                <div class="slider-responsive-inner-item-img-title">
                                    <div class="h2">Одежда для бега</div>
                                    <div>Новая коллекция спортивной одежды для бега</div>
                                    <a href="#" class="link">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-responsive-inner-item">
                            <div class="slider-responsive-inner-item-img" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/slider-main/3.jpg')">
                                <div class="slider-responsive-inner-item-img-title">
                                    <div class="h2">Ценопад! Успейте купить на этой неделе!</div>
                                    <div>Наступила осень. Желтеют и опадают листья, навевая уныние и тоску о закончившемся лете. Раскрасьте хмурые будни, спешите на осеннюю акцию Ценопад! Лучшие цены осени, только качественные товары!</div>
                                    <a href="#" class="link">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-responsive-inner-item">
                            <div class="slider-responsive-inner-item-img" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/slider-main/4.jpg')">
                                <div class="slider-responsive-inner-item-img-title">
                                    <div class="h2">Новая коллекция нижнего белья</div>
                                    <div>Девочки, спешите! Новое поступление красивейшего нижнего белья. Первым 100 оптовым покупателям - скидка 10%! Отличное качество, известные бренды. В наличии весь размерный ряд.</div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-responsive-inner-item">
                            <div class="slider-responsive-inner-item-img" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/img/slider-main/5.jpg')">
                                <div class="slider-responsive-inner-item-img-title">
                                    <div class="h2">Гимнастические купальники</div>
                                    <div>Все для занятия гимнастикой в нашем ассортименте</div>
                                    <a href="#" class="link">Подробнее...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="activities-description-wrap">
                <div class="activities-description">
                    <div class="container">
                        <div class="activities-inner">
                            <h3>Последние посещенные вами страницы</h3>
                            <ul>
                                <li><a href="#">Мы стали использовать новую ткань</a></li>
                                <li><a href="#">Главная страница</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mbl">
                <div class="row">
                    <div class="col-md-12">
                        <div class="live-main">
                            <h5><a href="#">Новости</a></h5>
                            <div class="live-pagination">
                                <a class="prev" href="#prev"><i class="fa fa-angle-left"></i></a>
                                <a class="next" href="#next"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="live-list-wrap">
                                <div class="live-list">
                                    <div class="live-list-item" id="live-1">
                                        <div class="live-item-body image">
                                            <a class="live-item-img" href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/live-list/img-1.jpg" alt="" /></a>
                                            <div class="live-item-body-over">
                                                <div class="live-item-description">
                                                    <div class="description">Изобретение относится к области получения и применения...</div>
                                                </div>
                                                <div class="live-item-label">
                                                    <i class="fa fa fa-twitter"></i>
                                                    <a href="#">Новое веяние в одежде - получено прочное водостойкое соединение</a>
                                                </div>
                                                <span class="live-item-data">25 Декабря 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-list-item" id="live-2">
                                        <div class="live-item-body image">
                                            <a class="live-item-img" href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/live-list/img-2.jpg" alt="" /></a>
                                            <div class="live-item-body-over">
                                                <div class="live-item-description">
                                                    <div class="description">В следующем году состоится выставка одежды...</div>
                                                </div>
                                                <div class="live-item-label">
                                                    <i class="fa fa fa-vk"></i>
                                                    <a href="#">Международная выставка одежды Salon De Fashion</a>
                                                </div>
                                                <span class="live-item-data">22 Октября 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-list-item" id="live-3">
                                        <div class="live-item-body">
                                            <div class="live-item-body-over">
                                                <div class="live-item-description">
                                                    <div class="description">Для пошива нашей одежды мы стали использовать новую
                                                        инновационную ткань</div>
                                                </div>
                                                <div class="live-item-label">
                                                    <a href="#">Мы стали использовать новую ткань</a>
                                                </div>
                                                <span class="live-item-data">2 Июня 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-list-item" id="live-4">
                                        <div class="live-item-body">
                                            <div class="live-item-body-over">
                                                <div class="live-item-description">
                                                    <div class="description">Мы расширяем свой размерный ряд. Теперь наша одежда будет
                                                        доступна большему количеству людей</div>
                                                </div>
                                                <div class="live-item-label">
                                                    <a href="#">Размерный ряд</a>
                                                </div>
                                                <span class="live-item-data">30 Апреля 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-list-item" id="live-5">
                                        <div class="live-item-body image">
                                            <a class="live-item-img" href=""><img src="<?= SITE_TEMPLATE_PATH ?>/img/live-list/img-3.jpg" alt="" /></a>
                                            <div class="live-item-body-over">
                                                <div class="live-item-description">
                                                    <div class="description">С 20 по 23 февраля состоится...</div>
                                                </div>
                                                <div class="live-item-label">
                                                    <i class="fa fa fa-twitter"></i>
                                                    <a href="#">Форум производителей одежды в России</a>
                                                </div>
                                                <span class="live-item-data">22 Апреля 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endif; ?>

        <div class="container">
            <!-- если НЕ страница Главная/index.php, то выводим навигацию -->
            <? if (!$bIsMainPage) : ?>
                <ol class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Раздел</a></li>
                    <li class="active">Детальная страница</li>
                </ol>
            <? endif; ?>

            <h1>Главная</h1>
        </div>
        <div class="container">