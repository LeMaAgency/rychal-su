<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?= $APPLICATION->ShowHead(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $APPLICATION->ShowTitle(); ?></title>
    <?php
    //init js & css
    $assetManager = new \WM\Common\AssetManager();

    $assetManager
        ->addCssArray(array(
            '/assets/css/bootstrap.min.css',
            '/assets/css/animate.css',
            '/assets/css/jquery.jscrollpane.css',
            '/assets/css/style.css',
            '/assets/css/font-awesome-4.7.0/css/font-awesome.min.css',
            '/assets/css/jquery.fancybox.min.css',
            '/assets/css/about.css'
        ))
        ->init(array('fx'))
        ->addJsArray(array(
            '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
            '/assets/js/maarv.animated.js',
            '/assets/js/script.js',
            '/assets/js/jquery.viewportchecker.min.js',
            '/assets/js/bootstrap.min.js',
            '/assets/js/jquery.jscrollpane.min.js',
            '/assets/js/jquery.mousewheel.js',
            '/assets/js/scroll.js',
            '/assets/js/feedback.js',
            '/assets/js/jquery.fancybox.min.js',
        ));
    ?>
</head>
<body>
<?=$APPLICATION->ShowPanel();?>

<header class="header">
    <div class="container">
        <div class="header-contacts">
            <?\WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/header-phone.php')); ?>
            <a class="header-call-btn" data-fancybox href="#form_f"><?=Loc::getMessage('HEADER_ORDER_CALL');?></a>
        </div>
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse headert__menu" id="bs-example-navbar-collapse-1">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main_menu_left",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "main_menu_left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top_left",
                            "USE_EXT" => "N"
                        )
                    );?>
                    <div class="hidden-xs headert__logo">
                        <? if ($APPLICATION->GetCurDir() == SITE_DIR): ?>
                            <span class="navbar-brand"><img class="navbar-logo" src="/assets/images/logo.png" alt="Главная"></span>
                        <? else: ?>
                            <a class="navbar-brand" href="<?=SITE_DIR?>"><img class="navbar-logo" src="/assets/images/logo.png" alt="На главную"></a>
                        <? endif; ?>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main_menu_right",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top_right",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>
            </div>
        </div>
    </nav>
    <div class="header-preview">
        <div class="header-preview-wrapper">
            <p class="header-preview-title">
                <? \WM\Components\IncludeArea::inc('', array('PATH' => SITE_DIR . 'include/title-header.php')); ?></p>
        </div>
    </div>
</header>