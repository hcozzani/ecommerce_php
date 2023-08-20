<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bicicleteria Pirulo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!-- empieza la barra navegacion -->
  <div>
    <?php require("../Vista/VistaBarraNavegacion.php");
    session_start();
    ?>
  </div>

  <!-- empieza el carrucel -->
  <dic class="container-carrusel">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../imagenes/carru1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../imagenes/carru2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../imagenes/carru3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    </div>
    <br>

    <!-- botn agregar producto -->
    <div>
      <?php

      if (isset($_SESSION['Nombre']) && $_SESSION['Admin'] == 'admin') { ?>
        <a class="btn btn-primary btn-lg" type="button" href="../Vista/VistaAgregarProducto.php">Agregar Producto</a>
      <?php } ?>
    </div>
    <br>

    <div class="container-items">
      <?php
      while ($fila = mysqli_fetch_assoc($datos)) { ?>
        <div class="items">
          <figure>
            <img src="../imagenes/<?php echo $fila['Imagenes'] ?>" alt="">
          </figure>
          <div class="info-product">
            <!-- <input type="hidden" id="idProductos" name="idProductos" value= "<?php echo $fila['idProductos'] ?>"> -->
            <h2><?php echo $fila['Titulos'] ?></h2>
            <p><?php echo $fila['Descripcion'] ?></p>
            <p class="price">$<?php echo $fila['Precios'] ?></p>
            <button class="btn btn-primary" type="submit">Comprar</button>

            <!-- boton editar y eliminar -->
            <div class="d-grid gap-2 d-md-block">
              <?php if (isset($_SESSION['Nombre']) && $_SESSION['Admin'] == 'admin') { ?>
                <a href="../Vista/VistaEditarProducto.php?id=<?php echo $fila['IdProductos']; ?>" class="btn btn-success btn-lg" type="button" target="_blank" rel="noopener noreferrer">Editar</a>
                <a href="../Vista/VistaEliminarProducto.php?id=<?php echo $fila['IdProductos']; ?>" class="btn btn-danger btn-lg" type="button" target="_blank" rel="noopener noreferrer">Eliminar</a>
              <?php } ?>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>

    <!-- empieza el footer -->
    <div>
      <?php require("../Vista/VistaFooter.php");
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>