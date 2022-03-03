<?php
session_start();
if($_SESSION['mensagemErro']){
    echo $_SESSION['mensagemErro'];
    $_SESSION['mensagemErro'] = '';
}
?>

<span style="color:#bbb;">PROGRAMA PTI</span>
<h1>Descubra sua classificação de IMC - Índice de Massa Corporal</h1>
<p>Digite os datos solicitados a seguir: </p>

<form method="post" action="calculoimc.php">  
    <label>IMC:
        <input type="text" name="imc" placeholder="99.99"/>
    </label>
    </br></br>
    <input type="submit" value="Enviar"/>
</form>
