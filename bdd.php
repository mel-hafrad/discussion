<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} // isset au cas où il soit appelé deux fois dans le meme fichier, eviter les conflits
$bdd = mysqli_connect('localhost', 'root', '', 'discussion'); //connexion bdd ->essayerpdo


?>