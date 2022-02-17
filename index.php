<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="servidor.php" method="post">
        <label for="">Primer numero</label>
        <input type="number" name="numero1">
        <br>
        <label for="">Segundo numero</label>
        <input type="number" name="numero2">
        <br>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>