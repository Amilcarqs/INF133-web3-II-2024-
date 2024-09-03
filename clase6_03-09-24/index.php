<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="controlador.php" method="GET" >
            <label for="">Usuario: </label>
            <input type="text" name="usuario" required> <br>
            <label for=""> Contraseña: </label>
            <input type="password" name="contrasenha" required> <br>
            <input type="submit" value="Aceptar" name="aceptar">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
    </div>
    
</body>
</html>