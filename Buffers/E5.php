<?php

$tab = ["a", "b", "c"];

var_dump(sizeof($tab));
var_dump(count($tab));

var_dump(strlen('abc'));

var_dump(explode(":", "19:23:30"));

var_dump(implode(",", ["ab", "cd", "ef"]));

$regex = "/^(.+)@(.+\.[a-z]{3})$/i";

var_dump(preg_match($regex, "Az@google.com", $matches));

var_dump($matches);