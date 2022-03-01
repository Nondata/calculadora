<?php
    class Datos{ 
        public function sacar_datos(){            
                $host="localhost";
                $bd="ejemplo1";
                $usuario = "root";
                $pass="";
                
                $con= mysqli_connect($host,$usuario,$pass,$bd);

                if(!$con){
                    die('Error de Conexion '.mysqli_connect_error() );
                    return 0;
                }else{
                    $query="SELECT * FROM datos_simples";
                    $resultado=mysqli_query($con,$query);
                    $data = mysqli_fetch_array($resultado);

                    return $data;
                }
                
        }
    }
?>