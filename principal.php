<!doctype html>
<html lang="esp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Sistema de Control Vehicular</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <header>
 
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns= width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"></svg>
        <strong>Principal</strong>
       
      <a href="index.php" class="navbar-brand d-flex align-items-left">
        <svg xmlns= width="10" height="10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"></svg>
        Cerrar Sesión
        </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Pagina Principal</h1>
      <p class="lead text-muted">Menu Principal</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <div class="text-center">
          <img src="static/img/vehiculo.jpg" class="rounded" alt="Usuario">
            </div>
                        <div class="card-body">
            <a href="vehiculos.php">Catalogo de Vehiculos</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          
          <div class="text-center">
          <img src="static/img/usuario.jpg" class="rounded" alt="Usuario">
            </div>
            <div class="card-body">
            <a href="iusuarios.php">Catalogo de Usuarios</a>
              <div class="d-flex justify-content-between align-items-center">      
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <div class="text-center">
          <img src="static/img/asignar.jpg" class="rounded" alt="Usuario">
            </div>          
              <div class="card-body">
            <a href="asignacion.php">Asignación de vehiculos de comisión</a>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div>

</main>

</html>
<?php
//mostramos el footer
require_once('funciones/footer.php');
?>
