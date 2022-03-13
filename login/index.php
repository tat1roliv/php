<?php 
session_start();
echo 'Olá, '.($_SESSION['nome']  ?? exit(header("Location: login.php"))).' - <a href="sair.php">sair</a>';
?>