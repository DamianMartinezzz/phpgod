<table border="1">
<?php 
	$cant_filas = $_GET['mfilas'];
	$cant_col = $_GET['mfilas'];
	?>
	<?php for ($filas=1;$filas <=$cant_filas;$filas++){ ?>
		<tr>
		<?php for ($col=1;$col<=$cant_col;$col++) { ?>
		<?php 
		if (($col == 1 || $filas == 1) && ($col = $cant_col || $filas = $cant_filas)){
			$color = $_GET['mcolor'];
		} else {
			$color = "white";
		}

		?>
		<td bgcolor="<?php echo $color; ?>"><?php echo $filas."--".$col ?><td>
		<?php } ?>
	</tr>
	
	<?php } ?>
