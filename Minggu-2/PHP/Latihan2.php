<!DOCTYPE html>
<html>
<head>
	<title>Mengurutkan Data</title>
</head>
<body>

<?php 

$nama = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "bunga", "cici", "zoo");
sort($nama);
foreach ($nama as $key => $val) {
    echo "nama[" . $key . "] = " . $val . "<br>";
}

?>

</body>
</html>