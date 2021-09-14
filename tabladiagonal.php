<table border="1">
<?php 
	$cant_filas = $_GET['cfilas'];
	$cant_col = $_GET['ccolumnas'];
	?>
	<?php for ($filas=1;$filas <=$cant_filas;$filas++){ ?>
		<tr>
		<?php for ($col=1;$col<=$cant_col;$col++) { ?>
		<?php 
		if ($col==$filas){
			$color = "red";
		} else {
			$color = "white";
		}

		?>
		<td bgcolor="<?php echo $color; ?>"><?php echo $filas."--".$col ?><td>
		<?php } ?>
	</tr>
	
	<?php } ?>