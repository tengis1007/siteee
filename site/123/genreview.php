<?php
include "header.php";
include "db.php";
?>

<main>
    <article>

      <!-- 
        - #MOVIE DETAIL
      -->

      <section class="movie-detail">
      <?php 

if (isset($_GET['movie_id'])) {
	$id = $_GET['movie_id'];
	
	$query = "SELECT * FROM movie where movie_id=$idss";
	$run = mysqli_query($con,$query);
	if ($run) {
		while($row = mysqli_fetch_assoc($run)){
			?>
        <div class="container">

          <figure class="movie-detail-banner">

            <img src="../thumb/<?php echo$row['img']; ?>">

            <button class="play-btn">
              <ion-icon name="play-circle-outline"></ion-icon>
            </button>

          </figure>

          <div class="movie-detail-content">

            <p class="detail-subtitle">New Movie</p>

            <h1 class="h1 detail-title"><?php echo$row['mv_name'] ?></h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <strong></strong>

              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php echo$row['mv_date'] ?></time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M">115 min</time>
                </div>

              </div>

            </div>

            <p class="storyline">
              A bank teller called Guy realizes he is a background character in an open world video game called Free
              City that will
              soon go offline.
            </p>

            <div class="details-actions">


              <div class="title-wrapper">
                <p class="title">Languege</p>
                <p class="text"><?php echo$row['mv_lang'] ?></p>
                <p class="title">Director</p>
                <p class="text"><?php echo$row['mv_director'] ?></p>
              </div>
<a href="<?php echo$row['mv_link']; ?>">
              <button class="btn btn-primary">
                <ion-icon name="play"></ion-icon>

                <span>Watch Now</span>
        </a>
              </button>

            </div>


          </div>

  
        </div>
      </section>
      <section class="tv-series">
          <h2 class="h2 section-title">Trailer</h2>
      <div class="title-wrapper"><center>
<iframe  src="https://www.youtube.com/embed/<?php echo$row['mv_trailer']; ?>" width="800" height="500" title="Marvel Studios’ Secret Invasion | Official Trailer | Disney+" frameborder="0" allowfullscreen></iframe>
  </center></div>   
  <?php
		}
	}
}

  ?>
    </article>
</main>





























