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
<div class="basket-large">
	<?if($delayCount && ($arParams["SHOW_DELAY"] == "Y")):?>
		<div class="delay">
			<a href="<?=$arParams["PATH_TO_BASKET"]?>?section=delay"><i class="icon-small"></i></a>
			<div class="counter">
				<a href="<?=$arParams["PATH_TO_BASKET"]?>?section=delay"><?=GetMessage("DELAY")?>: +<?=$delayCount;?></a>
			</div>
			<div class="counter_mini"><a href="<?=$arParams["PATH_TO_BASKET"]?>?section=delay">+<?=$delayCount;?></a></div>
		</div>
	<?endif;?>	
	<form action="<?=$arParams["PATH_TO_ORDER"]?>" method="post" name="basket_form">
		<a href="<?=$arParams["PATH_TO_BASKET"]?>" title="Корзина"><i class="icon-small"></i></a>
		<div class="counter">
			<div>
				<!--noindex-->
				<?if($itemsCount):?>
					<a rel="nofollow" id="popup_basket" class="popup_basket" href="<?=$arParams["PATH_TO_BASKET"]?>">
						<?=GetMessage("BASKET");?>:
						<? //echo $count?>
						<?=SaleFormatCurrency($summ, $currency);?>
					</a>
					<br/>

				<?else:?>
					<a rel="nofollow" id="popup_basket" class="popup_basket" href="<?=$arParams["PATH_TO_BASKET"]?>">
						<?=GetMessage("BASKET_EMPTY");?>
					</a>
				<?endif;?>

				<!--/noindex-->
			</div>
		</div>
	</form>
</div>
<?$frame->end();?>