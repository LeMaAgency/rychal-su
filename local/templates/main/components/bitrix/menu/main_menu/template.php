<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="collapse navbar-collapse headert__menu" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav headert__menu_l">
            <li><a href="<?=$arResult[0]["LINK"]?>"><?=$arResult[0]["TEXT"]?></a></li>
            <li><a href="<?=$arResult[1]["LINK"]?>"><?=$arResult[1]["TEXT"]?></a></li>
        </ul>
        <div class="hidden-xs headert__logo">
            <? if ($APPLICATION->GetCurDir() == SITE_DIR): ?>
                <span class="navbar-brand"><img class="navbar-logo" src="/assets/images/logo.png" alt="Главная"></span>
            <? else: ?>
                <a class="navbar-brand" href="/"><img class="navbar-logo" src="/assets/images/logo.png" alt="На главную"></a>
            <? endif; ?>
        </div>
        <ul class="nav navbar-nav headert__menu_r">
            <li><a href="<?=$arResult[2]["LINK"]?>"><?=$arResult[2]["TEXT"]?></a></li>
            <li><a href="<?=$arResult[3]["LINK"]?>"><?=$arResult[3]["TEXT"]?></a></li>
        </ul>
    </div>
<?endif?>








