<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <?php 
        include "./registrar.php";
        $registro = new Registrar();
        $datos = $registro->mostrar();
        //print_r($datos);
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Direcci&oacute;n IP</th>
                <th scope="col">navegador</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while($array = mysqli_fetch_array($datos)){ ?>
        <tr>
            <th scope="row"><?php echo $array['id_registro']; ?></th>
            <td><?php echo $array['ip']?></td>
            <td><?php echo $array['navegador'];?></td>
            <td><a href="./actualizar.php?id=<?php echo $array['id_registro']; ?>">Editar</a></td>
            <td><a href="./eliminar.php?id=<?php echo $array['id_registro']; ?>">Eliminar</a></td>
        </tr>
        <?php }?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>