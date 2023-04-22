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
$records_per_page = 5; // Display 10 records per page
$total_records=6; // Total number of records
$total_pages = ceil($total_records / $records_per_page); // Calculate total number of pages
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Get current page number from query string
$offset = ($current_page - 1) * $records_per_page; // Calculate offset
$query = "SELECT * FROM movie LIMIT $offset, $records_per_page";
$run = mysqli_query($con, $query);
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
                  <a href="<?php echo$url; ?>">
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
          <br><br>
          <?php
echo '<div class="btn btn-outline-warning">';
if ($current_page > 1) {
    echo '<a  href="?page='.($current_page - 1).'">Previous</a>';
}
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
        echo '<span class="">'.$i.'</span>';
    } else {
        echo '<a href="?page='.$i.'">'.$i.'</a>';
    }
}
if ($current_page < $total_pages) {
    echo '<a href="?page='.($current_page + 1).'">Next</a>';
}
echo '</div>';
?>
        </div>
</section>
<style>
  a {
  color: yellow;
}
  </style>
