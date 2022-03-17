<?php 
include ("./bd/conex.php");

$id_alumno= $_POST['id_producto'];


$query ="UPDATE al_alumnos_dg SET estado = 'S', fecha_baja=now() WHERE id_alumno = $id_alumno ";
$result = $conexion_sid -> query($query);
if ($result) {  
}else{
    $codigo = mysqli_errno($conexion_sid); 
    echo $codigo;
}
$conexion_sid->close();

?>