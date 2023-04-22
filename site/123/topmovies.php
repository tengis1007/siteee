<?php
include "header.php";
include "db.php";
?>
 <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Filmlane</p>

            <h1 class="h1 hero-title">
            Бүх төрлийн <strong>Кинонууд</strong>
            </h1>

     


            <button class="btn btn-primary">
              <ion-icon name="play"></ion-icon>

          <span>Тоглуулах</span>
            </button>

          </div>

        </div>
      </section>
    </article>
<section class="top-rated">
        <div class="container" >
          <h2 class="h2 section-title"> Кинонууд</h2>
          <ul class="movies-list">
          <?php 

$query = "SELECT * FROM movie ORDER BY mv_imdb DESC";
$run = mysqli_query($con,$query);
if ($run) {

    while($row = mysqli_fetch_assoc($run)){
        ?>
            <li>
              <div class="movie-card" id="moviess">
              <?php 
$id = $row['movie_id'];
$url = "viewmovie.php?movie_id=".($id);
 ?>
                <a href="<?php echo$url; ?>">
                  <figure class="card-banner">
                    <img src="../thumb/<?php echo$row['img']; ?>">
                  </figure>
                </a>
                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title"><?php echo$row['mv_name']; ?></h3>
                  </a>
                  <time datetime="2022"><?php echo$row['mv_date']; ?></time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline"><?php echo$row['mv_lang']; ?></div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                  </div>
                  <div class="rating">
                  <i class="bi bi-star-fill" style='color:gold;'><data><?php echo$row['mv_imdb']; ?></data></i>
                  </div>
                </div>
              </div>
              
            </li>
            <?php

	}
}
  ?>
          </ul>
         
        </div>
</section>