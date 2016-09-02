<?php 

$numRaiz = $_POST["numRaiz"];

$numRaiz = (float)$numRaiz;


function raiz_cuadrada($numRaiz)
{
	return sqrt($numRaiz);
}


echo "La raiz cuadrada de ".$numRaiz." es: ".raiz_cuadrada($numRaiz);

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>