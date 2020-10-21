<?php

if(isset($_POST['login'])){
    if(isset($_POST['user_pseudo']) && isset($_POST['user_pwd'])){
        $verif = (isset($_POST['user_pseudo']) && !empty($_POST['user_pwd'])) ? true : false;
        if($verif){
            $user_pseudo = htmlspecialchars($_POST['user_pseudo']);
            $user_pwd     = htmlspecialchars($_POST['user_pwd']);
            $loged = login($pdo, $user_pseudo, $user_pwd);
            if($loged){
                $success = 'Vous êtes connecté.';
                header('Location: /');
            }else{
                $error   = 'Pseudo ou mot de passe incorrecte ! ';
            }

        }else{
            $error = "Veuillez compléter tout les champ !";
        }
    }
}

is_connected(); ?>