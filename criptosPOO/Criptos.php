<?php
    class Criptos{
        static $resultado;
        static $mensaje;
        function conversion($cripto,$dinero){
            switch($cripto){
                case "bitcoin":
                    $resultado = $dinero / 1000000;
                    $mensaje = "Uste ha invertido ". $resultado ." en bitcoin";
                break;
                case "xrp":
                    $resultado = $dinero / 1000;
                    $mensaje = "Uste ha invertido ". $resultado ." en XRP";
                break;
                case "bat":
                    $resultado = $dinero / 10;
                    $mensaje = "Uste ha invertido ". $resultado ." en BAT";
                break; 
            }
            return $mensaje;
        }
    }
?>