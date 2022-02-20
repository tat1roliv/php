<?php 

//funcoes nativas
$num = -8.4;

echo abs($num) . '</br>';//valor absoluto

echo pi() . '</br>';//pi
echo round(pi(), 2) . '</br>';

$number = 2.755555444332211;
echo floor($number) . '</br>';//2.0
echo ceil($number) . '</br>';//3.0
echo round($number) . '</br>'; //3.0
echo round($number, 2) . '</br>'; //2.76


$aleatorio = rand(0, 1000);
echo $aleatorio . '</br>'; 


$lista = [1,4,9,8];

echo max($lista);//9
echo min($lista);//1

//math functions
//https://www.php.net/manual/en/ref.math.php




