<?php

require __DIR__.'/vendor/autoload.php';

define('URL', 'http://localhost/ProgWebPHP/ProgWeb-PHP/Sozinho/MVC');

use \App\Http\Router;
use \App\Controller\Pages\Home;

$obRouter = new Router(URL);

echo Home::getHome();