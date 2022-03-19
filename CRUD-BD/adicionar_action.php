<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if($name && $email) {

    //$pdo->query("INSERT INTO usuarios (nome, email) VALUES ('$name', '$email')");

    //verifica se email esta cadastrado
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if( $sql->rowCount() === 0 ){//se nao encontrado registro

    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->execute();

    header("Location: index.php");
    exit;

    } else{
        header("Location: adicionar.php");
        exit;
    }
    
} else {
    header("Location: adicionar.php");
    exit;

}