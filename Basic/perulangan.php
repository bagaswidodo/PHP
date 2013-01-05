<?php
echo "<h1>Penggunaan FOR di PHP</h1> <hr />";
for ($i = 0; $i < 10; $i++) {
	echo $i . "<br />";
}
echo "<h1>Penggunaan while di PHP</h1> <hr />";
$i = 0;
while ($i < 10) {
	echo $i . "<br />";
	$i++;
}
echo "<h1>Penggunaan do...while di PHP</h1> <hr />";
$i = 0;
do {
	echo $i . "<br />";
	$i++;
}while ($i < 10);
?>