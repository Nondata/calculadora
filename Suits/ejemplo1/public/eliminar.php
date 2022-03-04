<?php
    include "registrar.php";

    $id = $_GET['id'];
    $datos = new Registrar();
    $con=$datos->conectar();

    $sql = "DELETE FROM registro WHERE id_registro='$id';";
    $consulta= mysqli_query($con,$sql);
    header('Location: vistas.php');
?>