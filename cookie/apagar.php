
<?php

setcookie('nomeCookie', '',  time()-3600 );//1min

header("Location: index.php");
exit;
?>




