<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="page__contact">
    <div class="">
        <div class="container">
            <div class="page__contact__wrap">
                <div class="page__contact__wrap__border">
                    <div class="page__contact__text">
                        <div class="page__contact__text__title">
                            <? $APPLICATION->IncludeFile(
                                SITE_DIR."include/contacts/name_of_company.php"
                            ); ?></div>
                        <p>
                        <a href="tel:+78003334410" title="" class="page__contact__text__phone">
                            <? $APPLICATION->IncludeFile(
                                SITE_DIR."include/contacts/phone_number.php"
                            ); ?>
                        </a>
                        <a href="mailto:info@rychal-su.ru" title="" class="page__contact__text__mail">
                            <? $APPLICATION->IncludeFile(
                                SITE_DIR."include/contacts/email.php"
                            ); ?>
                        </a>
                        </p>
                        <div class="page__contact__text__line"></div>
                        <br>
                        <div class="page__contact__text__title">
                            <? $APPLICATION->IncludeFile(
                                SITE_DIR."include/contacts/adres_title.php"
                            ); ?>
                        </div>
                        <div class="page__contact__text__green">
                            <? $APPLICATION->IncludeFile(
                                SITE_DIR."include/contacts/adres.php"
                            ); ?>
                        </div>
                    </div>
    <!--                <div class="page__contact__img">-->
    <!--                    <img src="/assets/images/page__contact/water.png" alt="">-->
    <!--                </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>