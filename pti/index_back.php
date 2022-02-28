
<?php
session_start();

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<h1>Descubra seu IMC</h1>

<p>Digite os datos solicitados a seguir: </p>

<form method="post" action="calculoimc.php">
    
    <label>Altura (metros):
        </br>
        <input type="text" name="altura" placeholder="0.00"/>
    </label>

    </br>
    </br>

    <label>Peso (kg):
        </br>
        <input type="text" name="peso" placeholder="0.00"/>
    </label>

    </br>
    </br>

    <input type="submit" value="Enviar"/>

</form>





