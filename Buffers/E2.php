<?php

$a = 5;

$text = <<<MON_TEXTE
La structure de langage foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur 
si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée
$a"""""""""""""""
MON_TEXTE;

$text2 = <<<'MON_TEXTE'
La structure de langage foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur 
si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée
$a"""""""""""""""
MON_TEXTE;

echo $text . '\n';
echo $text2;

$a = 5;
$b = 7;

$maVar = 'a';

echo "\n";
echo $$maVar;
echo "\n";

echo file_get_contents("./E2.txt");
echo file_put_contents("./E2.put.txt", "bonjour");

echo "\n\n";
echo file_get_contents("./E2.lines.txt");
var_dump(file("./E2.lines.txt"));
echo "\n\n";

function test(&$a) {
    $a ++;
}

$a = 2;
test($a);
echo $a;

echo "\n\n";

$text = "mon teste";

echo str_replace("e", "a", $text);