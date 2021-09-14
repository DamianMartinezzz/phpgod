<table border="1">
<?php 
	$cant_filas = 13;
	$cant_col = 13;
	?>
	<?php for ($filas=1;$filas <=$cant_filas;$filas++){ ?>
		<tr>
		<?php for ($col=1;$col<=$cant_col;$col++) { ?>
		<?php 
		if ($col==$filas or ($col + $filas == $cant_filas + 1)){
			$color = "red";
		} else {
			$color = "white";
		}

		?>
		<td bgcolor="<?php echo $color; ?>"><?php echo $filas."--".$col ?><td>
		<?php } ?>
	</tr>
	
	<?php } ?>