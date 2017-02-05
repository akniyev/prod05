<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
if (!empty($arResult['ITEMS'])) // if-empty
{
	if ($arParams["DISPLAY_TOP_PAGER"])
	{
		?><? echo $arResult["NAV_STRING"]; ?><?
	}

	$strElementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
	$strElementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
	$arElementDeleteParams = array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));?>
<div class="section-elements-container">
<?foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);
	?>

	<div class="catalog-item" id="<? echo $strMainID; ?>">
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" />
            <div class="title"><?=$arItem['NAME']?></div>
        </a>
        <div class="price"><?=$arItem['PRICES']['Продажа через интернет-магазин']['PRINT_VALUE']?></div>
        <div>
            <span>+</span>
            <span class="addtocart-button">Добавить в корзину</span>
            <span>-</span>
        </div>
    </div>
<?}?>
</div>
<div class="section-pager">
<?
if ($arParams["DISPLAY_BOTTOM_PAGER"])
{
    ?><? echo $arResult["NAV_STRING"]; ?><?
}
?>
</div>
<? } // if-empty ?>