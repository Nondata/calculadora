<?php
    class Conexion{
        function c(){
            $host = "localhost";
            $user="root";
            $pass="";
            $bd="calculo_materias";

            return mysqli_connect($host,$user,$pass,$bd);
        }
    }
?>
