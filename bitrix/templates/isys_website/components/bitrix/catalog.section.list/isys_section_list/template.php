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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12  nopod-smxs">



    <h2 class="text-right darkbluetext" id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>">
        <?if ($APPLICATION->GetCurPage(false) === '/catalog/') {?>
            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Каталог
        <?} else {
            echo(
            isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
                ? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
                : $arResult['SECTION']['NAME']
            );
        }
        ?>
    </h2>
</div><div class="clearfix"></div>




<?if (0 < $arResult["SECTIONS_COUNT"]) {?>

    <?if ($APPLICATION->GetCurPage(false) != '/catalog/') {?>
        <h3 class="text-left darkbluetext col-sm-12 col-xs-12 col-md-12 col-lg-12 ">
            <i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;Подкатегории
        </h3><br>

        <?foreach ($arResult['SECTIONS'] as &$arSection) {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

            if (false === $arSection['PICTURE']) {
                $arSection['PICTURE'] = array(
                    'SRC' => $arCurView['EMPTY_IMG'],
                    'ALT' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        : $arSection["NAME"]
                    ),
                    'TITLE' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        : $arSection["NAME"]
                    )
                );
            }?>

            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"><div class="thumbnail nopad proditemcat">
                <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                    <img src="<?=$arSection['PICTURE']['SRC']?>"
                         title="<?=$arSection['PICTURE']['TITLE']?>" alt="<?=$arSection['PICTURE']['ALT']?>"
                         class="img-responsive img-rounded img-thumbnail prodphotoverysmall">
                </a>
                <p class="prodtitle text-center vcenter">
                    <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                        <? echo $arSection['NAME']; ?>
                    </a>
                </p>
            </div></div>


        <?}?>
    <?} else {?>
        <?foreach ($arResult['SECTIONS'] as &$arSection) {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

            if (false === $arSection['PICTURE']) {
                $arSection['PICTURE'] = array(
                    'SRC' => $arCurView['EMPTY_IMG'],
                    'ALT' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        : $arSection["NAME"]
                    ),
                    'TITLE' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        : $arSection["NAME"]
                    )
                );
            }?>

            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2"><div class="thumbnail nopad proditemcat">
                    <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                        <img src="<?=$arSection['PICTURE']['SRC']?>"
                             title="<?=$arSection['PICTURE']['TITLE']?>" alt="<?=$arSection['PICTURE']['ALT']?>"
                             class="img-responsive img-rounded img-thumbnail prodphotoverysmall">
                    </a>
                    <p class="prodtitle text-center vcenter">
                        <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                            <? echo $arSection['NAME']; ?>
                        </a>
                    </p>
                </div></div>


        <?}?>

    <?}?>

    <div class="clearfix"></div><hr>
<?}?>

