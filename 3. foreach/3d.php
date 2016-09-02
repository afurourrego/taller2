<?php 

$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$nombre3 = $_POST["nombre3"];
$nombre4 = $_POST["nombre4"];
$nombre5 = $_POST["nombre5"];

$miArreglo = array($nombre1,$nombre2,$nombre3,$nombre4,$nombre5);

foreach ($miArreglo as $miArreglo)
{
	echo $miArreglo."<br>";
}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>