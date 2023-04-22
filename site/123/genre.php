<?php
include "db.php";
include "header.php";
?>
<section class="top-rated">
        <div class="container">
          <h2 class="h2 section-title"> Кинонууд</h2>
          <ul class="movies-list">
          <?php 
if (isset($_GET['genre_id'])) {
	$id = $_GET['genre_id'];
		$query = "SELECT * from movie,genre where genre.genre_id=movie.genre_id and genre.genre_id=$id";
		$run = mysqli_query($con,$query);
		if (mysqli_num_rows($run)>0) {
			while ($row=mysqli_fetch_assoc($run)) {
				?>
            <li>
              <div class="movie-card">
              <p class="card-text"></p>

              <?php 
$id1 = $row['movie_id'];
$url1 = "viewmovie.php?movie_id=".($id1);
 ?>
                <a href="<?php echo$url1; ?>"> 
     <figure class="card-banner">
    
                   <img src="../thumb/<?php echo$row['img']; ?>" alt="Sonic the Hedgehog 2 movie poster">
                  </figure>
                </a>
                <div class="title-wrapper">
                  <a href="<?php echo$url1; ?>">
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
		else{
			echo "<h1 class='h2 section-title'>Кино алга байна!</h1>";
		}
	}


  ?>
          </ul>
         
        </div>
</section>