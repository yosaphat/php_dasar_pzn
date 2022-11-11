<?php

$sayHello = function (string $name){
    echo "helo $name" . PHP_EOL;
};

$sayHello("yosa");
$sayHello("kurniawan");

// ================AnonymousFunction=======================

function sayGoodBye(string $name, $filter)
{
    $finalName =$filter ($name);
    echo "sayGoodBye $finalName" . PHP_EOL;
};

$filterFunction = function (string $name) : string{
    return strtoupper($name);
};

sayGoodBye("Yosa", $filterFunction);

// ===============Mengakses diluar function========================


$firstName = "yosaphat";
$lastName = "ananda";

$sayHelloYosa = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloYosa();

$firstName="satya";
$lastName= "priyambada";
$sayHelloYosa();
