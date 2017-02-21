<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$count = 0;
$summ = 0;
$currency = '';
$itemsCount = 0;
$delayCount = 0;
foreach($arResult["ITEMS"] as $arItem){
	if($arItem["DELAY"] == 'N'){
		$count++;
		$summ += $arItem["PRICE"]*$arItem["QUANTITY"];
		$currency = $arItem["CURRENCY"];
		$itemsCount++;
	}
	else{
		$delayCount++;
	}
}
?>
<?$frame = $this->createFrame()->begin('');?>

    <!--noindex-->
    <a rel="nofollow" id="popup_basket" class="popup_basket authpane" href="<?=$arParams["PATH_TO_BASKET"]?>">
        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;
        <?if($itemsCount):?>
            <?=GetMessage("BASKET");?>:
            <? //echo $count?>
            <?=CurrencyHandler::convertToCurrentAndFormat($summ);
            //SaleFormatCurrency(CurrencyHandler::convertToCurrentCurrency($summ), CurrencyHandler::getCurrency());?>
        <?else:?>
            <?=GetMessage("BASKET_EMPTY");?>
        <?endif;?>
    </a>
    <!--/noindex-->

<?$frame->end();?>