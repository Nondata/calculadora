<?php 
include ("./bd/conex.php");

$id_condicion= $_POST['id_producto'];


$query ="UPDATE al_condicion SET estado = 'S', fecha_baja=now() WHERE id_condicion = $id_condicion ";
$result = $conexion_sid -> query($query);
if ($result) {  
}else{
    $codigo = mysqli_errno($conexion_sid); 
    echo $codigo;
}
$conexion_sid->close();

?>