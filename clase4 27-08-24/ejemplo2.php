<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </--- Para imprimir en una tabla usando php /--->
    <table border="5px">
    <?php
        for ($i=0; $i < 10 ; $i++) { 
    ?>
        <tr>
                <td><?php echo $i; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>

    </--- Otra forma para imprimir en una tabla usando php y recibiendo el dato cantidad desde ---
    un formulario de otra pagina /--->
    <?php
        $cant = $_GET["cantidad"];
        echo '<table border="3px">';
    
        for ($i=0; $i < $cant ; $i++)
            echo "<tr><td>$i</td> </tr>";
        echo "</table>";
    
        $vector = [2,3,4,5,6,7];
        echo $vector[1];

    ?>


</body>
</html>
