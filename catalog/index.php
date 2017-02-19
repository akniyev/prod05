<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ПродМаркет: ");?>


<?if ($APPLICATION->GetCurPage(false) != '/catalog/') { ?>
    <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12 nopad">
<??>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 nopad">
<?}?>
        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "isys_section_list", Array(
            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
                "HIDE_SECTION_NAME" => "N",	// Не показывать названия подразделов
                "IBLOCK_ID" => "2",	// Инфоблок
                "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                "SECTION_CODE" => "",	// Код раздела
                "SECTION_FIELDS" => array(	// Поля разделов
                    0 => "",
                    1 => "",
                ),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                "SECTION_USER_FIELDS" => array(	// Свойства разделов
                    0 => "",
                    1 => "",
                ),
                "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
                "VIEW_MODE" => "TILE",	// Вид списка подразделов
            ),
            false
        );?>

    </div>
<div class="clearfix"></div><br><br>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>