<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <?php
        require "./calcular.php";

        $calcular = new Calcular();
      ?>
    <div class="container mb-4 border">
        <form action="<?php echo $calcular->insertar(); ?>" class="form border" method="POST">
            <label for="">Datos del empleado</label>
            <div class="row">
                <div class="col">
                <div class="form-outline">
                <label class="form-label" for="form3Example1">Sueldo</label>
                    <input type="number" id="form3Example1" name="sueldo" class="form-control" />
                </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2">Edad</label>
                        <input type="text" id="form3Example2" name="edad" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="form-outline">
                <label class="form-label" for="">Sexo</label>
                <select class="form-select mb-3" name="sexo" aria-label=".form-select-lg example">
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                </select>
                </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2">Nacionalidad</label>
                        <select class="form-select mb-3" name="nacionalidad" aria-label=".form-select-lg example">
                            <option value="nacional">Nacional</option>
                            <option value="extranjero">Extranjero</option>
                        </select>
                    </div>
                </div>
            </div>
    <div class="container border">
        <div class="row">
            <div class="col-8">
            <div class="row">
                <label for="">Cursos</label>
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" name="php" id="flexCheckDefault" />           
                    <label for="flexCheckDefault">PHP</label>
                    <br>
                    <input class="form-check-input" type="checkbox" name="asp" id="flexCheckDefault" />
                    <label for="flexCheckDefault">ASP .Net</label>
                    <br>  
                    <input class="form-check-input" type="checkbox" name="vb" id="flexCheckDefault" />         
                    <label for="flexCheckDefault">VB .Net</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" name="java" id="flexCheckDefault" />                    
                    <label for="flexCheckDefault">Java</label>
                    <br>
                    <input class="form-check-input" type="checkbox" name="oracle" id="flexCheckDefault" />                    
                    <label for="flexCheckDefault">Oracle</label>
                    <br>
                    <input class="form-check-input" type="checkbox" name="bd" id="flexCheckDefault" />                    
                    <label for="flexCheckDefault">Introducci&oacute;n a BD</label>
                </div>
            </div>           
            </div>
            <div class="col-4">
                <label for="">Antigüedad</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="1a5" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">1 a 5 a&ntilde;os</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="6a10" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">6 a 10 a&ntilde;os</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="10omas" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Mas de 10 a&ntilde;os</label>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
                <div class="col">
                    <button class="btn btn-success">Calcular y Guardar</button>
                </div>
            </div>        
    </div>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>