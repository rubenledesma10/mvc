<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <h1>MVC</h1> 
    <br>
    <?php
        //incluimos el producto controlador porque este contiene la vista y el modelo, tiene ambos
        include("controlador/Productos_controlador.php");
    ?>
</body>
</html>