<?php

$data = [
    '{"items": ["jean", "paul", "michel", \'laure\'], "created_at": 1551960186}',
    '{"items": ["jean", "paul", "michel", "laure"], "created_at": 1551960186}'
];

foreach($data as $d) {
    // PART 1 : décoder le json, si il est faux on pase au suivant
    $json = json_decode($d);
    if (json_last_error() !== JSON_ERROR_NONE) {
        continue;
    }
    
    list($person1, $person2) = /* A compléter */;
    
    // PART 2 : afficher cette ligne avec les bons paramèters
    echo "utilisatueurs: $person1, $person2. création (jj/mm/aaaa, hh:mm) : $formated_date\n";
    
    foreach ($json->items as $person) {
        // PART 3 : Si $person commence par mic, on tue le programme en criant "Non pas Michel !";
    }
}


