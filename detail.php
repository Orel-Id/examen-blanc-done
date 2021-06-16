<?php
require_once('data/liste_stagiaires.php');
$position = (isset($_GET["id"])) ? $_GET["id"] : null;

// Validation
$error_msg = "";
if (!isset($position)  || !is_numeric($position) || $position < 0 || $position >= count($stagiaires)) {
    if (!isset($position)) {
        $error_msg = "Veuillez fournir un id de stagiaire";
    } else {
        $error_msg = "Pas de stagiaire connu avec cet id";
    }
    echo "<strong> $error_msg </strong>";
    require_once("templates/liste.php");
} else {
    $nom = $stagiaires[$position]["nom"];
    $prenom = $stagiaires[$position]["prenom"];
    $sexe = $stagiaires[$position]["sexe"];
    $ddn = explode('/', $stagiaires[$position]["ddn"]);
    $hobbiesDuStagiaire = $stagiaires[$position]["hobbies"];
    // require_once('templates/detail.php');
    require_once('templates/update.php');
}

