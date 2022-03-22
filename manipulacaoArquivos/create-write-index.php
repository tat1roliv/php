<?php

//cria e insere
$texto = 'ada';

file_put_contents('nome.txt', $texto);

echo 'arquivo criado!';


//insere em existente
$txt = file_get_contents('texto.txt');
$txt .= "\n Texto adicionoado.";

file_put_contents('texto.txt', $texto);
