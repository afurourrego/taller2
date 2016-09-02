<?php 

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];

$num1 = (double)$num1;
$num2 = (double)$num2;
$num3 = (double)$num3;
$num4 = (double)$num4;

$importe = array($num1, $num2, $num3, $num4);

foreach ($importe as $importe)
{
	echo $importe."<br>";
}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>