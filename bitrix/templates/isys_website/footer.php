<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div><!--//workarea-->

<footer class="navbar navbar-fixed-bottom" id="ffoot">
    <div id="fffoot" class="container nopod-mdlg">
        <div class="lefty">
            <div class="lefty margn-lr-5">
                <a href="/personal/cart/">
                    <span id="bbask" class="glyphicon glyphicon-shopping-cart"></span>
                </a>
            </div>
            <div class="lefty margn-lr-5">

                <? Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("small-basket-block"); ?>
                <? $APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "isprod", Array(
                    "PATH_TO_BASKET" => "/personal/cart/",	// Страница корзины
                    "PATH_TO_ORDER" => "/personal/order/",	// Страница оформления заказа
                ),
                    false
                ); ?>
                <? Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("small-basket-block", ""); ?>

                <?/*
                <span class="bastop">В корзине 12 товаров на сумму</span><br>
                <span class="basbott lightgreentext">2578 руб.</span>
                */?>
            </div>
        </div>

        <div class="righty visible-sm visible-xs hidden-md hidden-lg">
            <a href="/personal/cart/" id="tobasket" class="btn btn-success btn-sm"><i class="fa fa-share" aria-hidden="true"></i> В корзину</a>
        </div>
        <div class="righty visible-lg visible-md hidden-sm hidden-xs">
            <a href="/personal/order/" id="toorder" class="btn btn-primary btn-lg"><i class="fa fa-truck" aria-hidden="true"></i> Оформить заказ</a>
            &nbsp;&nbsp;
            <a href="/personal/cart/" id="tobasket2" class="btn btn-success btn-lg"><i class="fa fa-share" aria-hidden="true"></i> В корзину</a>
        </div>
    </div>
</footer>



<script type="text/javascript">
    $(function() {
        Cart.Init();
        //$('[data-toggle="tooltip"]').tooltip({title: "Добавлено в корзину", html: false, placement: "top", trigger: "click"});
    });
</script>



<? //jQuery (necessary for Bootstrap's JavaScript plugins)
//$asset->addJs("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js");
//$asset->addJs("/bitrix/js/bootstrap.min.js"); ?>

</body>
</html>