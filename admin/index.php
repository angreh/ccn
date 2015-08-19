<?php
ini_set('session.save_path',realpath(getcwd() . '/session'));
define('APP_PATH', dirname(__FILE__) . '/app/');

require_once APP_PATH . 'Helper/AutoLoad_Helper.class.php';

AutoLoad_Helper::getInstance()->register();
System_Helper::init();