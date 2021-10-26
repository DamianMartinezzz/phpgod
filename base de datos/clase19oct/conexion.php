<?php 
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','classicmodels');

$ref = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
if (!$ref) {
    die("Falló la conexión: " . mysqli_connect_error());
}

function queryfinal($ref,$query){

	$result = mysqli_query($ref,$query);
	if(!$result) {
		die('<b>Error de consulta: '.mysqli_error($ref).'</b>');
	}
	return $result;
}
?>
