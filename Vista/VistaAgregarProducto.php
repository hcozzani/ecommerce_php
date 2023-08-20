<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>

<body>
  <div>

    <!-- empieza barra navegacion -->
    <div>
      <?php require("../Vista/VistaBarraNavegacion.php"); ?>
    </div>

    <!-- empieza formulario agregar -->
    <div>
      <form class="col-4 m-5" action="../Controlador/ControladorAgregarProductos.php" method="POST" enctype="multipart/form-data">
        <div>
          <h1 class="m-5">Agregar Producto</h1>
        </div>
        <div>
          <input type="hidden" id="idProductos" name="idProductos">
        </div>
        <div class="mb-3">
          <label>Titulo</label>
          <input type="text" class="form-control" id="titulos" name="titulos">
        </div>
        <div class="mb-3">
          <label>Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="mb-3">
          <label>Imagenes</label>
          <input type="file" class="form-control" id="imagenes" name="imagenes">
        </div>
        <div class="mb-3">
          <label>Precio</label>
          <input type="text" class="form-control" id="precios" name="precios">
        </div>
        <input type="submit" class="btn btn-primary" id="btnagregar" name="btnagregar" value="Agregar">
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>