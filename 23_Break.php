<?php 

$counter = 1;

while (true){
	echo "ini adalah for while ke-$counter" .PHP_EOL;
	$counter++;

	if($counter > 10){
		break;
	}
}
