<?php
session_start();
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if ($nome) {   
    $_SESSION['nome'] = $nome;
    exit(header("Location: index.php"));
}else {
    exit(header("Location: login.php"));
}