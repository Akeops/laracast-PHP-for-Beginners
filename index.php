<?php

require __DIR__ . '/functions.php';

$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') {
    require __DIR__ . '/controllers/index.php';
} else if ($uri === '/contact') {
    require __DIR__ . '/controllers/contact.php';
} else {
    require __DIR__ . '/controllers/about.php';
}
dd($_SERVER);