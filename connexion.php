
<?php
require_once('bdd.php');

$header = "Connexion";
$header_css = "css/connexion.css";

require_once('function.php');

if(isset($_POST['connect'])){
    connexion($_POST['login'], $_POST['password'], $bdd);
}
require_once("header.php");
?>

    <section class="superform">
            <h1 id ="style1" >CONNEXION</h1>
        <form action="connexion.php"  method="POST">
        
                <label for="login">Login</label>
                <input type="text" id="id" class="text" name="login">

                <label for="password">Mot de passe</label>
                <input type="password" id="id2" class="password" name="password">
                <input type="submit" id="password" class="deco_main" name="connect">

                <label for="confirm_password">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password">
        </form>
               


                <?php

include "footer.php";


?>