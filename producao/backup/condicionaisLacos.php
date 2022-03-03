<?php

//if else
$idade = 99;
if ($idade >= 18) {
	echo 'Você é maior de idade';
} else if ($idade >= 16) {
	echo 'Você é menor de idade, mas pode votar';
} else {
	echo 'Você é menor de idade e não pode votar';
}



echo '</br>';



//switch case
$status = 3;
switch ($status) {
	case 0:
			echo 'Aguardando confirmação';
	break;
	case 1:
			echo 'Sendo preparado';
	break;
	case 2:
			echo 'A caminho';
	break;
	case 3:
			echo 'Entregue';
	break;
		default: // caso não se encaixe em nenhuma outra
			echo 'Desconhecido';
		break;
	}



echo '</br>';



//while
$ano = 1984;
while ($ano <= 2020) {
	$idade = $ano-1984;
	echo "<p>Sua idade era $idade em $ano</p>";
	$ano++;
}



echo '</br>';



//for
for ($ano2 = 2004; $ano2 <= 2020; $ano2++) {
	$idade2 = $ano2-2004;
	echo "<p>Sua idade era $idade2 em $ano2</p>";
}