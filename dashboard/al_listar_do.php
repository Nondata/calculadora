<?php
	include ("./bd/conex.php");

    $query = "
SELECT mi.*,
    td.`desc_domicilio`,
    es.`desc_estado`,
    mu.`desc_municipio`,
    lo.`desc_localidad`
FROM al_domicilios mi, co_tipo_domicilios td, co_estados es, co_municipios mu, co_localidades lo
WHERE mi.`estado` = 'A'
AND mi.`fk_id_tipo_domicilio` = td.`id_tipo_domicilio`
AND mi.`fk_id_estado` = es.`id_estado`
AND mi.`fk_id_estado` = mu.`fk_id_estado`
AND mi.`fk_id_municipio` = mu.`id_municipio`
AND mi.`fk_id_estado` = lo.`id_estado`
AND mi.fk_id_localidad = lo.`id_localidad`
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