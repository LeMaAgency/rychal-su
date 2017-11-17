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
?>
<div class="features-items col-sm-6 col-md-5 col-lg-5">
    <? $iQuantityOfElements = count($arResult["ITEMS"]); ?>
    <? foreach ($arResult["ITEMS"] as $iKey => $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <? if (($iKey + 1) <= ceil($iQuantityOfElements / 2)) { ?>
        <div class="features-item features-item-quality animated moving" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="features-item-img">
                <span class="features-img"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="<?= $arItem['NAME']; ?>"></span>
            </div>
            <div class="features-item-name"><?= $arItem['NAME']; ?></div>
            <div class="features-item-wrap">
                <div class="features-item-wrapper">
                    <h4 class="features-item-title"><?= $arItem['NAME']; ?></h4>
                    <div class="features-item-text scrollbar" style="overflow: scroll; width: 400px">
                        <p><?= $arItem['PREVIEW_TEXT']; ?></p>
                    </div>
                </div>
            </div>
        </div>

    <? } else { ?>
</div>
<?
return;
} ?>
<? endforeach; ?>

