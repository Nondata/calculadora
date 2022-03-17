<?php
// conexion a la base de datos bd_arca
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "bd_sideral";

	$conexion_sid = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion_sid){
		die('Error de Conexion: ' . mysqli_connect_errno());
	}
       //$conexion->set_charset("utf8");
       
       //$conexion->set_charset("SET NAMES 'utf8'");
       @mysqli_query($conexion_sid, "SET NAMES 'utf8'");

?>
