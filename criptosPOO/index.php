<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Criptomonedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <div class="container">
        <div class="row"></div>
        <div class="row m-0 vh-0">
            <div class="col-sm-8" style="background-color:white;"><br>
                <form action="servidor.php" method="post" class="form border">
                    <div class="form-group mb">
                    <label for="" class="form-label">Seleccione una criptomoneda</label><br>
                    <select name="cripto" class="form-select">
                        <option value="bitcoin">Bitcoin</option>
                        <option value="xrp">XRP</option>
                        <option value="bat">BAT</option>
                    </select><br>
                    </div>
                    <div class="form-group mb">
                    <label for="" class="form-label">Ingrese la cantidad a convertir</label><br>
                    <input type="number" name="inversion" class="form-control"><br>
                    <input type="submit" class="btn btn-primary" value="Convertir">
                    <br>
                    </div>
                </form>
            </div>
            <div class="col-auto"></div>
        </div>
        <div class="row"><div class="col"></div></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>