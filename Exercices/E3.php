<?php

$a = 2; $b = "2";

function exercice3() {
    
    // Il manque une ligne ci dessous
    
    if ($a /* différent de */ $b) {
        return false;
    }
    
    if ($a /* identique à */ $b) {
        return false;
    }
    
    if (($a <> $b) == /* vrai ou faux */) {
        return false;
    }
    
    if (($a == $b) ^ /* vrai ou faux */) {
        return false;
    }
    
    if (isset(/* variable */)) {
        return false;
    }
    
    $d = /* valeur */;
    $c = $d ?? /* valeur */;
    
    if ($c !== "test") {
        return false;
    }
    
    if (($a <=> $b) !== /* entier */) {
        return false;
    }
    
    return true;
}


if (exercice3()) {
    echo "Formidable !\n";
} else {
    echo "(╯°□°）╯︵ ┻━┻)";
}
