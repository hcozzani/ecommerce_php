<?php
require("../Modelo/ModeloListar.php");
$conexion = new Listar();
$Act = $conexion->obtenerDatos($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <!-- empieza barra navegacion -->
  <div>
    <?php require("../Vista/VistaBarraNavegacion.php"); ?>
  </div>

  <!-- empieza formulario eliminar -->
  <div>
    <form class="col-4 m-5" action="../Controlador/ControladorEliminarProducto.php" method="POST">
      <div>
        <h1 class="m-5">Eliminar Producto</h1>
      </div>
      <?php while ($fila = mysqli_fetch_assoc($Act)) { ?>
        <div class="mb-3">
          <input type="hidden" id="idProductos" name="idProductos" value="<?php echo $fila['IdProductos'] ?>">

          <label for="exampleInputEmail1" class="form-label">Titulo</label>
          <input type="text" class="form-control" name="titulos" id="titulos" value="<?php echo $fila['Titulos'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $fila['Descripcion'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Imagenes</label>
          <input type="text" class="form-control" name="imagenes" id="imagenes" value="<?php echo $fila['Imagenes'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Precio</label>
          <input type="text" class="form-control" name="precios" id="precios" value="<?php echo $fila['Precios'] ?>">
        </div>
        <input type="submit" class="btn btn-danger" id="btneliminar" name="btneliminar" value="Eliminar">
      <?php } ?>
    </form>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>