<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ПродМаркет: Лучшая доставка продуктов");
$APPLICATION->SetTitle("ПродМаркет: Лучшая доставка продуктов");?>


<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "COMPONENT_TEMPLATE" => ".default",
        "PATH" => "/include/mainpage-greet.php"
    ),
    false
);?>






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





<div class="col-sm-12 col-xs-12 col-md-3  nopod-smxs">
    <h3 class="text-left darkgreentext">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Популярные товары
    </h3>
</div>

<div class="clearfix"></div>


<div class="row">




    <div class="col-xs-6"><div class="thumbnail nopad proditem">

            <img src="img/food1.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
            <h4 class="prodtitle text-center">
                <a href="#">
                    Продуктовый комплект "Радость Русика"
                </a>
            </h4>
            <!--<h3 class="prodprice text-right">
                210 руб.
            </h3>-->

            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                <span class="input-group-btn">
                    <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                </span>
                    <input type="text" class="prodquant form-control text-center btn-block" value="1">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                </span>
                </div>
            </div>

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

                    if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);
                });
            </script>

            <div class="container-fluid nopad">
                <button class="btn btn-block btn-lg btn-success buybutton">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    210 руб
                </button>
            </div>


        </div></div>

    <div class="col-xs-6"><div class="thumbnail nopad proditem">

            <img src="img/food1.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
            <h4 class="prodtitle text-center">
                <a href="#">
                    Продуктовый комплект "Радость Русика"
                </a>
            </h4>
            <!--<h3 class="prodprice text-right">
                210 руб.
            </h3>-->

            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                <span class="input-group-btn">
                    <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                </span>
                    <input type="text" class="prodquant form-control text-center btn-block" value="2">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                </span>
                </div>
            </div>

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

                    if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);
                });
            </script>

            <div class="container-fluid nopad">
                <button class="btn btn-block btn-lg btn-success buybutton">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    420 руб
                </button>
            </div>


        </div></div>

    <div class="col-xs-6"><div class="thumbnail nopad proditem">

            <img src="img/food1.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
            <h4 class="prodtitle text-center">
                <a href="#">
                    Продуктовый комплект "Радость Русика"
                </a>
            </h4>


            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                <span class="input-group-btn">
                    <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                </span>
                    <input type="text" class="prodquant form-control text-center btn-block" value="3">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                </span>
                </div>
            </div>

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

                    if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);
                });
            </script>

            <div class="container-fluid nopad">
                <button class="btn btn-block btn-lg btn-success buybutton">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    630 руб
                </button>
            </div>


        </div></div>

    <div class="col-xs-6"><div class="thumbnail nopad proditem">

            <img src="img/food1.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
            <h4 class="prodtitle text-center">
                <a href="#">
                    Продуктовый комплект "Радость Русика"
                </a>
            </h4>
            <!--<h3 class="prodprice text-right">
                210 руб.
            </h3>-->

            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                <span class="input-group-btn">
                    <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                </span>
                    <input type="text" class="prodquant form-control text-center btn-block" value="1">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                </span>
                </div>
            </div>

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

                    if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);
                });
            </script>

            <div class="container-fluid nopad">
                <button class="btn btn-block btn-lg btn-success buybutton">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    210 руб
                </button>
            </div>


        </div></div>



</div>


<?$APPLICATION->IncludeComponent("bitrix:sale.bestsellers", "main_bestsellers", Array(
    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
    "ADDITIONAL_PICT_PROP_11" => "",
    "ADDITIONAL_PICT_PROP_13" => "",
    "ADDITIONAL_PICT_PROP_14" => "MORE_PHOTO",
    "ADDITIONAL_PICT_PROP_15" => "",
    "ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",	// Дополнительная картинка
    "ADDITIONAL_PICT_PROP_6" => "MORE_PHOTO",
    "ADDITIONAL_PICT_PROP_9" => "",
    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
    "BY" => "QUANTITY",	// Сортировать отобранные товары по
    "CACHE_TIME" => "86400",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CART_PROPERTIES_11" => "",
    "CART_PROPERTIES_13" => "",
    "CART_PROPERTIES_14" => array(
        0 => "CML2_LINK",
        1 => "",
    ),
    "CART_PROPERTIES_15" => "",
    "CART_PROPERTIES_2" => array(	// Свойства для добавления в корзину
        0 => "BRAND_REF",
        1 => "CML2_MANUFACTURER",
        2 => "",
    ),
    "CART_PROPERTIES_6" => "",
    "CART_PROPERTIES_9" => "",
    "COMPONENT_TEMPLATE" => ".default",
    "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
    "DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
    "FILTER" => array(	// Фильтр по статусам заказа
        0 => "CANCELED",
        1 => "ALLOW_DELIVERY",
        2 => "PAYED",
        3 => "DEDUCTED",
        4 => "N",
        5 => "P",
        6 => "F",
    ),
    "HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
    "LABEL_PROP_11" => "",
    "LABEL_PROP_13" => "",
    "LABEL_PROP_15" => "",
    "LABEL_PROP_2" => "SALELEADER",	// Свойство меток товара
    "LABEL_PROP_6" => "-",
    "LABEL_PROP_9" => "",
    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке
    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
    "OFFER_TREE_PROPS_14" => "",
    "PAGE_ELEMENT_COUNT" => "9",	// Количество элементов на странице
    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить частично заполненные свойства
    "PERIOD" => "180",	// Период выборки (дней)
    "PRICE_CODE" => array(	// Тип цены
        0 => "Продажа через интернет-магазин",
    ),
    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
    "PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
    "PROPERTY_CODE_11" => "",
    "PROPERTY_CODE_13" => "",
    "PROPERTY_CODE_14" => array(
        0 => "CML2_ARTICLE",
        1 => "",
    ),
    "PROPERTY_CODE_15" => "",
    "PROPERTY_CODE_2" => array(	// Свойства для отображения
        0 => "",
        1 => "",
    ),
    "PROPERTY_CODE_6" => "",
    "PROPERTY_CODE_9" => "",
    "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
    "SHOW_IMAGE" => "Y",	// Показывать изображение
    "SHOW_NAME" => "Y",	// Показывать название
    "SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
    "SHOW_PRODUCTS_11" => "N",
    "SHOW_PRODUCTS_13" => "N",
    "SHOW_PRODUCTS_15" => "N",
    "SHOW_PRODUCTS_2" => "Y",	// Показывать товары каталога
    "SHOW_PRODUCTS_6" => "N",
    "SHOW_PRODUCTS_9" => "N",
    "TEMPLATE_THEME" => "blue",	// Цветовая тема
    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
),
    false
);?>





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



    <div class="main-bestsellers">
        <?$APPLICATION->IncludeComponent("bitrix:sale.bestsellers", "main_bestsellers", Array(
            "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
            "ADDITIONAL_PICT_PROP_11" => "",
            "ADDITIONAL_PICT_PROP_13" => "",
            "ADDITIONAL_PICT_PROP_14" => "MORE_PHOTO",
            "ADDITIONAL_PICT_PROP_15" => "",
            "ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",	// Дополнительная картинка
            "ADDITIONAL_PICT_PROP_6" => "MORE_PHOTO",
            "ADDITIONAL_PICT_PROP_9" => "",
            "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
            "BY" => "QUANTITY",	// Сортировать отобранные товары по
            "CACHE_TIME" => "86400",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CART_PROPERTIES_11" => "",
            "CART_PROPERTIES_13" => "",
            "CART_PROPERTIES_14" => array(
                0 => "CML2_LINK",
                1 => "",
            ),
            "CART_PROPERTIES_15" => "",
            "CART_PROPERTIES_2" => array(	// Свойства для добавления в корзину
                0 => "BRAND_REF",
                1 => "CML2_MANUFACTURER",
                2 => "",
            ),
            "CART_PROPERTIES_6" => "",
            "CART_PROPERTIES_9" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
            "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
            "DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
            "FILTER" => array(	// Фильтр по статусам заказа
                0 => "CANCELED",
                1 => "ALLOW_DELIVERY",
                2 => "PAYED",
                3 => "DEDUCTED",
                4 => "N",
                5 => "P",
                6 => "F",
            ),
            "HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
            "LABEL_PROP_11" => "",
            "LABEL_PROP_13" => "",
            "LABEL_PROP_15" => "",
            "LABEL_PROP_2" => "SALELEADER",	// Свойство меток товара
            "LABEL_PROP_6" => "-",
            "LABEL_PROP_9" => "",
            "LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке
            "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
            "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
            "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
            "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
            "OFFER_TREE_PROPS_14" => "",
            "PAGE_ELEMENT_COUNT" => "9",	// Количество элементов на странице
            "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить частично заполненные свойства
            "PERIOD" => "180",	// Период выборки (дней)
            "PRICE_CODE" => array(	// Тип цены
                0 => "Продажа через интернет-магазин",
            ),
            "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
            "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
            "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
            "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
            "PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
            "PROPERTY_CODE_11" => "",
            "PROPERTY_CODE_13" => "",
            "PROPERTY_CODE_14" => array(
                0 => "CML2_ARTICLE",
                1 => "",
            ),
            "PROPERTY_CODE_15" => "",
            "PROPERTY_CODE_2" => array(	// Свойства для отображения
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE_6" => "",
            "PROPERTY_CODE_9" => "",
            "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
            "SHOW_IMAGE" => "Y",	// Показывать изображение
            "SHOW_NAME" => "Y",	// Показывать название
            "SHOW_OLD_PRICE" => "Y",	// Показывать старую цену
            "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
            "SHOW_PRODUCTS_11" => "N",
            "SHOW_PRODUCTS_13" => "N",
            "SHOW_PRODUCTS_15" => "N",
            "SHOW_PRODUCTS_2" => "Y",	// Показывать товары каталога
            "SHOW_PRODUCTS_6" => "N",
            "SHOW_PRODUCTS_9" => "N",
            "TEMPLATE_THEME" => "blue",	// Цветовая тема
            "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
        ),
            false
        );?>
    </div>



</div>


*/?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>