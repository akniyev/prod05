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




<ul class="nav navbar-nav">
	<?$URLADRESS = $_SERVER['REQUEST_URI'];
	if (strpos($URLADRESS, "/catalog/") != -1) {
        $CAT_SEC = str_replace("/catalog/","",$URLADRESS);
        $CAT_PROD = strstr($CAT_SEC, "/");
        $CAT_SEC = str_replace($CAT_PROD,"",$CAT_SEC);
    } else {
        $CAT_SEC = "";
    }

    //test_dump($arResult["SECTIONS"][0]);

	$sectionState = 0;
	$title = "";
	$link = "";

	foreach($arResult["SECTIONS"] as $arSection) {
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));


		$isActive = ($CAT_SEC == $arSection['CODE']);
        $wasActive = ($CAT_SEC == str_replace("/","", str_replace("/catalog/","",$link)));

        if ($arSection["DEPTH_LEVEL"] == 1) {
            switch ($sectionState) {
                case 0:
                    $title = $arSection["NAME"];
                    $link = $arSection["SECTION_PAGE_URL"];
                    $sectionState = 1;
                    break;
                case 1:
                    echo "<li ".($wasActive ? "class=\"active\"" : "")."><a href=\"".$link."\">".$title."</a></li>";
                    $title = $arSection["NAME"];
                    $link = $arSection["SECTION_PAGE_URL"];
                    $sectionState = 1;
                    break;
                case 2:
                    echo "</ul></li>";
                    $title = $arSection["NAME"];
                    $link = $arSection["SECTION_PAGE_URL"];
                    $sectionState = 1;
                    break;
            }
        } else {
            if ($sectionState == 1) {
                echo "<li class=\"dropdown ".($wasActive ? "active" : "")."\">
                <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" 
                aria-expanded=\"false\"> <i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i></a>
                <a href=\"".$link."\" class=\"linker\" >" . $title . "</a> <ul class=\"dropdown-menu\">";

                $sectionState = 2;
            }

            echo "<li ".($isActive ? "class=\"active\"" : "")."><a href=\"".$arSection["SECTION_PAGE_URL"]."\"><i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>&nbsp;&nbsp;".$arSection["NAME"]."</a></li>";
        }
	}
	//last one
    echo ($sectionState == 1 ? "<li><a href=\"".$link."\">".$title."</a></li>" : "</ul></li>");

	?>
</ul>




<?/*
<ul class="nav navbar-nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <!--<li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li> -->
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
        </ul>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li><a href="../navbar/">Default</a></li>
    <li><a href="../navbar-static-top/">Static top</a></li>
    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
</ul>
*/?>