<?php

class Validacion{
    public function Validar($usuario, $pass){
        $conn = new mysqli("localhost", "root", "", "bicicleteria");

        // Consulta preparada con marcadores de posición (?)
        $query = "SELECT Nombre, Contraseña, Rol
        FROM usuarios 
        WHERE Usuario = ? AND Contraseña = ?";

        // Preparar la consulta
        $stmt = $conn->prepare($query);

        // Vincular los valores de los parámetros
        $stmt->bind_param("ss", $usuario, $pass);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $resultado = $stmt->get_result();

        if($resultado->num_rows > 0){
            $fila = $resultado->fetch_assoc();
            session_start();
            $_SESSION['Nombre'] = $fila['Nombre'];
            $_SESSION['Admin'] = $fila['Rol'];
            header("location: ../Controlador/ControladorVerArrays.php");
        }else{
            header("location: ../Vista/VistaErrorLogin.php?error=1");
        }

        // Cerrar la conexión y liberar los recursos
        $stmt->close();
        $conn->close();
    }
}

?>

