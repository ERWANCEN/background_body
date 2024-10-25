<?php

if (!isset($_GET['couleur'])) { // je vérifie si le paramètre "couleur" est absent de l'URL / Si "Oui" : redirection vers la même page et ajout de "?couleur=#FFFFFF" à l'URL / Si "Non" : ne rien faire
    header("Location: " . $_SERVER['PHP_SELF'] . "?couleur=#FFFFFF");
    // header : permet de rediriger l'utilisateur du site
    // "Location: " : indique au navigateur où aller
    // $_SERVER['PHP_SELF'] : indique l'URL de la page sur laquelle se trouve déjà l'utilisateur
    // "?couleur=#FFFFFF" : définit la couleur par défaut
    exit;
    // exit; : va de pair avec header("Location: "...); pour arrêter l'execution. Sinon le code qui suivra sera exécuté à l'infini
}

$couleur = $_GET['couleur']; // affectation à la variable "$couleur", le code de la couleur choisie

/*

// PARTIE EXPERIMENTALE

if (isset($_GET['couleur'])) {
    $couleur = $_GET(['couleur']);
} else {
    $couleur = '#FF0000';
}
*/

?>

<!DOCTYPE html>
<html lang="fr"> <!-- choix du français -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Body</title> <!-- titre de la page -->
    <style> /* style de la page */
        body {
            background: <?php echo $couleur; ?>; /* modification de la couleur du body par la couleur enregistrée dans la variable "$couleur" */
        }
    </style>
</head>
<body>
    <form action="http://localhost:8888/php/background_body/background_body.php" method="GET"> <!-- balise <form> avec method="GET" pour récupérer le "name" de l'input color et l'envoyer à l'URL citée -->
        <input type="color" name="couleur" id="couleur"> <!-- input type="color" pour obtenir le bouton avec le choix des couleurs -->
        <input type="submit" id="setColor" value="Appliquer la couleur sélectionnée"> <!-- bouton pour valider la couleur sélectionnée -->
    </form>
</body>
</html>

