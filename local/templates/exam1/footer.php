<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>



</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
    <!-- side anonse -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "aside",
        array(
            "COMPONENT_TEMPLATE" => "aside",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
    <!-- /side anonse -->
    <?if (!Csite::InDir('/index.php')):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "Y"
        )
    );?>
    <?endif;?>
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "article",
            array(
                "COMPONENT_TEMPLATE" => "article",
                "IBLOCK_TYPE" => "rew",
                "IBLOCK_ID" => "5",
                "NEWS_COUNT" => "2",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "NAME",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "POSITION",
                    1 => "COMPANY",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "150",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        );?>

        <!-- / footer rew slider box -->
    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block">О магазине</div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom",
                    array(
                        "COMPONENT_TEMPLATE" => "bottom",
                        "ROOT_MENU_TYPE" => "bottom",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                    ),
                    false
                );?>
            </div>
            <div class="item">
                <div class="title-block">Каталог товаров</div>
                <ul>
                    <li><a href="">Кухни</a>
                    </li>
                    <li><a href="">Гарнитуры</a>
                    </li>
                    <li><a href="">Спальни и матрасы</a>
                    </li>
                    <li><a href="">Столы и стулья</a>
                    </li>
                    <li><a href="">Раскладные диваны</a>
                    </li>
                    <li><a href="">Кресла</a>
                    </li>
                    <li><a href="">Кровати и кушетки</a>
                    </li>
                    <li><a href="">Тумобчки и прихожие</a>
                    </li>
                    <li><a href="">Аксессуары</a>
                    </li>
                    <li><a href="">Каталоги мебели</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contacts-block">
            <div class="title-block"><?=GetMessage('FOOTER_CONTACT')?></div>
            <div class="loc-block">
                <div class="address">ул. Летняя, стр.12, офис 512</div>
                <div class="phone"><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/php_interface/include/number.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>

