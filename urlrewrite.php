<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/catalog/(.+?)/page/(\\d+)/?(\\?.*)?\$#",
		"RULE" => "SECTION_CODE=\$1&PAGEN_1=\$2",
		"ID" => "",
		"PATH" => "/catalog/section.php",
	),
	array(
		"CONDITION" => "#^/catalog/.+?/(?!\\?)(.+?)/?(\\?.*)?\$#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/catalog/element.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/(.+?)/?(\\?.*)?\$#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/catalog/section.php",
	),
	array(
		"CONDITION" => "#^/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/order/index.php",
	),
	array(
		"CONDITION" => "#^/store/#",
		"RULE" => "",
		"ID" => "bitrix:catalog.store",
		"PATH" => "/store/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>