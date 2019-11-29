<?php
	$con=mysqli_connect('localhost','root','','formulario') or die('FALLO EN LA CONEXION SERVIDOR');
	$sql="INSERT INTO datos 
	VALUES(null,'".$_POST["nombre"]."','".$_POST["apellidoP"]."','".$_POST["apellidoM"]."','".$_POST["direccion"]."','".$_POST["edad"]."','".$_POST["sexo"]."')";

	$resultado=mysqli_query($con,$sql) or die ('ERROR EN EL QUERY DE DATABASE');
	mysqli_close($con);

	echo 'Nombre:'.$_POST["nombre"]. '<br/>';
	echo 'Apellido Paterno:'.$_POST["apellidoP"]. '<br/>';
	echo 'Apellido Materno:'.$_POST["apellidoM"]. '<br/>';
	echo 'Direccion:'.$_POST["direccion"]. '<br/>';
	echo 'Edad:'.$_POST["edad"]. '<br/>';
	echo 'Sexo:'.$_POST["sexo"].'<br/>';


?>