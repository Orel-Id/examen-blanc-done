<?php
/**
 * @param string $nom nom du stagiaires
 * @param string $prenom nom du stagiaires
 * @param string $sexe nom du stagiaires
 */
function formatCompleteNom(string $nom, string $prenom, string $sexe): string {
    $result = 'Mme';
    if ($sexe === 'M') {
        $result = 'Mr';
    }
    $nomFormate = strtoupper($nom);
    $prenomFormate = strtoupper(substr($prenom,0,1)).strtolower(substr($prenom,1));
    return "$result $nomFormate $prenomFormate";
}

/**
 * @param string $jour jour du mois
 * @param string $mois numéro du mois (en partant de 1)
 * @param string $annee annee
 * @return string
 */
function formatToDate(string $jour, string $mois, string $annee): string {
    $now = new DateTime();
    return $now->setDate($annee, $mois, $jour)->format('d/m/Y');
}