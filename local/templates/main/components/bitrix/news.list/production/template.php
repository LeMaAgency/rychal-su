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
?>
<? if (empty($arResult['ITEMS']))
    return;
?>

<div class="content">
    <div id="tabs" class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-3 col-lg-2 buttons">
                <? $iCount = count($arResult['ITEMS']);
                for ($i = 0; $i < $iCount; $i++){?>
                    <div class="switch">
                        <div class="bottle"></div>
                    </div>
                <?} ?>

            </div>

            <div class="col-xs-12 col-sm-6 col-lg-7 text">
                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>


                    <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                        <h1><?= $arItem['NAME']; ?></h1>
                        <p><?= $arItem['PROPERTIES']['DESCRIPTION']['VALUE']; ?></p>

                        <ul>
                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['VOLUME']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['VOLUME']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['IN_GROUP_PACKAGING']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['IN_GROUP_PACKAGING']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['GROUP_PACKAGES']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['GROUP_PACKAGES']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['PACKAGING_ON_PALLET']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['PACKAGING_ON_PALLET']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['BOTTLE_ON_PALLET']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['BOTTLE_ON_PALLET']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['PALLET_WEIGHT']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['PALLET_WEIGHT']['VALUE']; ?></div>
                            </li>

                            <li>
                                <div class="title"><?= $arItem['PROPERTIES']['SHELF_LIFE']['NAME']; ?></div>
                                <hr>
                                <div class="value"><?= $arItem['PROPERTIES']['SHELF_LIFE']['VALUE']; ?></div>
                            </li>
                        </ul>

                        <span><?= $arItem['PROPERTIES']['INSTRUSTIONS']['VALUE']; ?></span>

                    </div>

                <? endforeach; ?>

            </div>


            <div class="col-xs-12 col-sm-3 col-lg-3 bottles">

                <? foreach ($arResult["ITEMS"] as $arItem): ?>

                    <div class="item" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>);" data-img="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"></div>

                <? endforeach; ?>
            </div>

        </div>
    </div>
</div>