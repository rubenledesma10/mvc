<?php
//metodos y clases necesarias para poder extraer la info de la BD
    class Productos_modelo {
        private $db; //para almacenar la conexion
        private $productos; //almacenar los productos

        public function __construct(){

            include("modelo/Conectar.php");
            $this->db=Conectar::conexion();
            $this->productos=array();


        } 

        public function get_productos(){

            $consulta=$this->db->query("SELECT * FROM productos");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){ //lo que hacemos con esta instruccion es reccorer $filas que tiene el array $consulta y lo almacena en filas
                $this->productos[]=$filas; //lo que tengo en cada fila se almacena en el array productos
            }

            return $this->productos; //nos devuelve el array con todos los productos que hay en un interior

        }
    }




?>