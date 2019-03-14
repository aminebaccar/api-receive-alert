<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/receivealert' :
        require __DIR__ . 'https://limitless-chamber-42638.herokuapp.com/api/historique/create.php';
        break;
    default: 
        require __DIR__ . 'https://www.google.com';
        break;
}