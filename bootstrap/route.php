<?php


$app = app();

$app->route('/', function(){
    app()->render('index/index.html', []);
});

$app->route('/phpinfo', function() {
    phpinfo();
});

$app->route('/smarty', function () {
	// Assign template data
	app()->view()->assign('title', 'Bob');
    app()->view()->assign('content', 'hello world!');

	// Display the template
	app()->view()->display('index/index.html');
});

$app->route('/demo', function() {
    app()->render('demo/demo.html', [
        'title' => 'page - demo',
        'content' => 'Hello Flight world!',
    ]);
});


