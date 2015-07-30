<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 10:02 AM
 */
class Request_Helper
{
    public static $route = 'index';
    public static $controller = '';
    public static $action = '';
    public static $getVars = [];
    public static $postVars = [];

    public static function init()
    {
        exit('searchingInit');

        if (isset($_GET['route']) && !empty($_GET['route'])) {
            self::$route = $_GET['route'];
            unset($_GET['route']);
        }

        if (isset($_GET) && !empty($_GET)) {
            self::$getVars = $_GET;
        }

        if (isset($_POST) && !empty($_POST)) {
            self::$postVars = $_POST;
        }

        self::applyRoute();

    }

    public static function applyRoute()
    {
        require APP_PATH . 'routes.php';
        $auxCtrlAct = explode('@', $routes[self::$route]);
        self::$controller = $auxCtrlAct[0];
        self::$action = $auxCtrlAct[1];
    }

    public static function get($var_name = null)
    {
        if ($var_name == null) {
            return self::$getVars;
        } else {
            if (isset(self::$getVars[$var_name])) {
                return self::$getVars[$var_name];
            } else {
                return null;
            }
        }
    }

    public static function post($var_name = null)
    {
        if ($var_name == null) {
            return self::$postVars;
        } else {
            if (isset(self::$postVars[$var_name])) {
                return self::$postVars[$var_name];
            } else {
                return null;
            }
        }
    }

    public static function redirect($route)
    {
        header('Location: /admin/index.php?route=' . $route);
        exit;
    }
}