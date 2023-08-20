<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de Logueo</title>
</head>

<body>
    <br>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1) { ?>
        <h2>Error: Los datos ingresados son incorrectos</h2>
    <?php } ?>
</body>

</html>