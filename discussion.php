<?php
require_once('header.php');
require_once('bdd.php');
require_once('function.php');


?>

<html>
<head>
<title>Insertion d'une nouvelle réponse</title>
</head>

<body>

<!-- on fait pointer le formulaire vers la page traitant les données -->
<form  action="discussion.php" method='post'>
    <table>
        <tr><td>
            Auteur :
        </td>
        <td>
            <input type="text" name="id_utilisateur" maxlength="30" size="50" value="<?php if (isset($_POST['id_utilisateur'])) echo htmlentities(trim($_POST['id_utilisateur'])); ?> ">
        </td></tr><tr><td>
            Message :
        </td><td>
    <textarea name="message" cols="50" rows="10"><?php if (isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?></textarea>
        </td></tr><tr><td><td>
            <input type="submit" name="go" value="Poster">
        </td></tr></table>
</form>


<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>



