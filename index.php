<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("LASSIE-главная");
?>
    <!--            Слайдер-->
    <main class="content index">
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "main_slider",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "N",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "slider",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "str1",
            1 => "str2",
            2 => "str3",
            3 => "str4",
            4 => " ",
            5 => " ",
            6 => " ",
            7 => " ",
            8 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "main_slider"
    ),
    false
); ?>
    <!--            /Слайдер-->

    <section class="popular">
    <div class="container">
    <h1 class="heading"><span class="heading__text">Популярные товары</span></h1>

<? $APPLICATION->IncludeComponent(
    "bitrix:sale.bestsellers",
    "template.php",
    array(
        "LINE_ELEMENT_COUNT" => "3",
        "TEMPLATE_THEME" => "blue",
        "BY" => "AMOUNT",
        "PERIOD" => "0",
        "FILTER" => array(
            0 => "N",
            1 => "P",
            2 => "F",
        ),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",
        "AJAX_MODE" => "N",
        "DETAIL_URL" => "",
        "BASKET_URL" => "/personal/basket.php",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "DISPLAY_COMPARE" => "N",
        "SHOW_OLD_PRICE" => "N",
        "SHOW_DISCOUNT_PERCENT" => "N",
        "PRICE_CODE" => array(
            0 => "BASE",
        ),
        "SHOW_PRICE_COUNT" => "1",
        "PRODUCT_SUBSCRIPTION" => "N",
        "PRICE_VAT_INCLUDE" => "Y",
        "USE_PRODUCT_QUANTITY" => "N",
        "SHOW_NAME" => "Y",
        "SHOW_IMAGE" => "Y",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_DETAIL" => "Подробнее",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "PAGE_ELEMENT_COUNT" => "30",
        "SHOW_PRODUCTS_3" => "Y",
        "PROPERTY_CODE_3" => array(
            0 => "MANUFACTURER",
            1 => "MATERIAL",
        ),
        "CART_PROPERTIES_3" => array(
            0 => "CORNER",
        ),
        "ADDITIONAL_PICT_PROP_3" => "MORE_PHOTO",
        "LABEL_PROP_3" => "SPECIALOFFER",
        "PROPERTY_CODE_4" => array(
            0 => "COLOR",
        ),
        "CART_PROPERTIES_4" => "",
        "OFFER_TREE_PROPS_4" => array(
            0 => "-",
        ),
        "HIDE_NOT_AVAILABLE" => "N",
        "CONVERT_CURRENCY" => "Y",
        "CURRENCY_ID" => "RUB",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "COMPONENT_TEMPLATE" => "template.php",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SHOW_PRODUCTS_2" => "N",
        "PROPERTY_CODE_2" => array(),
        "CART_PROPERTIES_2" => array(),
        "ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",
        "LABEL_PROP_2" => "-"
    ),
    false
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>