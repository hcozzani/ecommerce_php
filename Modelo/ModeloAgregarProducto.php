
<?php
 class AgregarProductoModelo {
     private $conn;

     public function __construct(){
         $this->conn = new PDO("mysql:host=localhost;dbname=bicicleteria", "root", "");
     }

     public function AgregarProducto($titulo, $descripcion, $rutaDestino, $precio){
         session_start();
         $nombre = $_SESSION['Nombre'];
         $fechaActual = date('Y-m-d H:i:s');

         // Consulta preparada con marcadores de posición (:titulo, :descripcion, :imagen, :precio, :nombre, :fechaActual)
         $query = "INSERT INTO productos (Titulos, Descripcion, Imagenes, Precios, UsuarioAlta, FechaAlta)
         VALUES (:titulo, :descripcion, :imagen, :precio, :nombre, :fechaActual)";

         // Preparar la consulta
         $stmt = $this->conn->prepare($query);

         // Vincular los valores de los parámetros
         $stmt->bindParam(':titulo', $titulo);
         $stmt->bindParam(':descripcion', $descripcion);
         $stmt->bindParam(':imagen', $rutaDestino);
         $stmt->bindParam(':precio', $precio);
         $stmt->bindParam(':nombre', $nombre);
         $stmt->bindParam(':fechaActual', $fechaActual);

         // Ejecutar la consulta
         $stmt->execute();

         // Cerrar la consulta
         $stmt = null;
     }
 }
?>
