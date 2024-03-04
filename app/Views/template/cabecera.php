<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/Estilos.css"/>
    <title>BenVani Cineplex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="background2">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BenVani Cineplex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url('usuarios')?>">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Peliculas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Taquilla</a>
        </li>
      </ul>
      <button class="btn btn-danger m-2" type="submit">Perfil</button>
      <button class="btn btn-outline-danger" type="submit">Salir</button>
    </div>
  </div>
</nav>
    <div class="text-center p-1" style="background-color:rgb(0,0,0,0.4);">
        <h1 class="letra"><strong>Sistema Taquillero</strong></h1>
    </div>
    <div class="container">
        <?php 
            if(session('mensaje')){ 
        ?>

        <div class="alert alert-dark" role="alert">
            <?php 
                echo session('mensaje');
            ?>
        </div>

        <?php
            }
        ?>