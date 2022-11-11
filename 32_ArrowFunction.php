<?php 

$firstName = "yosa";
$lastName = "ananda";

$anonymousFunction= function () use ($firstName, $lastName): string {
    return "hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();



echo $anonymousFunction();