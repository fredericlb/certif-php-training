<?php

var_dump(2 == '2');
var_dump(2 === '2');


var_dump(2 <> '3'); /*!=*/

var_dump(true && true); 
var_dump(true and true); 

var_dump(true || true); 
var_dump(true or true); 

var_dump(true xor true); 

$c = null ?? 'test';
var_dump($c);

var_dump(4 <=> 3);

var_dump(isset($c));

unset($c);

var_dump(isset($c));

$a = 2 ;
$b = 3;

function somme() {
    global $a, $b; 
    return $a + $b;
}

var_dump(somme());