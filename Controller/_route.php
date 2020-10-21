<?php


$router = new AltoRouter();
//            Method,  Path,   file,   name route
$router->map('GET|POST', '/', 'home', 'view_home');
$router->map('GET|POST', '/connexion', 'connexion', 'view_connexion');

$router->map('GET|POST', '/deconnexion', function(){ // Si on dois effectuer une action et non rediriger ver une autre page alors on lance une fonction dans le mapping 
    logout();
    header('Location: /connexion');
    exit();
});

$match = $router->match();