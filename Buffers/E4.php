<?php

date_default_timezone_set('Europe/Paris');

var_dump(json_decode('{"prenom": "test}'));

var_dump(json_last_error_msg());

//die('Je suis mort');
//exit(1);

/*$tab = ["ab", "cd"];
$item0 = $tab[0];
$item1 = $tab[1];

list($item0, $item1) = $tab;*/

$date = "21/03/1999";
list($jour, $mois, $annee) = explode("/", $date);

echo $jour . " " . $mois . " " . $annee;

$datet = new DateTime("@1584900");
echo "\n\n";
echo $datet->format("y m d");
echo "\n";

echo substr("salut", 0, 2) . "\n\n";