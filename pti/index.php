<?php
session_start();
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<h1>Descubra sua classificação de Índice de Massa Corporal - IMC</h1>
<p>Digite os datos solicitados a seguir: </p>

<form method="post" action="calculoimc.php">  
    <label>IMC:
        <input type="text" name="imc" placeholder="00.00"/>
    </label>
    </br></br>
    <input type="submit" value="Enviar"/>
</form>
