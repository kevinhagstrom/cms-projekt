<?php
$host = 'localhost';
$user = 'dhg17';
$pass = 'mysql2018';
$db = 'fruit_stop';

try{
	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo 'Databaskontakten misslyckades: ' . $e->getMessage();
}
?>
