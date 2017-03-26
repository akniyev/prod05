<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (array_key_exists('ORDER_ID', $_GET)) {
    global $USER;
    $phone = $USER->GetLogin();
    $orderNum = $_GET['ORDER_ID'];
    $USER->Logout();
    $_SESSION['phone']=$phone;
    $_SESSION['order']=$orderNum;
    LocalRedirect('/personal/order/done');
}

$APPLICATION->SetTitle("Заказы");?>

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">



    <h2 class="darkbluetext text-right">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Оформление заказа
    </h2>



    <?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	"prod05", 
	array(
		"PAY_FROM_ACCOUNT" => "Y",
		"COUNT_DELIVERY_TAX" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"ALLOW_AUTO_REGISTER" => "Y",
		"SEND_NEW_USER_NOTIFY" => "N",
		"DELIVERY_NO_AJAX" => "N",
		"TEMPLATE_LOCATION" => "popup",
		"PROP_1" => "",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PERSONAL" => "/personal/order/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_ORDER" => "/personal/order/make/",
		"SET_TITLE" => "Y",
		"SHOW_ACCOUNT_NUMBER" => "Y",
		"DELIVERY_NO_SESSION" => "Y",
		"COMPATIBLE_MODE" => "N",
		"BASKET_POSITION" => "after",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"SERVICES_IMAGES_SCALING" => "adaptive",
		"COMPONENT_TEMPLATE" => "prod05",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"USE_PREPAYMENT" => "N",
		"ALLOW_USER_PROFILES" => "N",
		"TEMPLATE_THEME" => "site",
		"SHOW_ORDER_BUTTON" => "final_step",
		"SHOW_TOTAL_ORDER_BUTTON" => "N",
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",
		"SHOW_DELIVERY_LIST_NAMES" => "Y",
		"SHOW_DELIVERY_INFO_NAME" => "Y",
		"SHOW_DELIVERY_PARENT_NAMES" => "Y",
		"SHOW_STORES_IMAGES" => "Y",
		"SKIP_USELESS_BLOCK" => "Y",
		"SHOW_BASKET_HEADERS" => "N",
		"DELIVERY_FADE_EXTRA_SERVICES" => "Y",
		"SHOW_COUPONS_BASKET" => "N",
		"SHOW_COUPONS_DELIVERY" => "N",
		"SHOW_COUPONS_PAY_SYSTEM" => "N",
		"SHOW_NEAREST_PICKUP" => "N",
		"DELIVERIES_PER_PAGE" => "8",
		"PAY_SYSTEMS_PER_PAGE" => "8",
		"PICKUPS_PER_PAGE" => "5",
		"SHOW_MAP_IN_PROPS" => "N",
		"PROPS_FADE_LIST_1" => array(
			0 => "2",
			1 => "3",
			2 => "7",
		),
		"PATH_TO_AUTH" => "/auth/",
		"DISABLE_BASKET_REDIRECT" => "N",
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PROPS",
		),
		"ADDITIONAL_PICT_PROP_2" => "-",
		"ADDITIONAL_PICT_PROP_3" => "-",
		"ADDITIONAL_PICT_PROP_5" => "-",
		"ADDITIONAL_PICT_PROP_6" => "-",
		"ADDITIONAL_PICT_PROP_7" => "-",
		"ADDITIONAL_PICT_PROP_8" => "-",
		"ADDITIONAL_PICT_PROP_9" => "-",
		"ADDITIONAL_PICT_PROP_10" => "-",
		"ADDITIONAL_PICT_PROP_11" => "-",
		"ADDITIONAL_PICT_PROP_12" => "-",
		"ADDITIONAL_PICT_PROP_13" => "-",
		"ADDITIONAL_PICT_PROP_14" => "-",
		"PRODUCT_COLUMNS_HIDDEN" => array(
		),
		"USE_YM_GOALS" => "N",
		"USE_CUSTOM_MAIN_MESSAGES" => "N",
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "N",
		"USE_CUSTOM_ERROR_MESSAGES" => "N"
	),
	false
);?>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>