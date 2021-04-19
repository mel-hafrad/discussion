<!DOCTYPE html>
<html lang="fr">
    <header>
        <link rel="stylesheet" href="image.css">
        <title>Fil de discussion PHP</title>
    </header>
<?php
    require_once('bdd.php');

$header = "inscription";
require_once('function.php');

if(isset($_POST['register'])){
    inscription($_POST['login'],$_POST['password'], $_POST['confirm_password'], $bdd);
}
require_once("header.php");
?>
    <body>
    <h1 id="style">Page d'inscription </h1>
    
    <div id="style1">
        <form method="POST">
            <label for="login">
                Login:<input id="boite" type="text" size="10" maxlength="40" name="login"/><br />
            </label>
            <label for="password">
                Password: <input id="boite" type="password" size="10" maxlength="10" name="password" /><br/>
            </label>
            <label for="confirm_password">
                Password verify: <input id="boite" type="password" size="10" maxlength="10" name="confirm_password"/>
            </label>
            <input type="submit" name="register"/>
        </form>
    </div>
    </body>
</html>
<?php


include "footer.php";

?>