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
$this->setFrameMode(true);?>




<?if (!empty($arResult['ITEMS'])) // if-empty
{
	if ($arParams["DISPLAY_TOP_PAGER"])
	{
		?><? echo $arResult["NAV_STRING"]; ?><?
	}

	$strElementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
	$strElementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
	$arElementDeleteParams = array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));?>




<?foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);	?>


    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" id="<?=$strMainID;?>">
        <div class="thumbnail nopad proditem">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" title="<?=$arItem['NAME']?>" alt="<?=$arItem['NAME']?>"
                     class="img-responsive img-rounded img-thumbnail prodphotosmall">
            </a>
            <h4 class="prodtitle text-center vcenter">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                    <?=$arItem['NAME']?>
                </a>
            </h4>

            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                    <span class="input-group-btn">
                        <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                    </span>
                    <input type="text" id="<?=$strMainID; ?>_quantity" class="prodquant form-control text-center btn-block" value="1">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                    </span>
                </div>
            </div>


            <div class="container-fluid nopad">
                <input type="hidden" id="<?=$strMainID; ?>_price" value="<?=$arItem['PRICES']['Продажа через интернет-магазин']['PRINT_VALUE']?>">
                <button class="btn btn-block btn-lg btn-success buybutton addtocart-button">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    <span class="sumprice">
                        <?=$arItem['PRICES']['Продажа через интернет-магазин']['PRINT_VALUE']?>
                    </span>
                </button>
            </div>


            <script type="text/javascript">
                $(".number-spinner>span>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0,
                        price = parseFloat(btn.closest('.proditem').find('input[type=hidden]').val().trim());

                    if (btn.attr('data-dir') == 'up') {
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);

                    var newPrice = newVal*price;
                    btn.closest('.proditem').find('.sumprice').text(newPrice+" руб.");
                });
            </script>


        </div></div>


<?} // foreach?>









<div class="clearfix"></div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
    <?if ($arParams["DISPLAY_BOTTOM_PAGER"])
    {
        ?><? echo $arResult["NAV_STRING"]; ?><?
    }
    ?>
</div>

<div class="clearfix"></div>
<? } // if-empty ?>