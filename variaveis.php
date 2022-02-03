<?php 
echo 'hola' ."</br>";


$x = 10 ;

echo $x ."</br>";
echo $x+2 ."</br>"; 

$number = 99;
$name = 'ada';
$booleano = true;
$booleano2 = false;
$vazio = null;
$stringvazia = '';


echo $number.$name.$booleano ."</br>"; //concatenacao
//echo $booleano2;
//echo $vazio;

$frase = " concatenando $name e $number";
echo $frase ."</br>";

$x = '3';
$y = 4;

$w = $x+$y;//return 7

echo $w ."</br>";


$nome = 'adinha';
$sobrenome = 'silva';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome; // . + - * /
echo $nomeCompleto ."</br>";


//array
$listaItens = [ '-item 1', '-item 2', '-item 3'];
//echo $listaItens;
echo $listaItens[0] ."</br>";









