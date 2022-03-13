<?php

app()->set('flight.views.path', VIEW_PATH);
app()->register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = VIEW_PATH;
    $smarty->compile_dir = TEMP_PATH . '/templates_c/';
    $smarty->config_dir = TEMP_PATH . '/config/';
    $smarty->cache_dir = TEMP_PATH . '/cache/';
    $smarty->left_delimiter = '${ ';
    $smarty->right_delimiter = ' }$';
    $smarty->caching = false;
    //$smarty->debugging = true;
});

app()->map('render', function($template, $data){
    app()->view()->assign($data);
    app()->view()->display($template);
});
