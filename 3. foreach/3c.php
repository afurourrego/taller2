<?php 

$numAleatorios1 = $_POST["numAleatorios1"];
$numAleatorios2 = $_POST["numAleatorios2"];
$numAleatorios3 = $_POST["numAleatorios3"];
$numAleatorios4 = $_POST["numAleatorios4"];
$numAleatorios5 = $_POST["numAleatorios5"];

$num1 = (int)$numAleatorios1;
$num2 = (int)$numAleatorios2;
$num3 = (int)$numAleatorios3;
$num4 = (int)$numAleatorios4;
$num5 = (int)$numAleatorios5;

$miArreglo = array($num1,$num2,$num3,$num4,$num5);

arsort($miArreglo);

foreach ($miArreglo as $miArreglo)
{
	echo $miArreglo."<br>";
}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>