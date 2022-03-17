<?php 
    include_once 'conexion.php';
    $obj = new Conexion();
    $conn = $obj->Conectar();

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $apellido_paterno = (isset($_POST['ap_paterno'])) ? $_POST['ap_paterno'] : '';
    $apellido_materno = (isset($_POST['ap_materno'])) ? $_POST['ap_materno'] : '';
    $usuario = (isset($_POST['username'])) ? $_POST['username'] : '';
    $alias = (isset($_POST['alias'])) ? $_POST['alias'] : '';
    $pass = (isset($_POST['password'])) ? $_POST['password'] : '';
    $fecha = date("Y-m-d");

    $password = md5($pass);
    
    $consulta1 = "SELECT * FROM usuarios WHERE nombres = '$nombre' AND ap_paterno = '$apellido_paterno' AND ap_materno = '$apellido_materno' ";

    $resultado1 = $conn->prepare($consulta1);
    $resultado1->execute();

    if($resultado1->rowCount() == 1){
        echo 1;
    }else{
        $consulta2 = "SELECT * FROM usuarios WHERE usuario = '$usuario' ";
        $resultado2 = $conn->prepare($consulta2);
        $resultado2->execute();

        if($resultado2->rowCount() == 1){
            echo 2;
        }else{

            $consulta3 = "SELECT * FROM usuarios WHERE alias = '$alias' ";
            $resultado3 = $conn->prepare($consulta3);
            $resultado3->execute();

            if($resultado3->rowCount() == 1){
                echo 3;
            }else{

                $insertar_usuario ="INSERT INTO usuarios(nombres,ap_paterno,ap_materno,usuario,password,fecha,alias) 
                VALUES ('$nombre','$apellido_paterno','$apellido_materno','$usuario','$password','$fecha','$alias');";

                $ejecutar = $conn->prepare($insertar_usuario);
                $ejecutar->execute();

                $ultimo_dato = $conn->lastInsertId();

                if($ultimo_dato > 0){
                    echo "11";
                }else{
                    print_r($ejecutar->errorInfo() );
                }
            }
        }
    }
    //print json_encode($data);
    $conn = null;
?>