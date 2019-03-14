<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/receivealert' :
        require __DIR__ . '/api/historique/create.php';
        break;
    default: 
        require __DIR__ . '/views/404.php';
        break;
}