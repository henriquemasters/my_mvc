<?php

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

use \RedBeanPHP\R as R;

// Start a Session
if (!session_id())
    @session_start();

if (!R::testConnection()) {
    R::setup('mysql:host=localhost; dbname=redbean', 'root', '');
}

define("ROOT", "http://localhost/base");
define("APP_NAME", "Meu Site");
define("MAIL", [
    'host' => 'smtp.gmail.com',
    'port' => 465,
    'secure' => 'ssl',
    'user' => 'henrique.masters@gmail.com',
    'pwd' => '',
    'from_name' => 'Meu Site',
    'from_email' => 'henrique.masters@gmail.com'
]);

/**
 *
 * @param string $uri
 * @return string
 */
function url(string $uri = null): string {
    return ($uri) ? ROOT . "/{$uri}" : ROOT;
}
