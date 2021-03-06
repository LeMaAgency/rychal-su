<?php

namespace WM\Components;

/**
 * Class Menu
 * @package WM\Components
 */
class Menu extends \WM\Base\Component
{
    protected static $componentName = 'bitrix:menu';
    protected static $params = array(
        'ALLOW_MULTI_SELECT' => 'N',
        'ROOT_MENU_TYPE' => 'top',
        'CHILD_MENU_TYPE' => 'left',
        'DELAY' => 'N',
        'MAX_LEVEL' => '3',
        'MENU_CACHE_GET_VARS' => array(),
        'MENU_CACHE_TIME' => '3600',
        'MENU_CACHE_TYPE' => 'A',
        'MENU_CACHE_USE_GROUPS' => 'N',
        'USE_EXT' => 'Y',
        'COMPONENT_TEMPLATE' => '',
    );
}