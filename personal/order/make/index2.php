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
        <i class="fa fa-truck" aria-hidden="true"></i>&nbsp;Оформление заказа
    </h2><br>
<? //https://dev.1c-bitrix.ru/community/webdev/user/11948/blog/6756/ ?>




    <h4 class="text-left">
        Ваш заказ включает <span class="darkbluetext">&nbsp;&nbsp;
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;<b>12</b> </span> товаров. <br>
        Общая сумма заказа:&nbsp;&nbsp;
        <b><span class="darkbluetext"><i class="fa fa-rouble" aria-hidden="true"></i>&nbsp;&nbsp;2578</span></b> руб. <br>
        Стоимость доставки:&nbsp;&nbsp;&nbsp;&nbsp;<b><span class="darkbluetext"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp;&nbsp;0</span></b> руб.
    </h4>
    <br>

    <h4 class="text-left darkgreentext">
        Телефон (обязательное поле, нужен для подтверждения заказа):
    </h4>

    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 nopad">
        <a href="#" id="phonenum-button" class="btn btn-block btn-primary btn-success">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
        </a>
    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 nopad">
        <input id="phonenum-input" type="text" name="q" placeholder="+7 (999) 999 99 99"
               autocomplete="off" class="form-control padd-5 btn-block">
    </div>
    <div class="clearfix"></div>




    <h4 class="text-left darkgreentext">
        Адрес доставки и комментарии (необязательное поле, Вы можете сообщить подробности по телефону):
    </h4>


    <div class="form-group">
        <textarea class="form-control" rows="5"></textarea>
    </div>


    <div class="container-fluid text-center">
        <a href="#" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-ok"></span> Заказать</a>
    </div>
    <br>

    <h4>
        <i>С Вами свяжутся в течение 15 минут. Пожалуйста ожидайте.</i>
    </h4>
    <h4>
        <i>При заказе свыше 2000 руб. доставка бесплатна.</i>
    </h4>


    <br>




    <h2 class="darkbluetext text-right">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Состав заказа
    </h2><br>



    <div class="container-fluid nopad thumbnail prodtableitem">
        <div class="col-xs-2 nopad text-center">
            <img src="/images/logosmall.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
        </div>
        <div class="col-xs-8">
            <h4>
                <span class="darkbluetext">Продуктовый комплект "Радость Русика"</span>. Состав: 100 г молока, 100 г селедки, 2 п. туалетной бумаги.
                <br>
                <span class="darkgreentext text-bold">
                    Количество: 2 шт.
                </span>
            </h4>
        </div>
        <div class="col-xs-2 nopad text-right">
            <h4 class="text-center darkgreentext text-bold">240 руб.</h4>
        </div>
    </div>



    <div class="container-fluid nopad thumbnail prodtableitem">
        <div class="col-xs-2 nopad text-center">
            <img src="/images/logosmall.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
        </div>
        <div class="col-xs-8">
            <h4>
                <span class="darkbluetext">Продуктовый комплект "Радость Русика"</span>. Состав: 100 г молока, 100 г селедки, 2 п. туалетной бумаги.
                <br>
                <span class="darkgreentext text-bold">
                    Количество: 2 шт.
                </span>
            </h4>
        </div>
        <div class="col-xs-2 nopad text-right">
            <h4 class="text-center darkgreentext text-bold">240 руб.</h4>
        </div>
    </div>


    <div class="container-fluid nopad thumbnail prodtableitem">
        <div class="col-xs-2 nopad text-center">
            <img src="/images/logosmall.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
        </div>
        <div class="col-xs-8">
            <h4>
                <span class="darkbluetext">Продуктовый комплект "Радость Русика"</span>. Состав: 100 г молока, 100 г селедки, 2 п. туалетной бумаги.
                <br>
                <span class="darkgreentext text-bold">
                    Количество: 2 шт.
                </span>
            </h4>
        </div>
        <div class="col-xs-2 nopad text-right">
            <h4 class="text-center darkgreentext text-bold">240 руб.</h4>
        </div>
    </div>



    <div class="container-fluid nopad thumbnail prodtableitem">
        <div class="col-xs-2 nopad text-center">
            <img src="/images/logosmall.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
        </div>
        <div class="col-xs-8">
            <h4>
                <span class="darkbluetext">Продуктовый комплект "Радость Русика"</span>. Состав: 100 г молока, 100 г селедки, 2 п. туалетной бумаги.
                <br>
                <span class="darkgreentext text-bold">
                    Количество: 2 шт.
                </span>
            </h4>
        </div>
        <div class="col-xs-2 nopad text-right">
            <h4 class="text-center darkgreentext text-bold">240 руб.</h4>
        </div>
    </div>


    <div class="container-fluid nopad thumbnail prodtableitem">
        <div class="col-xs-2 nopad text-center">
            <img src="/images/logosmall.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
        </div>
        <div class="col-xs-8">
            <h4>
                <span class="darkbluetext">Продуктовый комплект "Радость Русика"</span>. Состав: 100 г молока, 100 г селедки, 2 п. туалетной бумаги.
                <br>
                <span class="darkgreentext text-bold">
                    Количество: 2 шт.
                </span>
            </h4>
        </div>
        <div class="col-xs-2 nopad text-right">
            <h4 class="text-center darkgreentext text-bold">240 руб.</h4>
        </div>
    </div>





    <br><br><br><br>





    <?/*$APPLICATION->IncludeComponent(
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
);*/?>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>