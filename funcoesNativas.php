<?php 

//funcoes nativas

//math functions
//https://www.php.net/manual/en/ref.math.php
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

echo max($lista) . '</br>'; ;//9
echo min($lista) . '</br>'; ;//1



//string functions
//https://www.php.net/ref.strings

$nome = '  ada  ';

echo strlen($nome) . '</br>'; //7 string.length
echo strlen(trim($nome)) . '</br>'; //3
echo trim($nome) . '</br>'; //ada

echo strtolower($nome) . '</br>'; //ada
echo strtoupper($nome) . '</br>';//ADA

$nomeEdit = str_replace('da', 'na', $nome);
echo $nomeEdit . '</br>';//ana


$nomeCompleto = 'ada maria silva';
$nome2 = substr($nomeCompleto, 0, 3);//ada
echo $nome2 . '</br>';

$nome3 = substr($nomeCompleto, 10,5) . '</br>';//silva
echo $nome3 . '</br>';
echo substr($nomeCompleto, -5,5) . '</br>';//silva



$posicao = strpos($nomeCompleto, 'v');
echo $posicao . '</br>';

$pos = strpos($nomeCompleto, 'adi');
echo $pos . '</br>';










