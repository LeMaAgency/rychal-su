<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<footer class="footer">
    <div class="container">
        <div class="footer-item">
            <h3 class="footer-title"><?\WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/footer-feedback-form/title.php'));?></h3>
            <p class="footer-title-text"><?\WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/footer-feedback-form/slogan.php'));?></p>
            <form class="footer-form feedback-form" method="post" action="/ajax/feedback-order-form.php" class="feedback-form">
                <div class="footer-form-item footer-form-phone form-group">
                    <input id="phone" class="footer-form-phone-input" type="text" name="phone" placeholder="Введите ваш номер телефона:">
                    <div class="item-error"></div>
                </div>
                <div class="footer-form-item">
                    <input class="footer-form-callback form__personal__switch" type="submit" value="Заказать обратный звонок">
                </div>
                <div class="checkbox">
                <input id="checkbox1" type="checkbox" data-js-core-switch-element='form__personal__switch' class="checkbox__control">
                <label for="checkbox1">Я согласен на обработку персональных данных</label>
            </div>
                <p class="footer-callback-text"><?\WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/footer-feedback-form/info.php'));?></p>
            </form>
           <br><br>
        </div>
        <div class="footer-item clearfix">
            <div class="footer-item-contacts hidden-xs col-sm-7 col-md-7 col-lg-7">
                <div class="footer-name-contacts"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/footer-title.php')); ?></div>
                <div class="social">
                    <p><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/social-title.php')); ?></p>
                    <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/social.php')); ?>
                </div>
                <div class="footer-contacts-text">
                    <ul class="footer-item-list">
                        <li class="footer-item-contacts"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/footer-phone.php')); ?></li>
                        <li class="footer-item-contacts"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/email.php')); ?></li>
                        <li class="footer-item-contacts"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/address.php')); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0 => "",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "footer_menu",
                    "USE_EXT" => "N"
                )
            ); ?>
        </div>
        <div class="">
            <span class="footer-bottom-copyright col-xs-6 col-sm-6 col-md-6 col-lg-6"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/bottom-text.php')); ?></span>
            <span class="footer-bottom-dev col-xs-6 col-sm-6 col-md-6 col-lg-6"><? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/developer.php')); ?></span>
        </div>
    </div>
</footer><br><br>
<div id="form_f">
<form class="footer-form feedback-form" method="post" action="/ajax/feedback-order-form.php" class="feedback-form" >
    <div class="footer-form-item footer-form-phone form-group">
        <input id="phone" class="footer-form-phone-input" type="text" name="phone" placeholder="Введите ваш номер телефона:">
        <div class="item-error"></div>
    </div>
    <div class="footer-form-item">
            <input class="footer-form-callback form__personal__switch2" type="submit" value="Заказать обратный звонок">
    </div>
        <div class="checkbox">
    <input id="checkbox1" type="checkbox" data-js-core-switch-element='form__personal__switch2' class="checkbox__control">
        <label for="checkbox1">Я согласен на обработку персональных данных</label>
    </div>
</form>
</div>
</body>
</html>