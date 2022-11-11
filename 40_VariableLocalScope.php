<?php
function createName()
{
    $name = "yosa"; //local scope
}

createName();
echo $name . PHP_EOL; 
// error atau tidak bisa