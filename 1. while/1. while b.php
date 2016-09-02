<?php 

$numeros = 1;
$nSuma = 1;

while ($numeros <=100) {

	echo $numeros." + ".$nSuma." = ".($nSuma+$numeros)."<br>";
	$nSuma = $nSuma+$numeros;
	$numeros ++;

}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>