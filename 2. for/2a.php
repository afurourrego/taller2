<?php 

$numeros = 1;
$nSuma = 1;

for($numeros ; $numeros <=100 ; $numeros++) {

	echo $numeros." + ".$nSuma." = ".($nSuma+$numeros)."<br>";
	$nSuma = $nSuma+$numeros;
	

}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";


 ?>