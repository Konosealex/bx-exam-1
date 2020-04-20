<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

// D7
use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="icon" type="image/vnd.microsoft.icon"  href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="/" class="logo">Мебельный магазин</a>
            </div>
            <?$time = date('H');
            $htmlcontent =  ($time >=9 && $time < 18)
            ? '<a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>'
            : '<a href="mailto:store@store.ru" class="phone">store@store.ru</a>';
            ?>
            <div class="main-phone-block">
               <?=$htmlcontent?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demo", 
	array(
		"COMPONENT_TEMPLATE" => "demo",
		"REGISTER_URL" => "/login/index.php?register=yes",
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/login/user.php",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => "top",
            "DELAY" => "N",
            "MAX_LEVEL" => "3",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        )
    );?>
    <!-- /nav -->
    <?if (!Csite::InDir('/index.php')):?>
    <!-- breadcrumbs -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>
    <!-- /breadcrumbs -->
    <?endif;?>
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <?if(Csite::InDir('/index.php')):?>

                    <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                    </p>


                    <!-- index column -->
                    <div class="cnt-section index-column">
                        <div class="col-wrap">

                            <!-- main actions box -->
                            <div class="column main-actions-box">
                                <div class="title-block">
                                    <h2>Новинки</h2>
                                    <hr>
                                </div>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title-block att">
                                                Угловой диван!
                                            </div>
                                            <br>
                                            <div class="inner-block">
                                                <a href="" class="photo-block">
                                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt="">
                                                </a>
                                                <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                    <a href="" class="btn-arr"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title-block att">
                                                Угловой диван!
                                            </div>
                                            <br>
                                            <div class="inner-block">
                                                <a href="" class="photo-block">
                                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt="">
                                                </a>
                                                <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                    <a href="" class="btn-arr"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title-block att">
                                                Угловой диван!
                                            </div>
                                            <br>
                                            <div class="inner-block">
                                                <a href="" class="photo-block">
                                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt="">
                                                </a>
                                                <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                    <a href="" class="btn-arr"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn-next">Все новинки</a>
                            </div>
                            <!-- /main actions box -->
                            <!-- main news box -->
                            <div class="column main-news-box">
                                <div class="title-block">
                                    <h2>Новости</h2>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012</a>
                                            </div>
                                            <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012</a>
                                            </div>
                                            <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012</a>
                                            </div>
                                            <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012</a>
                                            </div>
                                            <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn-next">Все новости</a>
                            </div>
                            <!-- /main news box -->

                        </div>
                    </div>
                    <!-- /index column -->

                    <!-- afisha box -->
                    <div class="cnt-section afisha-box">
                        <div class="section-title-block">
                            <h2 class="second-ttile">Ближайшие мероприятия</h2>
                            <a href="" class="btn-next">все мероприятия</a>
                        </div>
                        <hr>
                        <div class="items-wrap">
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012, Москва</a>
                                    </div>
                                    <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012, Москва</a>
                                    </div>
                                    <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012, Москва</a>
                                    </div>
                                    <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /afisha box -->
                    <?else:?>
                    <header>
                        <h1><?$APPLICATION->ShowTitle(false);?></h1>
                    </header>
                    <hr>
                    <?endif;?>
