<?php
require '../php_functions/database/conf.php';

$option = array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); // Permet d'avoir l'encodage utf8 lor de la lecture de donné
try{
    $pdo = new PDO($host, $user, $password, $option);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $pe){
    echo 'ERREUR : '.$pe->getMessage();
}
?>