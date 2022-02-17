<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura*$altura);

    if($imc <= 18.4){
        echo "usted esta bajo de peso";
    }elseif( $imc >= 18.5 && $imc <= 24.9){
        echo "usted esta dentro de su peso";
    }else{
        echo "usted esta por encima de su peso";
    }
?>