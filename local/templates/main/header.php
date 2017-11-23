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
                <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                );?>
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