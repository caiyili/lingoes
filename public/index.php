<?php

define('ROOT_PATH', dirname(__dir__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEW_PATH', APP_PATH . '/views');
define('TEMP_PATH', ROOT_PATH . '/temp');

require ROOT_PATH . '/vendor/autoload.php';

require_once ROOT_PATH . '/bootstrap/helper.php';
require_once ROOT_PATH . '/bootstrap/view.php';
require_once ROOT_PATH . '/bootstrap/route.php';

Flight::start();
