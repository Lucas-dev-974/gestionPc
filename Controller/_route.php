<?php


$router = new AltoRouter();

$router->map('GET|POST', '/', 'home', 'view_home');
$router->map('GET|POST', '/connexion', 'connexion', 'view_connexion');

$router->map('GET|POST', '/deconnexion', function(){
    logout();
    header('Location: /connexion');
});

$match = $router->match();