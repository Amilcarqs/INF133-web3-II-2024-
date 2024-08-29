<?php
    if(isset($_GET["Enviar"])){ //isset es para verificar si existe, en este caso 
        //preguntamos si existe Enviar
        //session_start();
        $_SESSION["contador"] = $_SESSION["contador"] + 1;
        //$contador = $contador+1;
    }else
        $_SESSION["contador"] =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="incremento.php" method="GET">
        <label for="">Incremento</label>
        <input type="text"  name="cantidad" value="<?php echo $_SESSION["contador"]; ?>" >
        <br>
        <input type="submit" name="Enviar2" value="Enviar">
    </form>      
</body>
</html>