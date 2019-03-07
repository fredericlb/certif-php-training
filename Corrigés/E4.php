<?php

date_default_timezone_set('Europe/Paris');

$data = [
    '{"items": ["jean", "paul", "michel", \'laure\'], "created_at": 1551960186}',
    '{"items": ["jean", "paul", "michel", "laure"], "created_at": 1551960186}'
];

foreach($data as $d) {
    $json = json_decode($d);
    if (json_last_error() !== JSON_ERROR_NONE) {
        continue;
    }
    
    list($person1, $person2) = $json->items;
    
    // PART 2 : afficher cette ligne avec les bons paramèters
    $created_at = $json->created_at;
    $date = new DateTime("@$created_at");
    $formated_date = $date->format('d/m/Y h:i');
    echo "utilisatueurs: $person1, $person2. création (jj/mm/aaaa, hh:mm) : $formated_date\n";
    
    foreach ($json->items as $person) {
        if (substr($person, 0, 3) === "mic") {
            die('Non pas Michel !');
        }
    }
}


