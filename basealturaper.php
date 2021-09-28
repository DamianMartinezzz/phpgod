<?php

echo "Base: " . $_GET['Base'];
echo "<br>";
echo "Altura: " . $_GET['Altura'];
echo "<hr>";
echo "Perimetro: " . ((2 * $_GET['Base']) + (2 * $_GET['Altura']));
echo "<br>";
echo "Superficie: " . $_GET['Base'] * $_GET['Altura'];

?>