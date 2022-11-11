<?php 

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return "arek $name";
}

SayHello("Yosaphat","sampleFunction");
sayHello("yosa", "strtoupper");
sayHello("yosa", "strtolower");