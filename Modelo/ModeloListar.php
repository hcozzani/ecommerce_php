<?php
//borrar esto si funciona lo nuevo

// Class Listar{
    
//     private $conn;
//     public function __construct(){
//         $this->conn = new mysqli("localhost", "root", "", "bicicleteria");
//     }

//     public function obtenerDatos($id){
//         $query = "SELECT * FROM productos WHERE IdProductos = '$id'";
//         return $this->conn->query($query);
//     }
// }

?>

<?php

class Listar {
    private $conn;

    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "bicicleteria");
    }

    public function obtenerDatos($id){
        // Consulta preparada con marcador de posición (?)
        $query = "SELECT IdProductos, Titulos, Descripcion, Imagenes, Precios FROM productos WHERE IdProductos = ?";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular el valor del parámetro
        $stmt->bind_param("s", $id);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $resultado = $stmt->get_result();

        // Retornar el resultado
        return $resultado;

        // Cerrar la conexión y liberar los recursos
        $stmt->close();
        $this->conn->close();
    }
}

?>
