<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$count = 0;
$quantity = 0;
$summ = 0;
$currency = '';
$itemsCount = 0;
$delayCount = 0;

//test_dump($arResult["ITEMS"] );


foreach($arResult["ITEMS"] as $arItem){
	if($arItem["DELAY"] == 'N'){
		$count++;
        $quantity += $arItem["QUANTITY"];
		$summ += $arItem["BASE_PRICE"] * $arItem["QUANTITY"];
		$currency = $arItem["CURRENCY"];
		$itemsCount++;
	}
	else{
		$delayCount++;
	}
}?>


<?$frame = $this->createFrame()->begin('');?>

    <!--noindex-->
    <a rel="nofollow" id="popup_basket" class="popup_basket authpane" href="<?=$arParams["PATH_TO_BASKET"]?>">

        <?if($itemsCount):?>
            <span class="bastop">В корзине <span class="baskettotalquantity"><?=$quantity?></span> товаров на сумму</span><br>
            <span class="basbott lightgreentext"><span class="baskettotalprice lightgreentext"><?=$summ?> руб.</span></span>
        <?else:?>
            <span class="bastop">Корзина пуста<span class="baskettotalquantity hidden">0</span></span><br>
            <span class="basbott lightgreentext"><span class="baskettotalprice lightgreentext">0 руб.</span> </span>
        <?endif;?>

    </a>

    <?/*<a rel="nofollow" id="popup_basket" class="popup_basket authpane" href="<?=$arParams["PATH_TO_BASKET"]?>">
        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;
        <?if($itemsCount):?>
            <?=GetMessage("BASKET");?>:
            <?//echo $count?>
            <?=CurrencyHandler::convertToCurrentAndFormat($summ);
            //SaleFormatCurrency(CurrencyHandler::convertToCurrentCurrency($summ), CurrencyHandler::getCurrency());?>
        <?else:?>
            <?=GetMessage("BASKET_EMPTY");?>
        <?endif;?>
    </a>*/?>

    <!--/noindex-->

<?$frame->end();?>