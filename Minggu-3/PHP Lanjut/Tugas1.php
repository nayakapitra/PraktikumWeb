<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Faktorial</title>
</head>
<body>

<?php 

function faktorial($n){
	if($n==1){
		return $n;
	}else{
		return $n * faktorial($n-1);
	}
}
$nilai =5;
echo "Hasil faktorial dari ".$nilai."! adalah = ".faktorial($nilai);

?>

</body>
</html>