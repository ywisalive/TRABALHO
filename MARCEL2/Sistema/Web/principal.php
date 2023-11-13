<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuario não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL../=index.php'/>"; 
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


<!-- <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/dentista.png" alt="" width="170 px"></a>
            <a class="btn btn-dark" href="logout.php">Sair</a>
        </div>
    </nav> -->
    
    <nav class="navbar navbar-expand-lg  bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
  <nav class="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="..\Recursos/dentista.png" alt="" width="160px"></a>
        </div>
    </nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInício</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais...
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Integrante</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">Consultoria</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Começo -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

    <!-- FIM DE INDICADORES -->

    <!-- Inicio dos slides -->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Recursos/Dentias-11.png" class="d-block w-100" alt="Categoria 1">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
    <!-- Fim dos slides -->

<!-- Inicio anterior dos slides e proximo slide -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <!-- FIM anterior dos slides e proximo slide -->

</div>


    <div class="container text-center">
        <h2></h2>
        <a class="btn btn-lg btn-success" href="http://localhost/MARCEL2/Sistema/Web/listar.php">Listar usuários</a>
    </div>



    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>