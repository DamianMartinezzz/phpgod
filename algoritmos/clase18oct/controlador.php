<?php	
	if (!$link=mysqli_connect('localhost','root','','classicmodels')){
		die('error de conexion ' . mysqli_connect_error() );
	}
	
	$p = $_GET['pagina'] - 1;
	if($_GET['tabla']=='offices') {
		$query = "SELECT * FROM offices LIMIT " . $p . ",3";
	} else if($_GET['tabla']=='orders') {
		$query = "SELECT * FROM orders LIMIT " . $p . ",3";
	} 
	
	if (!$result=mysqli_query($link,$query)){
		die('error de conexion' . mysqli_error($link));
	}	
	while ($i=mysqli_fetch_assoc($result)){
		$arr[] = $i;
	}

	echo json_encode($arr);
?>