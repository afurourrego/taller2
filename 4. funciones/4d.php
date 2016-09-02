<?php 

$a1 = $_POST["a1"];
$a2 = $_POST["a2"];
$b1 = $_POST["b1"];
$b2 = $_POST["b2"];
$opcion = $_POST["opcion"];

$a1 = (int)$a1;
$a2 = (int)$a2;
$b1 = (int)$b1;
$b2 = (int)$b2;
$opcion = (int)$opcion;


switch ($opcion) {
	case 1:
	{

		if ($a2 == $b2) 
		{
			$numerador = $a1+$b1;
			$denominador = $a2;

			echo $numerador."<br>---<br>".$denominador;
		}else{

			$numerador = ($a1*$b2)+($a2*$b1);
			$denominador = $a2*$b2;

			echo $numerador."<br>---<br>".$denominador;

		}

		break;
	}
	

	case 2:
	{
		
		if ($a2 == $b2) 
		{
			$numerador = $a1-$b1;
			$denominador = $a2;
		
			echo $numerador."<br>---<br>".$denominador;
		}else{
			
			$numerador = ($a1*$b2)+($a2*$b1);
			$denominador = $a2*$b2;

			echo $numerador."<br>---<br>".$denominador;
		}

		break;
	}


	case 3:
	{
		
		$numerador = $a1*$b1;
		$denominador = $a2*$b2;
		
			echo $numerador."<br>---<br>".$denominador;

		break;
	}


	case 4:
	{
		
		$numerador = $a1*$b2;
		$denominador = $a2*$b1;
		
			echo $numerador."<br>---<br>".$denominador;

		break;
	}



	default:
		break;
}

echo "<br><button><a href='../index.html'> Volver Inicio </a></button>";

 ?>