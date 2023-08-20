<?php

class Modificar {
    private $conn;

    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "bicicleteria");
    }

    public function actualizar($titulo, $descripcion, $rutaDestino, $precio, $idProductos){
        session_start();
        $nombre = $_SESSION['Nombre'];
        $fechaActual = date('Y-m-d H:i:s');

        // Consulta preparada con marcadores de posición (?)
        $query = "UPDATE productos SET Titulos = ?, Descripcion = ?, Imagenes = ?, Precios = ?, 
        UsuarioModif = ?, FechaModif = ? WHERE idProductos = ?";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular los valores de los parámetros
        $stmt->bind_param("sssssss", $titulo, $descripcion, $rutaDestino, $precio, $nombre, $fechaActual, $idProductos);

        // Ejecutar la consulta
        $stmt->execute();

        // Cerrar la consulta y liberar los recursos
        $stmt->close();
    } 
}

?>
