<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="verifica.php">
  <?
  include "verifica.php"; ?>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark azul">
      <a class="navbar-brand" href="#">MINHA MARCAa</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="menu">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.html">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">Contato</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="row area">
      <div class="col-sm-12 bg-light">
        <?php

        if (isset($_COOKIE["corperso"]))
          echo "<img src='img/" . $_COOKIE['corperso'] . ".jpg' class='img-fluid'>";

        else
          echo "<img src='img/azul.jpg' class='img-fluid'>";
        ?>

      </div>
    </div>

    <div class="row area">
      <div class="col-sm-12 bg-light">
        <h6>
          <p align="right"> Personalize sua interface
            <a href="cookie.php?id=azul"> <img src=img/btnazul.png border=no WIDTH=30 HEIGTH=30> </a> &nbsp;&nbsp;
            <a href="cookie.php?id=verde"> <img src=img/btnverde.png border=no WIDTH=30 HEIGTH=30> </a>&nbsp;&nbsp;
            <a href="cookie.php?id=vermelho"><img src=img/btnvermelho.jpg border=no WIDTH=30 HEIGTH=30></a>
          </p>
        </h6>

      </div>

    </div>
    </p>

    <br><br>
    <div class="area">
      <h3>SOBRE NÓS</h3>
    </div>
    <div>
      <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente ipsum ab deleniti quaerat totam minima accusamus dignissimos eum, consequuntur doloribus magnam et maiores quia asperiores quos non consequatur ex repellat?
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="./img/image.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary cor">Go somewhere</a>
      </div>
    </div>

    <br><br>

    <div class="row rodape">
      <div class="col-sm-12 azul  text-light">
        <h4> rodape</h4>
      </div>
    </div>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>