<?php include "menu.php"; 
require_once "conexion.php"?>


<?php

$query = "SELECT max(officeCode) as maxoffcd from offices";
$result = queryfinal($ref,$query);

$lista = mysqli_fetch_assoc($result);
echo "<br><br>".$lista['maxoffcd'];




?>