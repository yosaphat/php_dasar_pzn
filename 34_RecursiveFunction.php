<?php 

function factorialLoop(int $value): int{
    $total = 1;
    for($i =1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(6));

function factorialRecursive(int $value)
{
    if ($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value -1);
    }
}

var_dump(factorialRecursive(4));

/*
function loop (int $value)
{
    if ($value == 0){
        echo "end Loop" . PHP_EOL;
    }else{
        echo "loop =$value" . PHP_EOL;
        loop($value -1);
    }
}

loop (300999);

*/ 