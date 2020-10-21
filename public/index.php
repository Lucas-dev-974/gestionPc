<?php
session_start();

require '../vendor/autoload.php';               // Charge les composants installer via composer
require '../php_functions/database/conn.php';   // Base de données
require '../php_functions/admin_fonctions.php'; // Fonctions

require '../Controller/_route.php';             // Mappage des url
require '../Model_view/header/header.php';      // Inclut le header


if($match){                    // Si il y'a un mappage d'url correspondant
    if(is_callable($match['target'])){  
        call_user_func_array($match['target'], $match["params"]);
    }else{
        $params = $match['params'];
        $target = $match['target'];
        $name   = $match['name'];
        $prefix_name = explode("_", $name);

        switch($prefix_name[0]){
            case 'view':
                require 'view/'. $target .".php";
            break;

            default:

            break;
        }

    }
}else{
    require '../model_elements/error/404_error.php';
    exit();
}

?>