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
    
    $text = file_get_contents("./E2.txt") . "\n" . $$var;
    
    file_put_contents("./E2.$var.txt", $text);
}

exercice2("a");
exercice2("b");
exercice2("c");


// PART 3 : Ajouter un long lorem ipsum sans interpolation ici
$longTexte = <<<'MON_TEXTE'
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Aenean nisi ex, scelerisque vitae felis ac, vulputate 
placerat quam. Pellentesque est nulla, semper vitae arcu 
vitae, scelerisque egestas ante. Nulla aliquam ligula est. 
Sed pretium sem dolor. Vestibulum et nisl finibus, consectetur 
lacus at, sollicitudin metus. Sed at lacus ac lorem posuere eleifend. 
Maecenas lacinia, tellus quis viverra lobortis, sapien justo suscipit
orci, ut faucibus magna tortor eu magna. Sed lacinia risus et quam mollis,
viverra volutpat turpis fringilla. Quisque sem tellus, auctor quis erat 
sit amet, congue interdum nisi.
MON_TEXTE;

// PART 4 Ecrire la fonction remplacerLorem, qui remplace le mot Lorem par 'ornithorynque'
// dans longTexte, mais qui ne renvoie rien (elle modifie)

function remplacerLorem(&$text) {
    $text = str_replace("Lorem", "ornithorynque", $text);
}

remplacerLorem($longTexte);

echo $longTexte;
