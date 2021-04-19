<?php
require_once('bdd.php');
require_once('function.php');
require_once("header.php");
$header = "Profil";



if(isset($_POST['update'])){ // si on appuie sur le bouton update
    profil($_POST['login'], $_POST['password'],$_POST['confirm_password'], $bdd);
    echo "Changements effectués avec succès";
}
$utilisateur = $_SESSION['utilisateur'];
?>
<html>
    <h2 class="title_form">CHANGEMENT D'IDENTIFIANT</h2>
        <form action="" class="edited_profil" method="post">
                <label for="login">Login</label>
                <input type="text" id="login" class="text" name="login" value="<?php echo $utilisateur['login']; ?>">
            
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="password" name="password">

                <label for="confirm_password">Confirmer Mot de passe</label>
                <input type="password" id="confirm_password2" class="password" name="confirm_password">
            <input type="submit" id="submit" name="update">Update</input>
        </form>
</html>