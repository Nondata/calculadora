<?php 
session_start();
include ("./bd/conex.php");

$empresa = 1;
$codigo  = $_POST['codigo'];
$nivel = $_POST['nivel'];
$entidad = $_POST['entidad']; 
$nombre = $_POST['nombre']; 
$paterno = $_POST['paterno']; 
$materno = $_POST['materno']; 
$anios = $_POST['anios']; 
$meses = $_POST['meses'];
$dias = $_POST['dias'];
$sexo = $_POST['sexo'];

$curp=$_POST['curp'];
$peso=$_POST['peso'];
$estatura=$_POST['estatura'];


$query = "
UPDATE al_alumnos_dg
SET 
  nombre = '$nombre',
  a_paterno = '$paterno',
  a_materno = '$materno',
  curp = '$curp',
  fk_id_nivel = $nivel,
  fk_id_estado = $entidad,
  anios = $anios,
  meses = $meses,
  dias = $dias,
  fk_id_sexo = $sexo,
  peso = $peso,
  estatura = $estatura,
  fecha_actualiza = now()
WHERE id_alumno = $codigo
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





































































