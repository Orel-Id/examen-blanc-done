<?php
require_once ('data/liste_stagiaires.php');
require_once ('functions/validation.php');
require_once ('functions/formater.php');

$position = isset($_POST["position"])?$_POST["position"] : null;
$nom = isset($_POST["nom"])?$_POST["nom"] : null;
$prenom = isset($_POST["prenom"])?$_POST["prenom"] : null;
$sexe = isset($_POST["sexe"])?$_POST["sexe"] : null;
$ddn = [
    isset($_POST["jour"])?$_POST["jour"] : null,
    isset($_POST["mois"])?$_POST["mois"] : null,
    isset($_POST["annee"])?$_POST["annee"] : null,
];
var_dump($ddn);
$hobbiesDuStagiaire = isset($_POST["hobbies"])?$_POST["hobbies"] : [];

$error = false;
if (!isValidPosition($position, count($stagiaires))) {
    $error = true;
}
if (!isValidName($nom)) {
    $error = true;
    $error_nom = "Le nom est soit vide soit contient des carractères non autorisés";
}
if (!empty($prenom) && !isValidName($prenom)) {
    $error = true;
    $error_prenom = "Le prénom est soit vide soit contient des carractères non autorisés";
}
if (!isValidSex($sexe)) {
    $error = true;
    $error_sexe = "Le sexe choisi est introuvable";
}
if (!isValidDate($ddn[0], $ddn[1], $ddn[2])) {
    $error = true;
    $error_ddn = "La date est invalide";
}

if ($error) {
    require_once('templates/update.php');
} else {
    require_once('templates/detail.php');
}
