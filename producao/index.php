<?php
session_start();
if(isset($_SESSION['mensagemErro'])){
    echo $_SESSION['mensagemErro'];
    $_SESSION['mensagemErro'] = '';
}
?>
<style>
    *{ font-family:courier; color: #465866;}  
    span{color:tomato; text-transform:uppercase; font-weight:bold; text-decoration:underline;} 
</style>
<span>PROGRAMA PTI</span>
<h1>Calcula IMC</h1>
<p>Para saber qual sua classificação de <strong>Índice de Massa Corporal-IMC</strong>, digite o dato solicitado a seguir: </p>

<form method="post" action="calculoimc.php">  
    <label>IMC:
        <input type="text" name="imc" placeholder="99.99"/>
    </label>
    </br></br>
    <input type="submit" value="Enviar"/>
</form>
