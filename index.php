<?php

require './functions.php';

$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') {
    require_once __DIR__ . '/controllers/index.php';
} else if ($uri === '/contact') {
    require_once __DIR__ . '/controllers/contact.php';
} else if ($uri === '/about') {
    require_once __DIR__ . '/controllers/about.php';
}