<?php 

//funcoes
function subsequente(){
    for ($i=0; $i<10 ; $i++){
        echo $i . '</br>';
    }
}
subsequente();




//params
function somar($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}
echo 'total:' . somar(10,5) . '</br>' ;





//params default
function multiplicar($n1, $n2, $n3 = 1){
    $total = $n1 * $n2 * $n3;
    return $total;
}
echo 'total:' . multiplicar(10,5) . '</br>' ;
echo 'total:' . multiplicar(10,5,2) . '</br>' ;






//params tipado
function multiplicarTipado(int $n1, int $n2, int $n3 = 1){
    $total = $n1 * $n2 * $n3;
    return $total;
}
echo 'total:' . multiplicar(10,5) . '</br>' ;
echo 'total:' . multiplicar(10,5.55) . '</br>' ;
//echo 'total:' . multiplicar(10,5.55,'ada') . '</br>' ;






//params referencia x valor
//valor
echo 'total:' . somar(10,5) . '</br>' ;
$param1 = 1;
$param2 = 2;

$somaParams =  somar($param1 , $param2);
echo 'total:' . $somaParams . '</br>' ;

//referencia
function somarComReferencia($n1, $n2, &$totalEdit){
    $totalEdit = $n1 + $n2;
}
$param1Edit = 1;
$param2Edit = 2;
$somaEdit = 0;

$somaParamsEdit =  somar($param1Edit , $param2Edit, $somaEdit );
echo 'total:' . $somaParamsEdit . '</br>' ;







//funcao anonima
$percentual = function(int $valor){
    return $valor * 0.25 . '</br>';
};

echo $percentual(90);

$desconto = $percentual;

echo $desconto (80);







//arrow function
$percentualDezPorCento = fn(int $valor) => $valor * 0.1 . '</br>';

echo $percentualDezPorCento(99);







//recursividade
function dividir($numero){
    $metade = $numero/2;
    echo $metade . '</br>';
    
    if(round($metade) > 0){
        dividir($metade);
    }
    return $metade;
}

dividir(100);








//funcoes nativas
$lista = [10 , 1 , 111 ];

print_r($lista);

sort($lista);

print_r($lista);








