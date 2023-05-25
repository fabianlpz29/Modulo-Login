<?php
session_start(); //validamos la sesion

if ($_SESSION['usuario'] === null) { //si la variable de validacion viene nula que no deje pasar y se quede en el login
    header('Location:Index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra de Navegación</title>
  <!-- Incluir los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <h2 class="navbar-brand">Mi Sitio Web</h2>

      <a class="nav-link" href="./Dash.php">Inicio</a>
      <a class="nav-link" href="./Salir.php">Salir</a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <h2>Informacion Importante</h2>
    </div>
  </div>


  <!-- Incluir los archivos JS de Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
