<?php
include "header.php";
include "db.php";
?>

<main>
  <article>
    <section class="movie-detail">
      <?php

      if (isset($_GET['movie_id'])) {
        $id = $_GET['movie_id'];
        $query = "SELECT * FROM movie where movie_id=$id";
        $run = mysqli_query($con, $query);
        if ($run) {
          while ($row = mysqli_fetch_assoc($run)) {
      ?>
            <div class="container">

              <figure class="movie-detail-banner">

                <img src="../thumb/<?php echo $row['img']; ?>">

                <button class="play-btn">
                  <ion-icon name="play-circle-outline"></ion-icon>
                </button>
              </figure>
              <div class="movie-detail-content">

                <p class="detail-subtitle">Шилдэг Кино</p>

                <h1 class="h1 detail-title"><?php echo $row['mv_name'] ?></h1>

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

                      <time datetime="2021"><?php echo $row['mv_date'] ?></time>
                    </div>

                    <div>
                      <ion-icon name="time-outline">imdb Оноо</ion-icon>

                      <time datetime="PT115M"><?php echo $row['mv_imdb'] ?></time>
                    </div>

                  </div>

                </div>

                <p class="storyline">
                  <?php echo $row['mv_desc'] ?>
                </p>

                <div class="details-actions">


                  <div class="title-wrapper">
                    <p class="title">Хэл</p>
                    <p class="text"><?php echo $row['mv_lang'] ?></p>
                    <p class="title">Найруулагч</p>
                    <p class="text"><?php echo $row['mv_director'] ?></p>
                    <p class="title">Үзэлт</p>
                    <p class="text"><?php echo $row['views'] ?></p>

                  </div>
                  <script type="text/javascript">
                    function check() {
                      window.open("https://www.youtube.com/");
                    }
                  </script>
                  <form method="POST" action="">
                    <button name="ok" class="btn btn-primary" onclick="check()">Үзэх</button>
                  </form>
                  <?php
                  if (isset($_POST['ok'])) {
                    $id = $_GET['movie_id'];
                    $query2 = "UPDATE movie SET views=views+1  WHERE movie_id= '$id'"; ?>
                  <?php
                    $run2 = mysqli_query($con, $query2);
                    if ($run2) {
                    }
                  }
                  ?>
                </div>
              </div>

            </div>


            </div>
    </section>
    <section class="tv-series">
      <h2 class="h2 section-title">Трайлер</h2>
      <div class="title-wrapper">
        <center>
          <iframe src="https://www.youtube.com/embed/<?php echo $row['mv_trailer']; ?>" width="800" height="500" title="Marvel Studios’ Secret Invasion | Official Trailer | Disney+" frameborder="0" allowfullscreen></iframe>
        </center>
      </div>

  </article>
</main>
<?php
          }
        }
      }

?>