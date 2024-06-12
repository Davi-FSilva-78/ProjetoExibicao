<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Jornal</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<header> 
  <?php include("modelos/header.php")?> 
</header>

<section>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    
  <div class="carousel-inner" >
        <div class="carousel-item active" >
        <img src="img/imagem2.jpg" class="d-block w-100" alt="..." height="750px">
        </div>
        <div class="carousel-item">
        <img src="img/background_index.jpg" class="d-block w-100" alt="..." height="750px" >
        </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="..."  height="750px">
    </div>

    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<footer> 
  <?php include("modelos/footer.php") ?> 
</footer>

</body>
</html>