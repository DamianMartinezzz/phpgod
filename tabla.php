<table border="1">
<?php 
	$cant_filas = 7;
	$cant_col = 7;
?>
	<?php for ($filas=1;$filas <=$cant_filas;$filas++){ ?>
		<tr>
		<?php for ($col=1;$col<=$cant_col;$col++) { ?>
		<td><?php echo $filas."--".$col ?><td>
		<?php } ?>
	</tr>
	
	<?php } ?>