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


$aTest = [ 'a', 'b'];

$aTestSpread = [ 
    ...$aTest,
    'c'
];
echo $aTestSpread[2] ."</br>";
print_r($aTestSpread)."</br>";


$idade = 999;
if($idade < 18){
    echo  'a' ."</br>";
} else {
    echo 'b' ."</br>";
}

$idade2 = 9;
echo ( $idade2 < 18 ) ? 'a' : 'b' ;

$menorIdade = ( $idade2 < 18 ) ? true : false ;

if($menorIdade) {
    echo 'menor'."</br>";
} else {
    echo 'maior'."</br>";
}










