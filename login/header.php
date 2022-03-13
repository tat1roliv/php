
<?php
?>

<h1>titulo</h1>


<?php
if(isset($_COOKIE['nomeCookie'])){
    $nome = $_COOKIE['nomeCookie'];
    echo '<h2>'.$nome.'</h2>';
}