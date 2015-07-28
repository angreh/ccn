<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 10:28 AM
 */
class System_Helper
{
    public static function init()
    {
        Request_Helper::init();

        $controller = new Request_Helper::$controller();
        $controller->{Request_Helper::$action}();
    }
} 