<?php 

for ($count = 1; $count <= 10 ; $count++){
	echo "ini adalah for loop ke-$count" .PHP_EOL;
}

for ($count = 10; $count >=1 ; $count--){
	echo "ini adalah for loop ke-$count" . PHP_EOL;
}

for ($count = 1; $count <= 10 ; $count++):
	echo "ini adalah for loop ke-$count" .PHP_EOL;
endfor;

for ($count = 10; $count >=1 ; $count--):
	echo "ini adalah for loop ke-$count" . PHP_EOL;
endfor;
