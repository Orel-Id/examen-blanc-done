<?php
// Fonctions de validation

/**
 * Valide si une valeur est un nombre dans un range de 0 à $max
 * @param $position mixed la valeur à tester
 * @param $max int la valeur maximum borne exclue
 * @return boolean 
 */
function isValidPosition($position, $max) {
    return (isset($position) && is_numeric($position) && $position >= 0 && $position < $max);
}

/**
 * Valide si la chaine $name n'est pas vide et ne contient pas de digit
 * @param $name {string} la chaine a tester
 */
function isValidName($name){
    $retour = $name !== "";
    $retour = $retour && ctype_alpha($name);
    return $retour;
}

function isValidSex($sex) {
    return $sex === 'M' || $sex === 'F';
}

function isValidDate($jour, $mois, $annee) {
    return checkdate($mois, $jour, $annee);
}
