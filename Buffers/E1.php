<?php

$i = 0;

echo $i++;

echo ++$i;

echo "\n\n";


echo '$i\n';

echo "\n\n";

echo "$i\n"; 

echo "${i}e\n";

// strcmp

echo strcmp("a", "b");
echo strcmp("aa", "ab");
echo strcmp("aa", "aA"); 
echo "\n\n";

$a = 10;
$b = "fois";

echo "$a $b\n";
printf("%d %s\n", $a, $b);

$str = sprintf("%d %s\n", $a, $b);

$parseMsg = "10/10 en maths";
sscanf($parseMsg, "%d/%d en %s", 
    $noteEtudiant, $noteMax, $domaine);

echo $noteEtudiant . " " . $noteMax . " " . $domaine;

echo "\n";

echo strpos("salut", "l");

echo "\n";


var_dump(strpos("salut", "n"));
