
<?php
session_start();
?>

<p>Seu resultado: </p>

<?php

$alturaInformada = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);
$pesoInformado = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);

//FILTER_SANITIZE_NUMBER_FLOAT
//FILTER_VALIDATE_FLOAT
//str_replace(',', '.',string,count)


function calculaIMC($altura, $peso){
    $imc = $peso / ($altura * $altura);
    return round($imc,2);
}

$imcCalculado = calculaIMC($alturaInformada, $pesoInformado);

if($alturaInformada  && $pesoInformado ){

    echo 'Altura informada: ' . $alturaInformada .' metros.'.'</br>';
    echo 'Peso informado: ' . $pesoInformado .' kg.'.'</br>';
    echo 'Seu IMC calculado:'. $imcCalculado  .'</br>';

    if ($imcCalculado <= 18.5){
        echo 'Magreza';
    } else if ($imcCalculado >= 18.51 && $imcCalculado < 24.9 ){
        echo 'Saudável';
    } else if ($imcCalculado >= 25.0 && $imcCalculado < 29.9 ){
        echo 'Sobrepeso';
    } else if ($imcCalculado >= 30.0 && $imcCalculado < 34.9 ){
        echo 'Obesidade Grau I';
    } else if ($imcCalculado >= 35.0 && $imcCalculado < 39.9 ){
        echo 'Obesidade Grau II';
    } else {
        echo 'Obesidade Grau III';
    }

} else {
    $_SESSION['aviso'] = 'Preencha os dados corretamente! ' . '</br>';
       header("Location: index.php");
    exit;
}




