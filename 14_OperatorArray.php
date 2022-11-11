<?php 

$first = [
"firstName" => "yosaphat"];

$last = [
"lastName" => "ananda"];

$full = $first + $last;
var_dump($full);

$a = [
"firstName" => "yosaphat",
"lastName" => "ananda"];

$b = [
"lastName" => "ananda",
"firstName" => "yosaphat"];

var_dump($a == $b);
var_dump($a === $b); // === identik harus sama