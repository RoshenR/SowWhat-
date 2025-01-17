<?php

require_once('./models/articleManager.php');

$template = "./views/pages/detection.php";

if (!empty($_POST['description']) && !empty($_POST['localisation']) && !empty($_POST['numero_salle']) && !empty($_POST['categorie'])) {
    $result = saveArticles($_POST['description'], $_POST['localisation'], $_POST['numero_salle'], $_POST['categorie']);
    if ($result) {
        $feedback = "Article publié avec succès !";
    } else {
        $feedback = "Oups, il y a eu un problème lors de la publication.";
    }
}

?>