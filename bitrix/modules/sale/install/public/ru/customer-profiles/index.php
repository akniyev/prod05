<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профили покупателя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.profile",
	"",
	Array(
		"SEF_MODE" => "N", 
		"PER_PAGE" => "20", 
		"SET_TITLE" => "Y" 
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>