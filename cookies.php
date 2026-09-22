<?php 
//error_reporting(0);
    //reviso si recibe datos del farmulario
    if(isset($_POST["estilo"])) {
        //es que estoy recibiendo un estilo nuevo, lo tengo que meter en las cookies
        $estilo = $_POST["estilo"];
        //meto el estilo en una cookie
        setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie en PHP</title>
    <style type="text/css">
        body{
            background: <?php print $_COOKIE['estilo'];?>;
        }
        </style>
        <!---background es para dar fondo a la pantalla con el estilo -->
</head>
<body>
    <form action="" method="post">
        color de fondo pagina:
        <br>
        <select name="estilo">
            <option value="#23f723">Verde</option>
            <option value="#f723de">Rosado</option>
            <option value="#060606">Negro</option>
            <!--<option value="amoniaco.webp">imagen</option>-->
        </select>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>