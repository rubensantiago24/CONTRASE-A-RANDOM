<?php
class Registro
{
	public function registrar($documento, $nombre, $apellido, $clave, $codigo)
	{

	include("conexion.php");

	$sql = "INSERT INTO reg_usuarios (documento, nombre,apellido,clave,codigo) VALUES ('$documento', '$nombre', '$apellido', '$clave','$codigo')";

	if(!$result = $db->query($sql))
	{
		die ('hay un error corriendo en la consulta o datos no encontrados!!!  [' . $db->error . ']');
	}
	else{
        header("location: index");
	}



	}
	}



	$nuevo=new Registro();
	$nuevo->registrar($_POST["documento"], $_POST["nombre"],$_POST["apellido"],$_POST["clave"],$_POST["codigo"])
 

?>