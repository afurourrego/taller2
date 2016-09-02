<?php

require("4c.php");

$num1 = "";
$num2 = "";
$opcion = "";
$resultado = "";
 
	if(isset($_POST["opcion"]))
	{
		if(!empty($_POST["opcion"]))
		{
			$opcion = trim($_POST["opcion"]);
		}
}

if(isset($_POST["num1"]))
	{
		if(trim($_POST["num1"]) != "")
		{
			$num1 = intval($_POST["num1"], 10);
		}
	}
 
	if(isset($_POST["num2"]))
	{
		if(trim($_POST["num2"]) != "")
		{
			$num2 = intval($_POST["num2"], 10);
		}
	}
 



switch ($opcion) 
{
	case '+':
		$resultado = sumar ($num1, $num2);
		break;

	case '-':
		$resultado = restar ($num1, $num2);
		break;

	case '*':
		$resultado = multiplicar ($num1, $num2);
		break;

	case '/':
		$resultado = dividir ($num1, $num2);
		break;
	
	default:
		$resultado = "";
		break;
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1 align="center">CALCULADORA</h1>

<form action="4cc.php" method="POST">

	<table border="0" align="center" width="500px">
	<tr>
	<td align="center">

		<input type="text" name="num1" value="<?php echo $num1; ?>" size ="10" class="inputText" required="" >
		
		<input type="text" name="opcion" value="<?php echo $opcion; ?>" size ="10" class="inputText" required="" placeholder="Operador">

		<input type="text" name="num2" value="<?php echo $num2; ?>" size ="10" class="inputText" required="">
		=
		<input type="text" name="numResult" value="<?php echo $resultado; ?>" class="inputText" size ="10">
	
		<br><br>	
		<input type="submit" name="enviar" value="calcular" class="inputSubmit" >

		<br><button><a href='../index.html'> Volver Inicio </a></button>
	</td>
	</tr>
	</table>
</form>

</body>
</html>
















<?php

/*

<?php

require("4c.php");

$num1 = "";
$num2 = "";
$opcion = "";
$resultado = "";

 
	if(isset($_POST["opcion"]))
	{
		if(!empty($_POST["opcion"]))
		{
			$opcion = trim($_POST["opcion"]);
		}
		else
		{
		}
}

if(isset($_POST["num1"]))
	{
		if(trim($_POST["num1"]) != "")
		{
			$num1 = intval($_POST["num1"], 10);
		}
		else
		{
		}
	}
 
	if(isset($_POST["num2"]))
	{
		if(trim($_POST["num2"]) != "")
		{
			$num2 = intval($_POST["num2"], 10);
		}
		else
		{
		}
	}


switch ($opcion) 
{
	case '1':
		$resultado = sumar ($num1, $num2);
		break;

	case '2':
		$resultado = restar ($num1, $num2);
		break;

	case '3':
		$resultado = multiplicar ($num1, $num2);
		break;

	case '4':
		$resultado = dividir ($num1, $num2);
		break;
	
	default:
		$resultado = "";
		break;
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1 align="center">CALCULADORA</h1>
<form action="4cc.php" method="POST">
	<table border="0" align="center" width="400px">
	<tr>
	<td align="center">
		<input type="text" name="num1" value="<?php echo $num1; ?>" size ="10" class="inputText" required="">
		<input type="text" name="num2" value="<?php echo $num2; ?>" size ="10" class="inputText" required="">
		=
		<input type="text" name="resultado" value="<?php echo $resultado; ?>" class="inputText" size ="10">
	</td>
	</tr>
	</table>
</form>

<br><br>

<table border="0" align="center" width="400px">
<tr>
<td align="center">

<form action="4cc.php" method="POST">
			<input type="hidden" name="opcion" value="<?php $opcion="1"; ?>" class="inputHidden">
			<input type="submit" name="enviar" value="  +  " class="inputSubmit" >
</form>

<form action="4cc.php" method="POST">
			<input type="hidden" name="opcion" value="<?php $opcion="2"; ?>" class="inputHidden">
			<input type="submit" name="enviar" value="  -  " class="inputSubmit" >
</form>

<form action="4cc.php" method="POST">
			<input type="hidden" name="opcion" value="<?php $opcion="3"; ?>" class="inputHidden">
			<input type="submit" name="enviar" value="  *  " class="inputSubmit" >
</form>

<form action="4cc.php" method="POST">
			<input type="hidden" name="opcion" value="<?php $opcion="4"; ?>" class="inputHidden">
			<input type="submit" name="enviar" value="  /  " class="inputSubmit" >
</form>

</td>
</tr>
</table>

</body>
</html>

*/
?>