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
$this->AddEditAction($arResult['ITEMS'][0]['ID'], $arResult['ITEMS'][0]['EDIT_LINK'], CIBlock::GetArrayByID($arResult['ITEMS'][0]["IBLOCK_ID"], "ELEMENT_EDIT"));
?>
<div class="chemical" >
    <div class="container">
        <div class="chemical-container" id="<?=$this->GetEditAreaId($arResult['ITEMS'][0]['ID']);?>">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <table class="chemical-table">
                    <tr class="chemical-table-row-head">
                        <th colspan="2" class="chemical-table-head">Состав (мг/л)</th>
                    </tr>
                    <? foreach ($arResult['ITEMS'][0]['PROPERTIES'] as $iKey => $arProperties):
                        if ($arProperties['ID'] != '8'):?>
                            <tr class="chemical-table-row">
                                <td class="chemical-table-data"><?= $arProperties['NAME']; ?></td>
                                <td class="chemical-table-data"><?= $arProperties['VALUE']; ?></td>
                            </tr>
                        <? endif; ?>
                    <? endforeach; ?>
                </table>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-8">
                <ul class="useful-prop-list">
                    <? foreach ($arResult['ITEMS'][0]['PROPERTIES']['PROPRETIES_THERAPEUTIC_PRODUCT']['VALUE'] as $iKey => $arPropertyValue): ?>
                        <li class="useful-prop-item animated mov" data-maarv="animated" data-animated="zoomInUp"
                            data-delay="<?= $iKey / 5; ?>" data-offset="300"><span class="useful-prop-text"><?= $arPropertyValue; ?></span></li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>