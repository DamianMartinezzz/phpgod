<?php 
$nombre = $_GET['Nombre'];
$apellido = $_GET['Apellido'];
$edad = $_GET['Edad'];
$dni = $_GET['Dni'];

echo "<b>Su información es la siguiente, si todo esta en orden presione el boton para finalizar el registro";
echo "Nombre anteriormente indicado: ".$nombre."<br><br>";
echo "Apellido anteriormente indicado: ".$apellido."<br><br>";
echo "Edad anteriormente indicada: ".$edad."<br><br>"; 
echo "Dni anteriormente indicado: ".$dni."<br><br>";
?>
<form action="registrofinalizado.php" method="GET">
<br><input type="submit" value="Finalizar Registro">
</form>
<form action="getformulario.php" method="GET">
<br><input type="submit" value="Corregir registro">
</form>