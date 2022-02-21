<?php

//https://www.php.net/manual/en/function.date.php

//01-01-1970
//time
echo time() . '</br>';


//date
echo date('d/m/Y') . '</br>';
echo date('d/m/y') . '</br>';
echo date('d/m/Y H:i:s') . '</br>';
echo date('Y-m-d') . '</br>';//padrao internacional

$data = '2021-09-21';

$time = strtotime($data);

echo date('d/m/Y', $time);




