<?php
    session_start();
    require ("../Modelo/ModeloEliminarProducto.php");
    $Act = new Eliminar();
    $Act->EliminarBd($_POST['idProductos']);
    header("location: ../Controlador/ControladorVerArrays.php");
?>