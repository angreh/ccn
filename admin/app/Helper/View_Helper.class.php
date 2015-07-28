<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 10:47 AM
 */
class View_Helper
{

    public static function make($view, $vars = [], $layout = true)
    {
        if (is_bool($layout)) {
            if ($layout) {
                $tpl = Template_Helper::getInstance(APP_PATH . '/View/layout.html');
            } else {
                $tpl = Template_Helper::getInstance(APP_PATH . '/View/no-layout.html');
            }
        } else {
            $tpl = Template_Helper::getInstance(APP_PATH . '/View/' . $layout . '.html');
        }

        $file_view = realpath(APP_PATH . '/View/' . str_replace('.', '/', $view) . '.html');
        $tpl->addFile('CONTENT', $file_view);

        if (!empty($vars)) {
            foreach ($vars as $var => $value) {
                if (is_array($value)) {
                    foreach ($value as $object) {
                        foreach ($object as $bvar => $bvalue) {
                            $bvar = strtoupper($bvar);
                            $tpl->$bvar = $bvalue;
                        }
                        $tpl->block($var);
                    }
                } else {
                    $tpl->$var = $value;
                }
            }
        }

        $tpl->show();
    }
}