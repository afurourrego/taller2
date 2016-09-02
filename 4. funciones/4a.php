<?php 

$numUsuario = $_POST["numUsuario"];
$numPotencia = $_POST["numPotencia"];

$numUsuario = (int)$numUsuario;
$numPotencia = (int)$numPotencia;

function potencia($datoUsuario, $datoPotencia)
{
	$resultado = 1;
	for ($contador=1; $contador <= $datoPotencia ; $contador++)
	{ 
		$resultado = $resultado*$datoUsuario;
	}
	return $resultado;
}


echo "El resultado de la potencia es: ".potencia($numUsuario, $numPotencia);

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>