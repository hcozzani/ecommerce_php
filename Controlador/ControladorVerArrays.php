<?php
    require ("../Modelo/ModeloGetProductos.php");
    $conexion = new ConexionBd();
    $datos = $conexion->obtenerBd();
    require("../Vista/VistaVerWeb.php");
?>