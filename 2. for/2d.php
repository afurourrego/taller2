<?php 

$limitFibonacci= $_POST["limitFibonacci"];

$limitFibonacci = (int)$limitFibonacci;

$num1= 1;
$num2= 0;

for($num2 ; $num2 <= $limitFibonacci ; ) {

	$suma=$num1+$num2;
	$num1=$num2;
	$num2=$suma;
	echo $suma." ";
}
echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>