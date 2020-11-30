<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Kalkulator</title>
</head>
<body>

<?php

$a = 20;
$b = 5;
echo "Bilangan 1 = $a <br>";
echo "Bilangan 2 = $b <br>";

echo "<br>";
echo "Berikut merupakan hasil dari setiap operasi <br>";
echo "<br>";

echo "PENJUMLAHAN<br>";
echo "Operator : + <br>";
$hasil = $a + $b;
echo "Hasil : $hasil <br>";

echo "<br>";
echo "PENGURANGAN<br>";
echo "Operator : - <br>";
$hasil = $a - $b;
echo "Hasil : $hasil <br>";

echo "<br>";
echo "PERKALIAN<br>";
echo "Operator : * <br>";
$hasil = $a * $b;
echo "Hasil : $hasil <br>";

echo "<br>";
echo "PEMBAGIAN<br>";
echo "Operator : / <br>";
$hasil = $a / $b;
echo "Hasil : $hasil <br>";

echo "<br>";
echo "MODULUS<br>";
echo "Operator : % <br>";
$hasil = $a % $b;
echo "Hasil : $hasil <br>";

?>

</body>
</html>