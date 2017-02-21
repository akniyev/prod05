<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");?>


<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

    <h2 class="darkbluetext text-right">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Оформление заказа
    </h2>

    <?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", "", array(
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/personal/order/",
        "ORDERS_PER_PAGE" => "10",
        "PATH_TO_PAYMENT" => "/personal/order/payment/",
        "PATH_TO_BASKET" => "/personal/cart/",
        "SET_TITLE" => "Y",
        "SAVE_IN_SESSION" => "N",
        "NAV_TEMPLATE" => "arrows",
        "SEF_URL_TEMPLATES" => array(
            "list" => "index.php",
            "detail" => "detail/#ID#/",
            "cancel" => "cancel/#ID#/",
        ),
        "SHOW_ACCOUNT_NUMBER" => "Y"
        ),
        false
    );?>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>