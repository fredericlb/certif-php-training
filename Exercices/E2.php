<?php

/**
 * HEREDOC/NOWDOW
 * $$
 * file / file_get_contents / file_put_contents
 * Passage par référence
 * str_replace
 */

function exercice2($var) {
    $a = "Dans le port d’Amsterdam";
    $b = "Y a des marins qui mangent";
    $c = "Sur des nappes trop blanches";
    
    // PART 1 : On écrit le contenu de E2.txt suivi de $a, b ou c (en fonction de var) 
    // dans E2.$var.txt
    
    
}

exercice2("a");
exercice2("b");
exercice2("c");


// PART 3 : Ajouter un long lorem ipsum sans interpolation ici
$longTexte = '';


// PART 4 Ecrire la fonction remplacerLorem, qui remplace le mot Lorem par 'ornithorynque'
// dans longTexte, mais qui ne renvoie rien (elle modifie)



remplacerLorem($longTexte);

var_dump();