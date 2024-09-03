<?php
    session_start();
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
    <div style="height: 150px; width: 1000px;">
        <h1>UMSA</h1>
        <h2>FCPN</h2>
    </div>
    <div style="height:300px; width:1000px; background-color: <?php echo $_SESSION['color'] ?>; ">
        <p>Bienvenido <?php echo $_SESSION["usuario"] ?></p>
    </div>



    
</body>
</html>