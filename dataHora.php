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



//ex
function weekDay($date) {
    $day = date('l', strtotime($date));
    switch($day) {
        case 'Sunday':
            return 'Domingo';
            break;
        case 'Monday':
            return 'Segunda-Feira';
            break;
        case 'Tuesday':
            return 'Terça-Feira';
            break;
        case 'Wednesday':
            return 'Quarta-Feira';
            break;
        case 'Thursday':
            return 'Quinta-Feira';
            break;
        case 'Friday':
            return 'Sexta-Feira';
            break;
        case 'Saturday':
            return 'Sábado';
            break;
    }
}
$date = '2022-01-17';
echo weekDay($date);