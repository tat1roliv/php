<h1>resultados titulo</h1>

<p>resultados...</p>

<?php
if(isset($_POST['nome_usuario'])){
    echo '<h2>Olá, ' . $_POST['nome_usuario'] . '<h2>';
}
?>