<?php
require("../Modelo/ModeloValidarLogin.php");
$val = new Validacion();
$val->Validar($_POST['Usuario'],$_POST['Contraseña']);
?>