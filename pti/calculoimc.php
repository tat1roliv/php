
<?php
session_start();
?>

<p>Seu resultado: </p>

<?php

$alturaInformada = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);
$pesoInformado = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);

//FILTER_SANITIZE_NUMBER_FLOAT
//FILTER_VALIDATE_FLOAT
//$nomeEdit = str_replace('da', 'na', $nome);

function calculaIMC($altura, $peso){
    $imc = $peso / ($altura * $altura);
    return round($imc,2);
}

$imcCalculado = calculaIMC($alturaInformada, $pesoInformado);

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

$imcCalculado = calculaIMC($alturaInformada, $pesoInformado);


if($alturaInformada  && $pesoInformado ){

    echo 'Altura informada: ' . $alturaInformada .' metros.'.'</br>';
    echo 'Peso informado: ' . $pesoInformado .' kg.'.'</br>';
    echo 'Seu IMC calculado:'. $imcCalculado  .'</br>';
    calculaFaixaImc($imcCalculado);

} else {
    $_SESSION['aviso'] = 'Preencha os dados corretamente! ' . '</br>';
       header("Location: index.php");
    exit;
}




