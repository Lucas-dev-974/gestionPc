<?php
if(is_connected() == false){        // Si l'user n'est pas connecter il est rediriger ver la page de connexion
    header('Location: /connexion');
}
require '../Model_view/header/navbar.php';      // Inclut la navbar


?>