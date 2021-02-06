<?php

class Login
{
public function iniciar($documento, $clave)

{
session_start();
include ("conexion.php");

$cont="0";
$_SESSION["usuario"]="0";
$sql = "SELECT * FROM reg_usuarios WHERE documento='$documento' AND clave='$clave'";
if (!$resultado = $db->query($sql))
{
die ('Hay un error corriendo en la consulta o datos no encontrados [' . $db->error . ']');
}
while ($row = $resultado->fetch_assoc())
{

$cont=$cont+1;

}

if ($cont!="0")
{
$_SESSION["usuario"]="1";
$_SESSION["documento_actual"]=$documento;
header("Location:usuarios.php");
}

if ($cont=="0")
{
header("Location:index.html");
}


}
}


$nuevo=new Login();
$nuevo->iniciar($_POST["documento"],$_POST["clave"]);

?>