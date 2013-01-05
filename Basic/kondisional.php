<?php
$a = 1;
$b = 10;

echo "<h1>Penggunaan IF di PHP</h1> <hr />";

echo "nilai a = $a <br />";
echo "nilai b = $b <br />";

if($a < $b)
	echo "nilai a lebih kecil dari b";
else
	echo "nilai a lebih besar dari b";

echo "<h1>Penggunaan switch-case di PHP</h1> <hr />";
$pilih = 1;
echo "pilihan yang di pilih adalah $pilih <Br />";
switch ($pilih) {
	case 1:
		echo  "anda memilih pilihan pertama <br />";
		break;
	case 2:
		echo  "anda memilih pilihan kedua <br />";
		break;
	case 3:
		echo  "anda memilih pilihan ketiga <br />";
		break;
	default:
		echo  "Maaf, pilihan tidak tersedia :( <br />";
		break;
}
?>