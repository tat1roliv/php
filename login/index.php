
<?php
session_start();
require('header.php');

if isset($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>



<form method="post" action="recebedor.php">
    <label>Nome:
        </br>
        <input type="text" name="nome"/>
    </label>

    </br>
    </br>

    <label>Email:
        </br>
        <input type="text" name="email"/>
    </label>

    </br>
    </br>

    <label>Idade:
        </br>
        <input type="text" name="idade"/>
    </label>

    </br>
    </br>

    <input type="submit" value="Enviar"/>

</form>

<a href="apagar.php">Apagar cookie</a>




