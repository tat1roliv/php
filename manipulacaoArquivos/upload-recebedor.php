<?php
echo '<pre>';
print_r($_FILES);/*name type tmp_name error size*/

$extensoesPermission = ['image/jpeg', 'image/jpg','image/png'];

if(in_array($_FILES['arquivo']['tmp_name'], $extensoesPermission)){
    $nomeArquivoUpload = md5(time().rand(0,100)).'jpg';
    //$nomeArquivoUpload = $_FILES['arquivo']['name'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'folder/'.$nomeArquivoUpload );
    echo 'Arquivo enviado!';
} else {
    echo 'Arquivo invalido.';
}
