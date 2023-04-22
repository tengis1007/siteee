<?php 

include 'db.php';
include 'header.php';
 ?>

 <?php 


	$search1 = $_POST['search'];


  ?>
  <br>
  <br>
  <br>
  <br>
 <div class="container">
          <h2 class="h2 section-title"> <CENTER><h4>Хайлтын үр дүн "<?php echo $search1; ?>"</h4></CENTER>
          <ul class="movies-list">
 

 <?php 

if (isset($_POST['submit'])) {
	$search = $_POST['search'];
	$searchpreg =preg_replace("#[^0-9a-z]#i", "", $search);
	$query = "SELECT * FROM movie where mv_name LIKE '%$search%'  OR mv_lang LIKE '%$search%' OR mv_director LIKE '%$search%' or mv_date LIKE '%$search%' ";
	$run = mysqli_query($con,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		echo "<h1>Кино алга байна!!</h1>";
	}
	else{
		while ($row=mysqli_fetch_assoc($run)) {
			?>
                    <?php 
$id = $row['movie_id'];
$url = "viewmovie.php?movie_id=".($id);
 ?>
<li>
              <div class="movie-card">
              <a href="<?php echo$url; ?>">
                  <figure class="card-banner">
                    <img src="../thumb/<?php echo$row['img']; ?>" alt="Sonic the Hedgehog 2 movie poster">
        
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
}

  ?></div>
  </div>
</div>
</div>
