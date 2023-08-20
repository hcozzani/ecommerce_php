<?php

class Eliminar {
    private $conn;

    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "bicicleteria");
    }

    public function EliminarBd($id){
        session_start();
        $nombre = $_SESSION['Nombre'];         
        $fechaActual = date('Y-m-d H:i:s');

        // Consulta preparada con marcadores de posición (?)
        $query = "UPDATE productos SET UsuarioBaja = ? , FechaBaja = ? WHERE IdProductos = ?";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular los valores de los parámetros
        $stmt->bind_param("sss", $nombre, $fechaActual, $id);

        // Ejecutar la consulta
        $stmt->execute();

        // Cerrar la consulta y liberar los recursos
        $stmt->close();
    }
}

?>
