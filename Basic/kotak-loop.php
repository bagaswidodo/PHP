<?php
echo "<h1>Membuat Bentuk bentuk dengan perulangan di PHP</h1> <hr />";

echo "<h3>Kotak </h3>";
for ($i = 0; $i < 4; $i++) {
	for ($j = 0; $j < 4; $j++) {
		echo "*";
	}
	echo "<br />";
}

echo "<h3>Segitiga siku - siku </h3>";
for ($i = 0; $i < 4; $i++) {
	for ($j = 0; $j <= $i; $j++) {
		echo "*";
	}
	echo "<br />";
}
?>