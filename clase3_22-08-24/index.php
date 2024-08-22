<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <form method = "GET" action="enviar.php">   <!--declaramos que el formulario obtendra(GET) datos y los enviara a enviar.php-->
    <form method = "POST" action="enviar.php">    <!-- tambien se puede poner post, de ser asi se debe poner lo mismo en el archivo enviar.php-->
        <div class="form-group">
            <label class="form-label">Nombre</label>
            <input  class="form-control" type="text" name="nombre" value="" required>
            <br>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Paterno</label>
            <input  class="form-control" type="text" name="paterno" value="">
            <br>
        </div>
        <div class="form-group">
            <label  class="form-label" for="">Edad</label>
            <input class="form-control" type="int" name="edad" value="">
            <br>
        </div>
        
        <input  class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar">
        <input  class="btn btn-primary" type="submit" name="Cancelar" value="Cancelar">


    </form>

</body>
</html>