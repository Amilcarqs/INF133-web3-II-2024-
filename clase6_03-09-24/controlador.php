<?php
session_start();
    if(isset($_GET["aceptar"])) //el isset es para preguntar si se presiono el boton
    {
        //echo "acepto";
        $usuarioExiste = 0;
        
        if($_GET["usuario"] == 'msilva' && $_GET["contrasenha"] == '12345'){
            $_SESSION["usuario"] = "msilva";
            $_SESSION["color"] = "#69B2FF";
            $usuarioExiste = 1;
            header("Location: plantilla.php");
        }
        if($_GET["usuario"] == 'aqs' && $_GET["contrasenha"] == '123456'){
            $_SESSION["usuario"] = "aqs";
            $_SESSION["color"] = "#FF785A";
            $usuarioExiste = 1;
            header("Location: plantilla.php");
        }
        if($usuarioExiste == 0){
            echo "El usuario no existe o contraseña invalida";
            echo '<br><a href="index.php">volver</a>';            
        }
    }else{
        //echo "cancelar";
        header("Location: index.php"); //el header  borra el archivo y redirecciona
    }
?>