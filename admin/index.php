<?php
define('APP_PATH',  __DIR__ . '/app');

require APP_PATH.'/Helper/AutoLoad_Helper.class.php';

AutoLoad_Helper::getInstance()->register();
System_Helper::init();