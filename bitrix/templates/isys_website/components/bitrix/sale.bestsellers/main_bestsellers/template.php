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

    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3" id="<?= $strMainID; ?>">
        <div class="thumbnail nopad proditem">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" title="<?=$arItem['NAME']?>" alt="<?=$arItem['NAME']?>"
                     class="img-responsive img-rounded img-thumbnail prodphotosmall">
            </a>
            <h4 class="prodtitle text-center">
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

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

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
                });
            </script>

            <div class="container-fluid nopad">
                <input type="hidden" id="<?=$strMainID; ?>_price" value="<?=$arItem['PRICES']['Продажа через интернет-магазин']['PRINT_VALUE']?>">
                <button class="btn btn-block btn-lg btn-success buybutton addtocart-button">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    <?=$arItem['PRICES']['Продажа через интернет-магазин']['PRINT_VALUE']?>
                </button>
            </div>


            </div></div>

        <?/*<div class="catalog-item" id="<? echo $strMainID; ?>">
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
        </div>*/?>

        <?/*<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3"><div class="thumbnail nopad proditem">

            <img src="/images/food1.png" title="Радость Русика" alt="Радость Русика" class="img-responsive img-rounded img-thumbnail">
            <h4 class="prodtitle text-center">
                <a href="#">
                    Продуктовый комплект "Радость Русика"
                </a>
            </h4>
            <!--<h3 class="prodprice text-right">
                210 руб.
            </h3>-->

            <div class="container-fluid nopad prodquantity">
                <div class="input-group number-spinner">
                <span class="input-group-btn">
                    <button class="btn btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                </span>
                    <input type="text" class="prodquant form-control text-center btn-block" value="2">
                    <span class="input-group-btn">
                    <button class="btn btn-primary" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                </span>
                </div>
            </div>

            <script type="text/javascript">
                $(".number-spinner>button").click(function() {
                    var btn = $(this),
                        oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                        newVal = 0;

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
                });
            </script>

            <div class="container-fluid nopad">
                <button class="btn btn-block btn-lg btn-success buybutton">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;
                    420 руб
                </button>
            </div>


        </div></div>*/?>




<? endforeach; ?>
<? endif; ?>
