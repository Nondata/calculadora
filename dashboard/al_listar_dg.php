<?php
	include ("./bd/conex.php");

    $query = "SELECT al.*,
    ni.`desc_nivel`,
    es.`desc_estado`,
    se.`desc_sexo`,
    concat('A',al.anios,'M',al.meses,'D',al.dias) as edad
    FROM al_alumnos_dg al,al_nivel_escolar ni, co_estados es, co_sexo se
    WHERE al.`estado` = 'A'
    AND al.`fk_id_nivel` = ni.`id_nivel`
    AND al.`fk_id_estado` = es.`id_estado`
    AND al.`fk_id_sexo` = se.`id_sexo`";

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