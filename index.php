<?php

require_once __DIR__ . '/functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/controllers/index.php',
    '/contact' => '/controllers/contact.php',
    '/about' => '/controllers/about.php',
];

if (array_key_exists($uri, $routes)) {
    require_once __DIR__ . $routes[$uri];
} else {
    http_response_code(404);

    require_once __DIR__ . '/views/404.php';

    die();
}