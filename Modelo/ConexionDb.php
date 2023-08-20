<?php 
    class ConexionDb {

        private $conexion;

        function __construct(){
            $base = "mysql:host=localhost;dbname=bicicleteria";
            $usuario="root";
            $pass="";
            $this->conexion = new PDO($base, $usuario, $pass);
            $this->conexion->exec("SET CHARACTER SET UTF8");            
        }

        function getConexion(){
            return $this->conexion;
        }

        function liberarConexion(){
            $this->conexion = null;
        }
    }
?>
