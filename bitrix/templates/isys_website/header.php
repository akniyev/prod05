<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $asset = \Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
    <?
    $APPLICATION->ShowHead();
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/colors.css", true);
    $asset->addJs("https://code.jquery.com/jquery-1.12.4.min.js");
    $asset->addCss("/bitrix/css/main/bootstrap.css");
    $asset->addCss("/bitrix/css/main/font-awesome.css");

    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <header>

    </header>

    <div class="catalog-sections">
        <div class="catalog-title">Каталог</div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "tree",
            Array(
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("",""),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "2",
                "VIEW_MODE" => "LINE"
            )
        );?>
    </div>

    <? $APPLICATION->IncludeFile("include/shopinfo.php"); ?>
    

    <div class="search-block">
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.search",
            "",
            Array(
                "ACTION_VARIABLE" => "action",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BASKET_URL" => "/personal/basket.php",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "N",
                "CONVERT_CURRENCY" => "N",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "HIDE_NOT_AVAILABLE" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "catalog",
                "LINE_ELEMENT_COUNT" => "3",
                "NO_WORD_LOGIC" => "N",
                "OFFERS_CART_PROPERTIES" => array(),
                "OFFERS_FIELD_CODE" => array("",""),
                "OFFERS_LIMIT" => "5",
                "OFFERS_PROPERTY_CODE" => array("",""),
                "OFFERS_SORT_FIELD" => "sort",
                "OFFERS_SORT_FIELD2" => "id",
                "OFFERS_SORT_ORDER" => "asc",
                "OFFERS_SORT_ORDER2" => "desc",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "30",
                "PRICE_CODE" => array(),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array(),
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PROPERTY_CODE" => array("",""),
                "RESTART" => "N",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "",
                "SHOW_PRICE_COUNT" => "1",
                "USE_LANGUAGE_GUESS" => "Y",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "N"
            )
        );?>
    </div>

    <div class="right-sidebar">
        <div class="delivery">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/pages/delivery.php"
                ),
                false
            );?>
        </div>
        <div class="about">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/pages/about.php"
                )
            );?>
        </div>
    </div>


    <div class="workarea">