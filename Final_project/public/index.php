<?php

include '../srcScripts/config/connection.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require '../srcScripts/views/home.php';
        break;
    case '/login':
        require '../srcScripts/authentications/login.php';
        break;
    case '/register':
        require '../srcScripts/authentications/register.php';
        break;
    // Add additional cases for other URLs
    default:
        http_response_code(404);
        require '../srcScripts/views/404.php';
        break;
}
