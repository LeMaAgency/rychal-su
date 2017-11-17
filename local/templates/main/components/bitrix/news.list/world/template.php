<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
if (empty($arResult['ITEMS']))
    return;

$bCheckList = $bCheckElement = true;
?>

<div class="richal-world ">
    <div class="container">
        <h2 class="richal-world-title"><?=$arResult['NAME'];?></h2>
        <div class="richal-world-tabs col-md-offset-4 col-lg-offset-5 col-sm-12 col-md-12 col-lg-6">
            <ul class="nav nav-tabs nav-tabs-list col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <? foreach ($arResult["ITEMS"] as $iKey => $arItem): ?>
                    <li class="nav-tabs-item <?if($bCheckList){?>active<? $bCheckList=false;}?>"><a class="nav-tabs-<?= $arItem['CODE']; ?> nav-tabs-btn" data-toggle="tab"
                                                        href="#panel<?=$iKey+1?>"></a></li>
                <? endforeach; ?>
            </ul>
<??>
            <div class="tab-content col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <? foreach ($arResult["ITEMS"] as $iKey => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div id="panel<?=$iKey+1?>" class="tab-pane fade in <?if($bCheckElement){?>active<? $bCheckElement=false;}?>">
                        <h3 class="tab-content-title"><?= $arItem['NAME']; ?></h3>
                        <div class="tab-content-text " style="overflow: hidden; width: 500px; height: 460px" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <p><?= $arItem['PREVIEW_TEXT']; ?></p>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>