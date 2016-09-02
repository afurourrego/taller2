<?php 

$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $_POST["num3"];
$d = $_POST["num4"];

$elArray[0][0] = $a ; 
$elArray[0][1] = $a*$a ; 
$elArray[0][2] = $a*$a*$a;
$elArray[0][3] = $a*$a*$a*$a;

$elArray[1][0] = $b ; 
$elArray[1][1] = $b*$b ;
$elArray[1][2] = $b*$b*$b ;
$elArray[1][3] = $b*$b*$b*$b ;

$elArray[2][0] = $c ; 
$elArray[2][1] = $c*$c ;
$elArray[2][2] = $c*$c*$c ;
$elArray[2][3] = $c*$c*$c*$c ;

$elArray[3][0] = $d ; 
$elArray[3][1] = $d*$d ;
$elArray[3][2] = $d*$d*$d ;
$elArray[3][3] = $d*$d*$d*$d ;


/*
$vInicial = array ($a, $b, $c, $d);
$vFinal = array ($a, $b, $c, $d);

for ($z=0; $z <=3 ; $z++) {

		for ($y=0; $y <=3 ; $y++) { 
			
			for ($x=0; $x <=3 ; $x++) {

				$elArray[$x][$y] = $vInicial[$x];

				$vInicial[$x] = $vInicial[$x] * $vFinal[$x];
			}

		}

	}

*/
	
for ($y=0; $y <=3 ; $y++) { 
			
			for ($x=0; $x <=3 ; $x++) { 

				echo $elArray[$x][$y]." - ";
			}
			echo "<br>";
		}


echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>