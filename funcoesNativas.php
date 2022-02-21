<?php 

//funcoes nativas

//math functions
//https://www.php.net/manual/en/ref.math.php
$num = -8.4;

//abs
echo abs($num) . '</br>';//valor absoluto


//print
echo pi() . '</br>';//pi


//round
echo round(pi(), 2) . '</br>';


//ceil floor round
$number = 2.755555444332211;
echo floor($number) . '</br>';//2.0
echo ceil($number) . '</br>';//3.0
echo round($number) . '</br>'; //3.0
echo round($number, 2) . '</br>'; //2.76



//random
$aleatorio = rand(0, 1000);
echo $aleatorio . '</br>'; 


//max min
$lista = [1,4,9,8];

echo max($lista) . '</br>'; ;//9
echo min($lista) . '</br>'; ;//1



//string functions
//https://www.php.net/ref.strings

$nome = '  ada  ';


//str length
echo strlen($nome) . '</br>'; //7 string.length
echo strlen(trim($nome)) . '</br>'; //3
echo trim($nome) . '</br>'; //ada


//lowercase uppercase
echo strtolower($nome) . '</br>'; //ada
echo strtoupper($nome) . '</br>';//ADA


//replace
$nomeEdit = str_replace('da', 'na', $nome);
echo $nomeEdit . '</br>';//ana


//substring
$nomeCompleto = 'ada maria silva';
$nome2 = substr($nomeCompleto, 0, 3);//ada
echo $nome2 . '</br>';

$nome3 = substr($nomeCompleto, 10,5) . '</br>';//silva
echo $nome3 . '</br>';
echo substr($nomeCompleto, -5,5) . '</br>';//silva


//str pos
$posicao = strpos($nomeCompleto, 'v');
echo $posicao . '</br>';

$pos = strpos($nomeCompleto, 'ada');
echo $pos . '</br>';

if ($pos > -1){
    echo 'contem'. '</br>';
} else {
    echo 'nao contem'. '</br>';
}


//ucwords
echo ucwords($nomeCompleto). '</br>';


//explode
$nomes = explode(' ', $nomeCompleto);
print_r($nomes);


//nums
$numberF = 126548.78954;

echo '</br>'. 'R$' . number_format($numberF, 2, ','). '</br>';




//array
$listaNomes = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5' , 'nome6'];
$aprovados = ['nome1', 'nome3'];


//array_diff
$reprovados = array_diff($lista, $aprovados);
print_r($reprovados);
echo'</br>';


//count
echo 'total : '.count($lista). '</br>';



//array_filter
$numerales = [10,20,30,40,50,99];
$numeralesFiltrados = array_filter($numerales, function($item){ 

    if($item > 50){
        return true;
    }
    return false;
});

print_r($numeralesFiltrados);
echo'</br>';



//array_map
$dobro = array_map(function($item){
    return $item * 2;
}, $numerales);

print_r($dobro);
echo'</br>';














