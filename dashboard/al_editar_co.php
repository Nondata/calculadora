<?php 
session_start();
include ("./bd/conex.php");

$empresa = 1;
$codigo  = $_POST['codigo'];
$alumno = $_POST['alumno'];
$pregunta = $_POST['pregunta']; 
$respuesta = $_POST['respuesta']; 
$cual = $_POST['cual']; 


$query = "
UPDATE al_condicion
SET 
  fk_id_alumno = $alumno,
  fk_id_pregunta = $pregunta,
  fk_id_respuesta = $respuesta,
  cual = '$cual',
  fecha_actualza = now()
WHERE id_condicion = $codigo
";

$result = $conexion_sid -> query($query);
if ($result) {
    echo 1;
}else{
  $codigo = mysqli_errno($conexion_sid); 
  echo $codigo;
}
$conexion_sid->close();



?>





































































