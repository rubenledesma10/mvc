<?php
// este archivo es el intermediario entre el la vista y el controlador
include("modelo/Productos_modelo.php");

    $producto=new Productos_modelo(); //instancio la clase, con esto llamo al constructor
    $arrayProductos = $producto->get_productos();//almacenar el array productos

    include("vista/Productos_view.php");




?>