<?php 
session_start();
?>
<form action="recebedor.php" method="post">
    <label for="nome">
        Qual seu nome?
        <input type="text" name="nome" id="nome">
    </label>
    <input type="submit" value="Salvar">
</form>