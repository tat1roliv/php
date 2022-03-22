<?php
$texto = file_get_contents('texto.txt');
echo $texto;

$texto = explode("\n", $texto);
echo "<br><br>linhas: ". count($texto);
//print_r($texto);