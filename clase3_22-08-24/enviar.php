<?php
$nombre = $_POST["nombre"] ;  //declaramos la variable nombre y usamos $GET para leer una variable que llega, poner get o post dependera del archivo de donde viene
$paterno = $_POST["paterno"]; 
echo "Hola ".$nombre." ".$paterno;  //echo para imprimir y el punto es para concatenar
?>
