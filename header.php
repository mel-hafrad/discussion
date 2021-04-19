<?php
require_once('bdd.php');


echo "
<!DOCTYPE html>
<html lang='fr'>

<head>
    
</head>

<body>
    
            <ul>
            ";       

            if(isset($_SESSION['admin']) AND $_SESSION['admin'] == true)
                {
               echo" <li><a href='admin.php' >Admin</a></li>";
            }
            if(isset($_SESSION['connected'])){
                echo"<li><a href='profil.php'>Profil</a></li>";
            }
            if(!isset($_SESSION['connected'])){ 
                echo"
                <li ><a href='inscription.php' >Inscription</a></li>
                <li><a href='connexion.php'>Connexion</a></li>";
                }
                echo "
            </ul>
        </navbar>
    </header>
";
    
    ?>