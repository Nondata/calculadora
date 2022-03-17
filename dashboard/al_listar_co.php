<?php
	include ("./bd/conex.php");

    $query = "
SELECT co.*,
        pr.`desc_pregunta`,
        CONCAT(al.`nombre`,' ',al.`a_paterno`,' ',al.`a_materno`) alumno,
        re.desc_respuesta
    FROM al_condicion co, co_preguntas pr, al_alumnos_dg al, co_respuestas re
    WHERE co.`estado`= 'A'
    AND co.fk_id_empresa = 1
    AND co.`fk_id_pregunta` = pr.`id_pregunta`
    AND co.`fk_id_alumno` = al.id_alumno
    AND co.fk_id_respuesta = re.id_respuesta
    ";

	$resultado = mysqli_query($conexion_sid, $query);
    if(!$resultado){
        die("Error");
    }else{
        while($data=mysqli_fetch_assoc($resultado)){
            $arreglo["data"][]=$data;
        }
        echo json_encode($arreglo);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion_sid);