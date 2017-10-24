<!DOCTYPE html>
<html>
<head>
	<title>Gems</title>
</head>
<body>
<?php
require_once 'coba.php';
$manusia = new manusia('Salman','Bandung','XI RPL 1','Menikah');
$manusia1 = new manusia('Fidly','Buhbat','Teu Nyakola','Jomblo Permanent');
 	echo "Namanya .. ".$manusia->get_nama();
 	echo "<br>Tempat Lahir .. ".$manusia->get_ttl();
 	echo "<br>Kelas .. ".$manusia->get_kelas();
 	echo "<br>Status .. ".$manusia->get_status();
 	echo "<br>";
 	echo "__________________________________________<br>";
 	echo "__________________________________________<br>";
 	echo "Namanya .. ".$manusia1->get_nama();
 	echo "<br>Tempat Lahir .. ".$manusia1->get_ttl();
 	echo "<br>Kelas .. ".$manusia1->get_kelas();
 	echo "<br>Status .. ".$manusia1->get_status();
?>
</body>
</html>