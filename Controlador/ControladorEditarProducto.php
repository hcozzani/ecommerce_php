<?php
require("../Modelo/ModeloEditarProducto.php");

$titulo = $_POST['titulos'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precios'];
$idProducto = $_POST['idProductos'];
$imagenes = $_FILES['imagenes'];

// Función para subir la imagen y devolver la ruta
function subirImagen($imagen)
{
    $carpetaImagenes = "../imagenes/";
    $nombreArchivo = $imagen['name'];
    $rutaTemporal = $imagen['tmp_name'];
    $rutaDestino = $carpetaImagenes . $nombreArchivo;
    move_uploaded_file($rutaTemporal, $rutaDestino);
    return $rutaDestino;
}

// Verificar si se ha subido una imagen
if (!empty($imagenes['name'])) {
    $rutaDestino = subirImagen($imagenes);
} else {
    $rutaDestino = "../imagenes/generica.jpg";
}

$Act = new Modificar();
$Act->actualizar($titulo, $descripcion, $rutaDestino, $precio,$idProducto);

header("location: ../Controlador/ControladorVerArrays.php");
?>




