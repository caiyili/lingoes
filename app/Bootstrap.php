<?php
namespace App;

use Flight;

class Bootstrap
{
    public static function init()
    {
        self::initView();
    }

    public static function initView()
    {
        Flight::set('flight.views.path', VIEW_PATH);
        Flight::register('view', 'Smarty', array(), function($smarty){
            $smarty->template_dir = VIEW_PATH;
            $smarty->compile_dir = TEMP_PATH . '/templates_c/';
            $smarty->config_dir = TEMP_PATH . '/config/';
            $smarty->cache_dir = TEMP_PATH . '/cache/';
            $smarty->left_delimiter = '{';
            $smarty->right_delimiter = '}';
            $smarty->caching = false;
            $smarty->debugging = true;
        });

        Flight::map('render', function($template, $data){
            Flight::view()->assign($data);
            Flight::view()->display($template);
        });
    }
}
