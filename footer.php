<?php
require_once('bdd.php');
require_once('function.php');


if(isset($_SESSION['utilisateur'])){
$utilisateur = $_SESSION['utilisateur'];
}

echo "
<footer>";
    if(isset($_SESSION['connected'])){
        echo "<p class='coucou'> Bonjour ". $utilisateur['login'] . "</p>"; // si on est connecté la class coucou nous fait coucou :-)
    }
    
    if(isset($_SESSION['connected']) && $_SESSION['connected']){ // si on est connecté le bouton deconnexion apparait
        echo" <form method='POST' action='deconnexion.php'>
         <input type='submit' class='deco' name='deconnexion' value='DECONNEXION'> 
         </form>";
        
    }
    echo"  
    </article>
</footer>
</body>
</html>";

?>