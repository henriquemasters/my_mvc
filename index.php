<?php

require_once __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

/**
 * App
 */
$route->namespace('Source\App');

/**
 * Web
 */
$route->group(null);
$route->get('/', 'Web:home');
$route->get('/quem-somos', 'Web:about');
$route->get('/servicos', 'Web:service');
$route->get('/galeria', 'Web:portifolio');

$route->get('/contato', 'Web:contact');
$route->post('/contato', 'Web:sendContact');

/**
 * Error
 */
$route->group('error');
$route->get('/{errcode}', 'Web:error');


/**
 * Execute
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("error/{$route->error()}");
}