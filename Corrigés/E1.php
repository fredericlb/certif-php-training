<?php

/**
 * Concepts :
 * - ++i et i++ 
 * - Simple quotes / Double quotes
 * - Strcmp
 * - Scanf / Printf
 * - Strpos
 */

$valeurs = [
    "wibbily",
    "wobbily",
    "timey",
    "wymey"
];

function exercice1($valeurs, $input) {
    $i = 0;
    // PART 1 : On affiche "Plus loin : VALEUR (position du i : POS)" avec printf pour les valeurs plus grandes que $input
    foreach ($valeurs as $v) {
        if (strcmp($v, $input) > 0) {
            ++$i;
            $pos = strpos($v, "i");
            printf("Plus loin: %s (position du i : %d)\n\n", $v, $pos === false ? -1 : $pos);
        }
    }
    
    // PART 2 : On affiche "Nombre de résultats : X" via chaines interpolées
    echo "Nombre de résultats : $i\n";
}

exercice1($valeurs, "voiture");