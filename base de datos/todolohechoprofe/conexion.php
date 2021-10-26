<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','classicmodels');

define('CANT_REGXPAG',5);

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(!$conn){
	exit("Error en conexion: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

function consulta($conn, $sql){
	$res = mysqli_query($conn, $sql);

	if(!$res){
		exit("Error en consulta: " . mysqli_error($conn));
	}
	
	return $res;
}
?>