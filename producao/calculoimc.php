<?php
session_start();
?>
<style>
    *{ font-family:courier; color: #465866;}  
    span{color:tomato; text-transform:uppercase; font-weight:bold; text-decoration:underline;} 
</style>
<span>PROGRAMA PTI</span>
<h1>Calcula IMC</h1>
<?php

$imcInput = filter_input(INPUT_POST, 'imc', FILTER_VALIDATE_FLOAT);

$tabelaIMC  = [
    'Até 18.5' => 'Magreza' ,
    'De 18.51 a 24.9' =>'Saudável' ,
    'De 25.0 a 29.9' =>'Sobrepeso',
    'De 30.0 a 34.9'=> 'Obesidade Grau I' ,
    'De 35.0 a 39.9' => 'Obesidade Grau II' ,
    'Acima de 39.9' => 'Obesidade Grau III' ,
]; 

$key = '';

function calculaIMC($imc){
    if ($imc <= 18.5){
        $key = 'Até 18.5';
    } else if ($imc >= 18.51 && $imc < 24.9 ){
        $key = 'De 18.51 a 24.9';
    } else if ($imc >= 25.0 && $imc < 29.9 ){
        $key =  'De 25.0 a 29.9';
    } else if ($imc >= 30.0 && $imc < 34.9 ){
        $key = 'De 30.0 a 34.9';
    } else if ($imc >= 35.0 && $imc < 39.9 ){
        $key =  'De 35.0 a 39.9';
    } else {
        $key = 'Acima de 39.9';
    }  
    return $key;
};

$faixaImcKey = calculaIMC($imcInput);

if($imcInput){
    echo 'Seu resultado: atenção, seu IMC é: <span>'. round($imcInput , 2) .'</span>, e você está classificado como <span>'. $tabelaIMC[$faixaImcKey].'</span>.'.'</br>';       
} else {
    $_SESSION['mensagemErro'] = 'Dados inválidos. Informe os dados corretamente. ' . '</br>';
       header("Location: index.php");
    exit;
}
