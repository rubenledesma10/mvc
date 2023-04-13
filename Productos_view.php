<body>
    <style>
        td{
            border: 1px dotted #FF0000;
        }
    </style>
    <table>
        <tr>
            <td>Nombre del producto</td>
    <?php
        //para recorrer el array declarado en Productos_controlador.php
        foreach($arrayProductos as $registro){
            echo"<tr><td>" .$registro ["producto"]. "</td></tr>";
        }
    ?>
    </table>
</body>
