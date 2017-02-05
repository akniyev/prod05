<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "«ПродМаркет»: Качественные и недорогие продукты");
$APPLICATION->SetTitle("«ПродМаркет»: Качественные и недорогие продукты");
?>

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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>