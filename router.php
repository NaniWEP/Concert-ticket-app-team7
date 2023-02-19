<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/register' => 'controllers/forms/register/form.register.controller.php',
    '/login' => 'controllers/forms/login/form.login.controller.php',
    '/detail' => 'controllers/details/detail.controller.php',

];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}