<?php
session_start();
$_SESSION["usuario"]="0";
header ("Location: index.php");
?>