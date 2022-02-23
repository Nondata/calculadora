<?php
    include 'Criptos.php';

    $criptomoneda = $_POST['cripto'];
    $inversion = $_POST['inversion'];

    $datos = new Criptos();

    echo $datos->conversion($criptomoneda,$inversion);
?>