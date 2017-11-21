<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="page__contact">
    <div class="">
        <div class="container">
            <div class="page__contact__text">
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts/name_of_company.php"
                    ); ?>
                </p>
                <p><? $APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts/label_phone.php"
                    ); ?>
                    <a href="tel:+78003334410" title="">
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR."include/contacts/phone_number.php"
                        ); ?>
                    </a>
                </p>
                <p>
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts/label_email.php"
                    ); ?>
                    <a href="mailto:info@rychal-su.ru" title="">
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR."include/contacts/email.php"
                        ); ?>
                    </a>
                </p>
            </div>
            <div class="page__contact__img">
                <img src="/assets/images/page__contact/water.png" alt="">
            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>