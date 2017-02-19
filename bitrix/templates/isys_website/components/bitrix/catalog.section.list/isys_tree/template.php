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

$strTitle = "";
?>



<div class="well"><div>
<ul class="nav nav-list">
	<? $URLADRESS = $_SERVER['REQUEST_URI'];
	if (strpos($URLADRESS, "/catalog/") != -1) {
        $CAT_SEC = str_replace("/catalog/","",$URLADRESS);
        $CAT_PROD = strstr($CAT_SEC, "/");
        $CAT_SEC = str_replace($CAT_PROD,"",$CAT_SEC);
    } else {
        $CAT_SEC = "";
    }

	$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
	$CURRENT_DEPTH = $TOP_DEPTH;

	foreach($arResult["SECTIONS"] as $arSection)
	{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
		if($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"])
		{
		    if ($arSection["DEPTH_LEVEL"] == 1) {
                echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH),"<ul class='nav nav-list tree maintree'>";
            } else {
			    echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH),"<ul class='nav nav-list tree' style='display: none;'>";
		    }
		}
		elseif($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"])
		{
			echo "</li>";
		}
		else
		{
			while($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"])
			{
				echo "</li>";
				echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
				$CURRENT_DEPTH--;
			}
			echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</li>";
		}

		$count = $arParams["COUNT_ELEMENTS"] && $arSection["ELEMENT_CNT"] ? "&nbsp;(".$arSection["ELEMENT_CNT"].")" : "";

		if ($CAT_SEC==$arSection['CODE'])
		{
			$link = '<b><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;'.$arSection["NAME"].$count.'</b>';
			$strTitle = $arSection["NAME"];
		}
		else
		{
			$link = '<a href="'.$arSection["SECTION_PAGE_URL"].'">'.$arSection["NAME"].$count.'</a>';
		}

		echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH);?>
        <li id="<?=$this->GetEditAreaId($arSection['ID']);?>">

            <?if ($arSection["DEPTH_LEVEL"] == 1) {?>
                <label class=" tree-toggle nav-header">
                    <?=$link?>&nbsp;
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                </label>
            <?} else {?>
                <?=$link?>
            <?}?>

        <?$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
	}

	while($CURRENT_DEPTH > $TOP_DEPTH)
	{
		echo "</li>";
		echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
		$CURRENT_DEPTH--;
	}
	?>
</ul>
</div></div>

<?//=($strTitle?'<br/><h2>'.$strTitle.'</h2>':'')?>




<script type="text/javascript">
    $('.tree-toggle').click(function () {
        $(this).parent().children('ul.tree').toggle(200);
    });
</script>