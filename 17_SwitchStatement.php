<?php 

$nilai = "F";

switch ($nilai){
	case "A":
		echo "Anda Lulus dengan Sangat baik" . PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda Lulus" . PHP_EOL;
		break;
	case "D":
		echo "anda Tidak lulus" . PHP_EOL;
		break;
	default:
		echo "mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai):
	case "A":
		echo "Anda Lulus dengan Sangat baik" . PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda Lulus" . PHP_EOL;
		break;
	case "D":
		echo "anda Tidak lulus" . PHP_EOL;
		break;
	default:
		echo "mungkin anda salah jurusan" . PHP_EOL;
endswitch;