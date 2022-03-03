<?php 
require_once 'inicio.php';
?>

<h1>for each</h1>

<?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];?>

<p>exemplo 1</p>
<ul>
	<li><?php echo $nomes[0] ?> </li>
	<li><?php echo $nomes[1] ?> </li>
	<li><?php echo $nomes[2] ?> </li>
	<li><?php echo $nomes[3] ?> </li>
	<li><?php echo $nomes[4] ?> </li>
</ul>

<p>exemplo escalavel</p>
<ul>
	<?php for($i = 0; $i < 5; $i++){
		echo "<li>$nomes[$i]</li>";
}?>
</ul>


<p>for each</p>
<?php
foreach ($nome_da_array as $valor){
	echo $valor;	
//...
}

foreach ($nome_da_array as $chave => $valor){
	echo $chave . ' - ' . $valor;
	//...
}
?>

<ul>
	<?php foreach($nomes as $nome){
		echo "<li>$nome</li>";
}?>
</ul>

<p>ex livro</p>

<?php $cesta = [
	'banana' => 12,
	'laranja' => 6,
	'abacaxi' => 2
]; ?>

<ul>
	<?php foreach($cesta as $chave => $valor){
		echo "<li>$valor unidade(s) de $chave</li>";
}?>
</ul>


<?php 
require 'fim.php';
?>