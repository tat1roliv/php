
<?php
?>

<p>recebedor</p>

<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);//sanitize
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

/*
FILTER_VALIDATE_EMAIL($email)
FILTER_VALIDATE_INT($idade);
FILTER_VALIDATE_FLOAT($idade);
FILTER_VALIDATE_IP();
FILTER_VALIDATE_URL();

FILTER_SANITIZE_EMAIL($email)
FILTER_SANITIZE_STRING();
FILTER_SANITIZE_SPECIAL_CHARS();
FILTER_SANITIZE_NUMBER_FLOAT();
*/



//filter_var
//$sobrenome = 'Silva';
//filter_var($sobrenome, ...);

if($nome){
    echo 'nome:' . $nome .'</br>';
    echo 'email:' . $email .'</br>';
    echo 'idade:' . $idade .'</br>';
} else {
    //echo 'dados não informados.' . '</br>';
    header("Location: index.php");//header=> deve ser o primeiro dado
    exit;
}




