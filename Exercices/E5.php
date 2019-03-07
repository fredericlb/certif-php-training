<?php

/**
 * implode/explode 
 * sizeof 
 * regexps
 */

$nombres = [
    "2", // oui
    "m", // non
    "18", //oui
    "18.", // oui
    "+18", // oui
    "-21.", //oui
    "z21.", // non
    "21.08", // oui
    "21.0800", // oui
    "21.0800e5", //oui
    "21.0800f5" //non
];


// renvoie la partie entière pour les valeurs identifiées par oui dans $nombres
// renvoie null sinon
function extraire($valeur) {
    // TODO 
}

// boucle sur $nombres, on stocke ceux pour lesquelles extraire ne vaut pas null

// on affiche toutes les valeurs séparées par un tiret

// on affiche NOMBRE_MATCH/NOMBRE_TOTAL


