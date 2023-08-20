<?php

class ConexionBd{
    private $conn;
    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "bicicleteria");
        return $this->conn;
}

    public function obtenerBd(){
        $query = "SELECT IdProductos, Titulos, Descripcion, Imagenes, Precios FROM productos WHERE FechaBaja IS NULL";
        $resultado = $this->conn->query($query);
        return $resultado;
}
}
?>