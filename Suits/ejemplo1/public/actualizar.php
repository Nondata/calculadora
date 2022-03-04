<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        include "./registrar.php";

        $dato = new Registrar();
        $id = $_GET['id'];

        $dato_actualizar=$dato->editar($id);
        //print_r($dato_actualizar);
    ?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="<?php $dato->actualizar($id); ?>" method="post">
                    <div class="form-group">
                    <label for="">Direcci&oacute;n IP</label>
                    <input type="text" name="ip" value="<?php echo $dato_actualizar['ip'];?>">
                    <br><br>
                </div>
                <div class="form-group">
                    <label for="">Navegador</label>
                    <input type="text" name="navegador" value="<?php echo $dato_actualizar['navegador'];?>">
                    <br><br>
                </div>
                <input class="btn btn-success" type="submit" value="Guardar">
                </form>
                </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>