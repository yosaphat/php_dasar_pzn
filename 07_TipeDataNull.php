<?php 

$name = "yosa";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name)); //untuk mengecek nilai variable kosong apa tidak menggunakan is_null
echo "\n";

$contoh = "yosa";
unset($contoh); //unset digunakan untuk menghapus variable dan tidak bisa diakses

$contoh = "ananda";
$contoh = null;

var_dump(isset($contoh));