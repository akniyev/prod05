<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
$order = $_SESSION['order'];
$phone = $_SESSION['phone'];
//unset($_SESSION['order']);
//unset($_SESSION['phone']);
?>

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        <h1 class="text-right darkgreentext">
            <b><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;
                Потрачено!</b>
        </h1>
        <br>

        <p class="text-justify">
            Ваш заказ под номером <span class="darkbluetext"><?=$order?></span> сформирован и передан на обработку. В ближайшее время мы свяжемся с Вами по телефону, который вы указали:
            <span class="darkbluetext"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?=$phone?></span>.
        </p>
        <p class="text-justify">
            Пожалуйста ожидайте.
            В случае необходимости Вы можете связаться с нами по телефону
        </p>
        <h3 class="text-center darkgreentext">
            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
            <b>8 (988) 293-78-87</b>
        </h3><p class="text-justify">
            <br><br>
        <p class="text-center">
            <a href="/" class="btn btn-lg btn-success"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> На главную</a>
        </p><br><br>
        <p class="text-center hidden-md hidden-lg sm-visible xs-visible">
            <a href="#" class="margn-bot-10 btn btn-primary btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> О нас</a>&nbsp;
            <a href="#" class="margn-bot-10 btn btn-primary btn-primary"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Как купить</a>
            <br>
            <a href="#" class="margn-bot-10 btn btn-primary btn-warning"><i class="fa fa-truck" aria-hidden="true"></i> Доставка</a>&nbsp;
            <a href="#" class="margn-bot-10 btn btn-primary btn-danger"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Гарантия</a>
        </p>
        <p class="text-center hidden-sm hidden-xs md-visible lg-visible">
            <a href="#" class="margn-bot-10 btn btn-primary btn-info"><i class="fa fa-info-circle" aria-hidden="true"></i> О нас</a>&nbsp;
            <a href="#" class="margn-bot-10 btn btn-primary btn-primary"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Как купить</a>
            <a href="#" class="margn-bot-10 btn btn-primary btn-warning"><i class="fa fa-truck" aria-hidden="true"></i> Доставка</a>&nbsp;
            <a href="#" class="margn-bot-10 btn btn-primary btn-danger"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Гарантия</a>
        </p>

        <br><br><br><br>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>