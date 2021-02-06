<?php
session_start();
if ($_SESSION["usuario"]!="0")
{
	header ("Location:salir.php");
}
?>