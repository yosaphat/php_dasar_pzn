<?php 

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter,$name);
    echo "Hello $finalName" . PHP_EOL;
}
SayHello("yosaphat", "strtoupper");
sayHello("ricky", "strtolower");

sayHello("Eko", function (string $name): string {
    return strtoupper($name);
}); //anonymousFunction

sayHello ("yosa", fn($name) => strtoupper($name)); //arrowFunction