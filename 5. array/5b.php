<?php 

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$num1 = (int)$num1;
$num2 = (int)$num2;

$num3 = $num1*$num2;

$numbin = decbin($num3);

echo $num3." en binario es: ".$numbin;


echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>