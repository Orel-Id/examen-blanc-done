<?php
/**
 * @param $nom String nom du stagiaires
 * @param $prenom string nom du stagiaires
 * @param $nom string nom du stagiaires
 */
function formatCompleteNom($nom, $prenom, $sexe) {
    $result = 'Mme';
    if ($sexe === 'M') {
        $result = 'Mr';
    }
    $nomFormate = strtoupper($nom);
    $prenomFormate = strtoupper(substr($prenom,0,1)).strtolower(substr($prenom,1));
    return "$result $nomFormate $prenomFormate";
}

function formatToDate($jour, $mois, $annee) {
    $now = new DateTime();
    return $now->setDate($annee, $mois, $jour)->format('d/m/Y');
}