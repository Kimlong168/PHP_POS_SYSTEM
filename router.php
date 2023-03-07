<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = [
    '/' => 'controller/index.php',
    '/delete' => 'controller/delete.php',
    '/edit' => 'controller/edit.php',
    '/insert' => 'controller/insert.php',
    '/login' => 'controller/login.php',
    '/logout' => 'controller/logout.php',
    '/signup' => 'controller/signup.php',
    '/update' => 'controller/update.php',
];

function abort($code = 404){

    http_response_code($code);
    
    require "view/{$code}.php";

    die();
}

if(array_key_exists($uri,$route)){

    require $route[$uri];

}else{

    abort(404);

}


