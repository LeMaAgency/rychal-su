<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <div class="footer-item-menu hidden-xs col-sm-5 col-md-5 col-lg-5">
        <ul class="footer-item-list">

            <?
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <? if ($arItem["SELECTED"]):?>
                <li class="footer-item-menu"><a href="<?= $arItem["LINK"] ?>" class="footer-item-menu-link"><?= $arItem["TEXT"] ?></a></li>
            <? else:?>
                <li class="footer-item-menu"><a href="<?= $arItem["LINK"] ?>" class="footer-item-menu-link"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

            <? endforeach ?>

        </ul>
    </div>
<? endif ?>
