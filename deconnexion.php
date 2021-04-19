<?php
require_once('bdd.php');
require_once('function.php');

if(isset($_POST['deconnexion'])){
    session_destroy();
    redirect('connexion.php');  // bouton deconnexion, on reçois le formulaire de deconnexion
                                // a la fois une sécurité et une façon de rediriger plus facilement et sans conflit de header('Location: ');
}?>

