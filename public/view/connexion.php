<?php
require '../Controller/action/connexion_action.php';
is_connected();  
?>

<div class="container-fluid">
    <hr class="mb-5">
    <form class="form-signin col-lg-3 col-md-5 mx-auto" method='post'>
        <?php require '../Model_view/errors/errors_var.php'; ?>
        <h1 class="h3 mb-3 mt-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name='user_pseudo' type="text" id="inputEmail" class="form-control my-1" placeholder="Votre pseudo" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name='user_pwd' type="password" id="inputPassword" class="form-control my-1" placeholder="Votre mot de passe" required>
        <div class="checkbox mb-3">
        </div>
        <input name='login' class="btn btn-lg btn-primary btn-block" type="submit" value='Se connecté'></input>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-Simplon project : <br> Gestion d'ordinateur</p>
    </form>
</div>