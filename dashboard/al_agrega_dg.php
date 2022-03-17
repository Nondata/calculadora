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



$query ="
INSERT INTO al_alumnos_dg
            (fk_id_empresa,
             id_alumno,
             nombre,
             a_paterno,
             a_materno,
             curp,
             fk_id_nivel,
             fk_id_estado,
             anios,
             meses,
             dias,
             fk_id_sexo,
             peso,
             estatura,
             fecha_registro,
             estado)
VALUES ($empresa,
        0,
        '$nombre',
        '$paterno',
        '$materno',
        '$curp',
        $nivel,
        $entidad,
        $anios,
        $meses,
        $dias,
        $sexo,
        $peso,
        $estatura,
        Now(),
        'A');
";



$result = $conexion_sid -> query($query);

if ($result){
    echo 1;
}else{
  $codigo = mysqli_errno($conexion_sid); 
  echo $query.'-'.$codigo;
}
$conexion_sid->close();
?>