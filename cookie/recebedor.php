
<?php
session_start();
?>

<p>recebedor</p>

<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);


if($nome){

    $expiracookie = time() + (86400*30);//30dias
    setcookie('nomeCookie', $nome,  $expiracookie );

    echo 'nome:' . $nome .'</br>';
    echo 'email:' . $email .'</br>';
    echo 'idade:' . $idade .'</br>';
} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente! .</br>';
       header("Location: index.php");//header=> deve ser o primeiro dado
    exit;
}




