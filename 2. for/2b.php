<?php 

$numMultiplica= $_POST["numMultiplica"];

$numMultiplica = (int)$numMultiplica;

$numeros = 1;


for($numeros ; $numeros <=20 ; $numeros++) {

	echo $numeros." x ".$numMultiplica." = ".($numMultiplica+$numeros)."<br>";
	$numMultiplica = $numMultiplica+$numeros;
	

}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>