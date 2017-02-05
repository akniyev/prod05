<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CDatabase $DB */

$this->setFrameMode(true);

$strElementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
$strElementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
$arElementDeleteParams = array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));

?>
<? if (!empty($arResult['ITEMS'])): ?>
<?foreach ($arResult['ITEMS'] as $key => $arItem):
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
<? endforeach; ?>
<? endif; ?>
