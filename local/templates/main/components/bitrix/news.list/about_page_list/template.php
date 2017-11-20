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
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <section class="about-history">
        <div class="about-history__item">
            <div class="about-history__item__img">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            </div>
            <div class="container">
                <div class="about-history__item__description-wrap">
                    <div class="about-history__item__year">
                        <div class="about-history__item__year__round">
                            <div class="about-history__item__year__round_inn">
                                <?echo $arItem["NAME"]?>
                            </div>
                        </div>
                    </div>
                    <p class="about-history__item__text"><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
            </div>
        </div>
    </section>
    <?endforeach;?>










