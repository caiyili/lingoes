<?php

define('ROOT_PATH', dirname(__dir__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEW_PATH', APP_PATH . '/views');
define('TEMP_PATH', ROOT_PATH . '/temp');

use App\Bootstrap;

require ROOT_PATH . '/vendor/autoload.php';

Bootstrap::init();

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/phpinfo', function() {
    phpinfo();
});

Flight::route('/demo', function() {
    Flight::view()->set('title', 'demo');
    Flight::view()->set('content', 'hello demo');
    Flight::render('index/demo.php');
});

// Register Smarty as the view class
// Also pass a callback function to configure Smarty on load
Flight::route('/smarty', function () {
	// Assign template data
	Flight::view()->assign('title', 'Bob');
    Flight::view()->assign('content', 'hello world!');

	// Display the template
	Flight::view()->display('index/demo.tpl');
});

Flight::start();
