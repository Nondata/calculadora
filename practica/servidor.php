<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $opcion = $_POST['operacion'];

    switch($opcion){
        case "suma":
            echo "El resultado es ".($numero1+$numero2);
        break;
        case "resta":
            echo "El resultado es ".($numero1-$numero2);
        break;
        case "multiplicacion":
            echo "El resultado es ".($numero1*$numero2);
        break;
        case "division":
            echo "El resultado es ".($numero1/$numero2);
        break;
    }
?>