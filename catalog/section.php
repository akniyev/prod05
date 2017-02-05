<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>

<div class="center">
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"isys_section_list", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "TILE",
		"COMPONENT_TEMPLATE" => "isys_section_list"
	),
	false
);?>
    <div class="section-elements">
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "isys_section", Array(
            "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
                "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
                "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                "ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
                "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
                "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
                "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
                "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
                "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
                "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
                "FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
                "HIDE_NOT_AVAILABLE" => "N",	// Товары, не доступные для покупки
                "IBLOCK_ID" => "2",	// Инфоблок
                "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
                "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
                "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
                "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
                "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
                "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                "OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Товары",	// Название категорий
                "PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
                "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                "PRICE_CODE" => array(	// Тип цены
                    0 => "Продажа через интернет-магазин",
                ),
                "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
                "PRODUCT_PROPERTIES" => "",	// Характеристики товара
                "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
                "PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
                "PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
                "SECTION_ID" => "",	// ID раздела
                "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
                "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                "SECTION_USER_FIELDS" => array(	// Свойства раздела
                    0 => "",
                    1 => "",
                ),
                "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
                "SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
                "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
                "SHOW_OLD_PRICE" => "N",	// Показывать старую цену
                "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
                "TEMPLATE_THEME" => "blue",	// Цветовая тема
                "USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
                "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
                "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
            ),
            false
        );?>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>