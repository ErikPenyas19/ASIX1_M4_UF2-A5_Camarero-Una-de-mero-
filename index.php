<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php
  if (file_exists('./carta.xml')) {
    $carta = simplexml_load_file('./carta.xml');
  } else {
    exit('Error abriendo carta.xml');
  }
?>
<div class="tit">
  <h1>Restaurante <span>Er Moro La Equina</span></h1>
</div>
<div class="container text-center" id="div3col">
  <div class="row align-items-center">
    <div id="col-3" class="col">
        <?php
          echo '<div class="platos">';
          echo '<h2>1<sup>ros</sup> Platos</h2>';
          echo '<br>';
            foreach($carta->platosx as $platosx){
              echo '<p>'.$platosx->title.'<span class="desc"> -  '.$platosx->descripcion.'</span></p>';
            }
            echo '</div>';
            echo '<div class="platos">';
            echo '<h2>2<sup>ndos</sup> Platos</h2>';
            echo '</div>';
            foreach($carta->platosy as $platosy){
              echo '<p>'.$platosy->title.'<span class="desc"> -  '.$platosy->descripcion.'</span></p>';
            }
        ?>
    </div>
    <div class="col" id="col-2">
      <div class="col-col2">
        <?php
        echo '<h2>Postres</h2>';
        echo '<br>';
        foreach($carta->postres as $postres){
          echo '<p>'.$postres->title.'<span class="descpst"> -  '.$postres->descripcion.'</span></p>';
        }
        ?>
      </div>
      <div class="col2-col2">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="./img/mejillones-a-la-marinera.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="./img/Rabo-de-toro-guisado.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/crema-catalana-en-tapas.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col" id="col-1">
      <div class="col-col1">
      <?php
      echo '<div class="platos">';
      echo '<h2>Bocadillos Fríos</h2>';
      echo '<br>';
      foreach($carta->bocatasf as $bocatasf){
      echo '<p>'.$bocatasf->title.'<span class="desc"> -  '.$bocatasf->descripcion.'</span></p>';
      }
      echo '</div>';
      ?>
      </div>
      <div class="col2-col1">
      <?php
      echo '<div class="platos">';
      echo '<h2>Bocadillos Calientes</h2>';
      echo '<br>';
      foreach($carta->bocatasc as $bocatasc){
      echo '<p>'.$bocatasc->title.'<span class="desc"> -  '.$bocatasc->descripcion.'</span></p>';
      }
      ?>
      </div>
    
    </div>
  </div>
</div>
    
</body>
</html>