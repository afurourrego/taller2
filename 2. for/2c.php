<?php 

$numFactorial= $_POST["numFactorial"];

$numFactorial = (int)$numFactorial;

$numeros = 1;
$multiplicador = $numFactorial;

for($numeros ; $numeros <$numFactorial ; $numeros++) {
	
	$multiplicador = $multiplicador*$numeros;
}

echo "El factorial de ".$numFactorial." es: ".$multiplicador;

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>