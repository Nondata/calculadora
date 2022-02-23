<?php
    require 'IMC.php';

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $datos = new IMC();
    echo $datos->calcularIMC($peso, $altura);
?>