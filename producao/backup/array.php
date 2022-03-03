<?php 
require_once 'inicio.php';
?>

<h1>array</h1>

<?php 

//$nomes = array("André", "Bruno", "Carlos", "Diego", "Eduardo");
$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];
echo $nomes[0]; // André


echo "</br>";


$cesta = [
	'banana' => 12,
	'laranja' => 6,
	'abacaxi' => 2
]; 

echo $cesta;
echo "</br>";

$cesta['uva'] = 1; 

echo $cesta;
echo "</br>";


?> 

<?php 
require 'fim.php';
?>