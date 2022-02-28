
<?php
session_start();
?>

<p>Seu resultado: </p>

<?php

$imcInformado = filter_input(INPUT_POST, 'imc', FILTER_VALIDATE_FLOAT);
round($imcInformado,2);

function calculaFaixaImc($imc){

    if ($imc <= 18.5){
        echo 'Faixa no IMC: Magreza';
    } else if ($imc >= 18.51 && $imc < 24.9 ){
        echo 'Faixa no IMC: Saudável';
    } else if ($imc >= 25.0 && $imc < 29.9 ){
        echo 'Faixa no IMC: Sobrepeso';
    } else if ($imc >= 30.0 && $imc < 34.9 ){
        echo 'Faixa no IMC: Obesidade Grau I';
    } else if ($imc >= 35.0 && $imc < 39.9 ){
        echo 'Faixa no IMC: Obesidade Grau II';
    } else {
        echo 'Faixa no IMC: Obesidade Grau III';
    }  
}

$imcArray  = [
    'Até 18.5' => 'Magreza' ,
    'De 18.51 a 24.9' =>'Saudável' ,
    'De 25.0 a 29.9 ' =>'Sobrepeso',
    'De 30.0 a 34.9'=> 'Obesidade Grau I' ,
    'De 35.0 a 39.9' => 'Obesidade Grau II' ,
    'Acima de 39.9 ' => 'Obesidade Grau III' ,
]; 

$faixaImc = calculaFaixaImc($imcInformado);



echo $faixaImc;
    //echo $cesta[$fruta]; // exibe o valor 12



if($imcInformado){
    
    echo 'Seu IMC informado: ' . $imcInformado .' .'.'</br>';
    //echo calculaFaixaImc($imcInformado);
    

} else {
    $_SESSION['aviso'] = 'Preencha os dados corretamente! ' . '</br>';
       header("Location: index.php");
    exit;
}


/*
$imcInt ='';
$imcArray  = [
	'Até 18.5' => 'Magreza' ,
	'De 18.51 a 24.9' =>'Saudável' ,
	'De 25.0 a 29.9 ' =>'Sobrepeso',
    'De 30.0 a 34.9'=> 'Obesidade Grau I' ,
    'De 35.0 a 39.9' => 'Obesidade Grau II' ,
    'Acima de 39.9 ' => 'Obesidade Grau III' ,
]; 
*/





