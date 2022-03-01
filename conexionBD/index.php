<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion base de datos</title>
</head>
<body>
    <h1>Hola</h1>
    <?php include "datos.php"; 
        $datos = new Datos();
        $resultado[] = $datos->sacar_datos();
        print_r($resultado);
    ?>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha</th>
        </tr>
        <?php foreach($resultado as $array){?>
        <tr>
            <td><?php echo $array['nombre'] ?></td>
            <td><?php echo $array['ap_paterno'] ?></td>
            <td><?php echo $array['ap_materno'] ?></td>
            <td><?php echo $array['fecha'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>