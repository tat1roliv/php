
<?php
session_start();
?>
<p>Seu resultado: </p>
<?php
$imcInformado = filter_input(INPUT_POST, 'imc', FILTER_VALIDATE_FLOAT);
round($imcInformado,2);

$imcArray  = [
    'Até 18.5' => 'Magreza' ,
    'De 18.51 a 24.9' =>'Saudável' ,
    'De 25.0 a 29.9' =>'Sobrepeso',
    'De 30.0 a 34.9'=> 'Obesidade Grau I' ,
    'De 35.0 a 39.9' => 'Obesidade Grau II' ,
    'Acima de 39.9' => 'Obesidade Grau III' ,
]; 

$chave = '';

function calculaFaixaImc($imc){
    if ($imc <= 18.5){
        $chave = 'Até 18.5';
    } else if ($imc >= 18.51 && $imc < 24.9 ){
        $chave = 'De 18.51 a 24.9';
    } else if ($imc >= 25.0 && $imc < 29.9 ){
        $chave =  'De 25.0 a 29.9';
    } else if ($imc >= 30.0 && $imc < 34.9 ){
        $chave = 'De 30.0 a 34.9';
    } else if ($imc >= 35.0 && $imc < 39.9 ){
        $chave =  'De 35.0 a 39.9';
    } else {
        $chave = 'Acima de 39.9';
    }  
    return $chave;
};

$faixaImc = calculaFaixaImc($imcInformado);

if($imcInformado){
    echo 'Atenção, seu IMC é: <strong><u>'. $imcInformado .'</u></strong>, e você está classificado como <strong><u>'. $imcArray[$faixaImc].'</u></strong>.'.'</br>';       
} else {
    $_SESSION['aviso'] = 'Preencha os dados corretamente! ' . '</br>';
       header("Location: index.php");
    exit;
}