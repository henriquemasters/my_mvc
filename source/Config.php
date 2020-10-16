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

define("ROOT", "https://localhost/my_mvc");
define("APP_NAME", "MyMVC Localhost");
define("MAIL", [
    'host' => 'mail.mydomain.br',
    'port' => 465,
    'secure' => 'ssl',
    'user' => 'site@mydomain.br',
    'pwd' => 'yourpassword',
    'from_name' => 'MyMVC Localhost',
    'from_email' => 'site@mydomain.br'
]);

/**
 *
 * @param string $uri
 * @return string
 */
function url(string $uri = null): string {
    return ($uri) ? ROOT . "/{$uri}" : ROOT;
}

/**
 *
 * @param string $uri
 * @param type $class
 * @return string
 */
function is(string $uri = null, $class = 'active'): string {
    $parts = null;
    if (isset($_SERVER['REDIRECT_QUERY_STRING'])) {
        $parts = explode('/', str_replace('route=/', '', $_SERVER['REDIRECT_QUERY_STRING']));
    }
    return ($parts[0] == $uri) ? $class : '';
}
