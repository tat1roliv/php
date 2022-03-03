<?php 
require_once 'inicio.php';
?>

<h1>array</h1>

<?php 

$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];

$indice = 0;
$fruta = 'banana';
$nova_fruta = 'melancia';

echo $nomes[0]; // exibe o nome André
echo "</br>";

echo $nomes[$indice]; // exibe o nome André
echo "</br>";

echo $nomes[$indice + 1]; // exibe o nome Bruno
echo "</br>";

$cesta = [
	'banana' => 12,
	'laranja' => 6,
	'abacaxi' => 2
]; 

echo $cesta[$fruta]; // exibe o valor 12
echo "</br>";

$cesta[$nova_fruta] = 1; // adiciona o par 'melancia' => 1

echo $cesta[$nova_fruta];
echo "</br>";


?> 

<?php 
require 'fim.php';
?>