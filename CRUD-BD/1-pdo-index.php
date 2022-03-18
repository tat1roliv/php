<?php
/*pdo lib classe*/
//$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host , $db_user , $db_pass);

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL: " . $sql->rowCount() . " linhas";

$dados = $sql->fetchAll( PDO::FETCH_ASSOC );
echo '<pre>';
print_r($dados);

