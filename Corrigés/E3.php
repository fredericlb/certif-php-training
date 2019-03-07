<?php

$a = 2; $b = "2";

function exercice3() {
    
    // Il manque une ligne ci dessous
    global $a, $b;
    
    if ($a != $b) {
        return false;
    }
    
    if ($a === $b) {
        return false;
    }
    
    if (($a <> $b) == true) {
        return false;
    }
    
    if (($a == $b) xor true) {
        return false;
    }
    
    if (isset($d)) {
        return false;
    }
    
    $d = null;
    $c = $d ?? 'test';
    
    if ($c !== "test") {
        return false;
    }
    
    if (($a <=> $b) !== 0) {
        return false;
    }
    
    return true;
}


if (exercice3()) {
    echo "Formidable !\n";
} else {
    echo "(╯°□°）╯︵ ┻━┻)";
}
