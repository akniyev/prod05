<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $asset = \Bitrix\Main\Page\Asset::getInstance();
?>

<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" />

    <?
    $APPLICATION->ShowHead();
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/colors.css", true);
    //$asset->addJs("https://code.jquery.com/jquery-1.12.4.min.js");
    //$asset->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js");

    $asset->addCss("/bitrix/css/bootstrap.min.css");
    $asset->addCss("/bitrix/css/font-awesome.min.css");

    //Custom Csses
    $asset->addCss("/bitrix/css/prodnew.css");


    //Scripts
    $asset->addJs("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js");
    $asset->addJs("/bitrix/js/bootstrap.min.js");
    ?>



    <title><?$APPLICATION->ShowTitle()?></title>




    <!-- Bootstrap
    <link href="/bitrix/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/bitrix/css/font-awesome.min.css">
    <link href="/bitrix/css/prodnew.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>


    <div class="container visible-sm visible-xs" id="topmenu">

        <div class="navbar-header">
            <button id="barrrs" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <a id="hcompanyname"class="navbar-brand lightgreentext" href="#">ПродМаркет</a>

            <img id="logotop" src="/images/prod05logo.png" alt="ПродМаркет" title="ПродМаркет">

            <span  id="hcompany" class="navbar-brand">
            <a id="hphone" href="#">8 (988) 293-78-87 </a>
        </span>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <!--<li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li> -->
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

    <div class="container" id="maincontainer">

        <div class="col-md-3 hidden-sm hidden-xs text-left">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include", ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/logotop.php"
                ),
                false
            );?>
        </div>


        <div id="search" class="bx-searchtitle col-md-6 col-sm-12 nopad">
            <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.search",
                "prod",
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


        <div class="col-md-3 hidden-sm hidden-xs text-right">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/phonetop.php"
                ),
                false
            );?>
        </div>

        <div class="clearfix"></div>







<?/*

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
*/?>