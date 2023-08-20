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

  <!-- empieza barra navegacion -->
  <div>
    <?php require("../Vista/VistaBarraNavegacion.php"); ?>
  </div>

  <br>
  <br>
  <br>
  <!-- Aqui comiezna formulario -->
  <form class="row g-3 needs-validation" novalidate method="POST">
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre:</label>
      <input type="text" class="form-control" id="validationCustom01" value="" required name="Nombre">
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Apellido:</label>
      <input type="text" class="form-control" id="validationCustom02" value="" required name="Apellido">
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Ciudad:</label>
      <input type="text" class="form-control" id="validationCustom03" required name="Ciudad">
    </div>
    <div class="col-md-3">
      <label for="validationCustom04" class="form-label">Pais:</label>
      <select class="form-select" id="validationCustom04" required name="Pais">
        <option selected disabled value="">Seleccionar</option>
        <option>Argentina</option>
        <option>Brasil</option>
        <option>Uruguay</option>
        <option>Chile</option>
        <option>Peru</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationCustom05" class="form-label">Codigo Postal:</label>
      <input type="text" class="form-control" id="validationCustom05" required name="CodigoPostal">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required name="Condiciones">
        <label class="form-check-label" for="invalidCheck">
          De acuerdo con los terminos y condiciones de compra
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
  </form>
  <br>
  <br>
  <br>

  <!-- empieza footer -->
  <div>
    <?php require("../Vista/VistaFooter.php"); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>