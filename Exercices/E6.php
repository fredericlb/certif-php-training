<?php

// créer un tableau A qui va de 0 à 100 par pas de 2
// récupérer les 10 premiers et les 10 derniers éléments puis les fusionner dans un nouveau tableau B
// ajouter le 12e element de A a udébut de B
// ajouter les 13,14,15e elements de A à la fin de B

// afficher les éléments de B entre parenthèses, en utilisant array_walk


$tab = [
    "C1" => [ "a" => 0, "b" => 1, "c" => 2],
    "E4" => [ "x" => 0, "y" => 1, "z" => 2]
];

$clefs = ["B2", "C1", "D3", "E4", "F5"];

// Itérer sur $clefs et si $tab contient la clé alors afficher la liste des clés du sous tableau correspondant
