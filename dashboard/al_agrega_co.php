<?php 
session_start();
include ("./bd/conex.php");

$empresa = 1;
$codigo  = $_POST['codigo'];
$alumno = $_POST['alumno'];
$pregunta = $_POST['pregunta']; 
$respuesta = $_POST['respuesta']; 
$cual = $_POST['cual']; 



$query ="
INSERT INTO al_condicion
            (fk_id_empresa,
             id_condicion,
             fk_id_alumno,
             fk_id_pregunta,
             fk_id_respuesta,
             cual,
             fecha_registro,
             estado)
VALUES ($empresa,
        0,
        '$alumno',
        '$pregunta',
        '$respuesta',
        '$cual',
        now(),
        'A');
";



$result = $conexion_sid -> query($query);

if ($result){
    echo 1;
}else{
  $codigo = mysqli_errno($conexion_sid); 
  echo $codigo;
}
$conexion_sid->close();
?>