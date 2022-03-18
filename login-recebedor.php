<?php

if(!empty($_POST['nome']) && !empty($_POST['senha'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    if ($nome== 'admin' && $senha=='1234'){
        echo 'admin login';
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}