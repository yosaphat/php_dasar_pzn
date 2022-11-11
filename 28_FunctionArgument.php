<?php

function sayHello ($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("yosaphat");
sayHello("ananda");
sayHello("yosaphat", "ananda");

function sum (int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100,200);
sum("100", "200");
sum(true, false);


function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4];

sumAll(1,23,4,5);
sumAll(...$values);