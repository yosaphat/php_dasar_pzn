<?php 

$names = ["yosaphat", "ananda", "mikola"];

for ($i = 0; $i < count($names); $i++){
	echo "data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name){
	echo "data ke-$name" . PHP_EOL;
}


foreach ($names as $name){
	echo "Data $name" . PHP_EOL;
}

$person = [
"firstName" => "yosaphat",
"midleName" => "ananda",
"lastName" => "mikola"];

foreach ($person as $kunci => $nilai){
	echo "$kunci : $nilai" . PHP_EOL;
}