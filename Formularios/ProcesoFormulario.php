<h1>Datos Recibidos</h1>
<?php
    $nombre = 'hugo';
    $apellido = 'perez';
    $ciudad= 'capital federal';
    $pais = 'Argentina';
    $codigoPostal = '1414';


    if ($_POST['Nombre'] == $nombre and $_POST['Apellido'] == $apellido and $_POST['Ciudad'] == $ciudad and $_POST['Pais'] == $pais
        and $_POST['CodigoPostal'] == $codigoPostal){
        echo "<p>Datos correctos</p>";
    }else{
        echo "<p>Datos Incorrectos</p>";
    };
?>