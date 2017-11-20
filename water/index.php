<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О воде");
?>
<?// $APPLICATION->IncludeFile(
//    SITE_DIR."include/about/about_company.php"
//); ?>
<div class="page__about__water">
    <div class="page__about__water__block_1">
        <div class="container">
            <h2 class="page__about__water__title"><?$APPLICATION->ShowTitle();?></h2>
        </div>
    </div>
    <div class="page__about__water__block_2">
        <div class="container">
            <h2 class="page__about__water__title">
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/water/block2_title.php"
                ); ?>
            </h2>
            <div class="page__about__water__text">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block2_text.php"
                    ); ?>
                </p>
                <p style="text-align: center">
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block2_gost.php"
                    ); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="page__about__water__block_3">
        <div class="container">
            <h2 class="page__about__water__title">
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/water/block2_title.php"
                ); ?>
            </h2>
            <div class="page__about__water__inf">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block3_chemical_composition.php"
                    ); ?>
                </p>
            </div>
            <div class="page__about__water__line"></div>
        </div>
    </div>
    <div class="page__about__water__block_4">
        <div class="container">
            <h2 class="page__about__water__title">
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/water/block4_title.php"
                ); ?>
            </h2>
            <div class="page__about__water__inf__list">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block4_listTitle.php"
                    ); ?>
                </p>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/water/block4_list.php"
                ); ?>
            </div>
            <div class="page__about__water__text">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block4_text.php"
                    ); ?>
                </p>
        </div>
        </div>
    </div>
    <div class="page__about__water__block_5">
        <div class="container">
            <h2 class="page__about__water__title">
                <? $APPLICATION->IncludeFile(
                    SITE_DIR."include/water/block5_title.php"
                ); ?>
            </h2>
            <div class="page__about__water__text">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/water/block5_text.php"
                    ); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>