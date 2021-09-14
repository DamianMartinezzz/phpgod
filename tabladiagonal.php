<table border="1">
<?php 
	$cant_filas = $_GET['dfilas'];
	$cant_col = $_GET['dfilas'];
	?>
	<?php for ($filas=1;$filas <=$cant_filas;$filas++){ ?>
		<tr>
		<?php for ($col=1;$col<=$cant_col;$col++) { ?>
		<?php 
		if ($col==$filas or ($col + $filas == $cant_filas + 1) &&($col + $filas == $cant_col + 1)){
			$color = $_GET['dcolor'];
		} else {
			$color = "white";
		}

		?>
		<td bgcolor="<?php echo $color; ?>"><?php echo $filas."--".$col ?><td>
		<?php } ?>
	</tr>
	
	<?php } ?>