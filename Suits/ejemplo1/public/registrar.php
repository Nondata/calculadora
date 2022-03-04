<?php
    class Registrar{
        public function conectar(){
            $host="localhost";
            $usuario="root";
            $pass="";
            $bd="suits1";

            $con = mysqli_connect($host,$usuario,$pass,$bd);

            return $con;
        }
        public function editar($id){
            $dato= new Registrar();
            $con = $dato->conectar();

            $query = "SELECT * FROM registro WHERE id_registro='$id'";
            $consulta = mysqli_query($con,$query);

            $result=mysqli_fetch_array($consulta);

            return $result;
        }
        public function actualizar($id){
            $dato= new Registrar();
            $con = $dato->conectar();
            
            $ip = $_POST['ip'];
            $navegador=$_POST['navegador'];

            $query = "UPDATE registro SET ip='$ip', navegador='$navegador' WHERE id_registro='$id';";
            $consulta=mysqli_query($con, $query);

            if($consulta === TRUE){
                //echo "vistas.php";
            }
        }
        public function eliminar($id){
            $dato = new Registro();
            $con = $dato->conectar();
            $idn=$id;
            $sql = "DELETE FROM registro WHERE id_registro='$idn';";
            $consulta= mysqli_query($con,$sql);

            return $consulta;
        }
        public function guardar(){

            $dato1= new Registrar();
            $con=$dato1->conectar();
            if(!$con){
                die("error al conectar con el servidor ". mysqli_connect_errno() );
            }else{
                $ip = $_SERVER['SERVER_ADDR'];
                $navegador=$_SERVER['HTTP_USER_AGENT'];
                $vista = 1;
                $query="INSERT INTO registro(ip,navegador,vista)VALUE('$ip','$navegador','$vista');";
                $consulta=mysqli_query($con,$query);

                if($consulta == 1){
                    return "datos insertados satisfactoriamente";
                }else{
                    return "error al ingresar datos". mysqli_errno();
                }
            }
        }
        public function mostrar(){
            $dato = new Registrar();
            $con = $dato->conectar();
            
            $query="SELECT * FROM registro";
            $resultado=mysqli_query($con,$query);

            return $resultado;
        }
    }
?>