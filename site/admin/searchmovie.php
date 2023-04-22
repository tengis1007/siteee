<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

 <?php 


	$search1 = $_POST['search'];


  ?>
 <div class="container">
 	<CENTER><h1>Search Result "<?php echo $search1; ?>"</h1></CENTER>
 
 <div class="row">

 <?php 

if (isset($_POST['submit'])) {
	$search = $_POST['search'];
	$searchpreg =preg_replace("#[^0-9a-z]#i", "", $search);
	$query = "SELECT * FROM movie where mv_name LIKE '%$search%'  OR mv_lang LIKE '%$search%' OR mv_director LIKE '%$search%' or mv_date LIKE '%$search%' ";
	$run = mysqli_query($con,$query);
	$count = mysqli_num_rows($run);
	if ($count == 0) {
		echo "<h1>No Movie Found!!</h1>";
	}
	else{
		while ($row=mysqli_fetch_assoc($run)) {
			?>

<div class="card" style="width:200px;height: 350px;
    margin-top:10px;
    text-align: center;">
			<a href="viewmovie.php?id=<?php echo$row['movie_id']; ?>"><?php echo "<img height='150px' width='200' src='../thumb/".$row['img']."'>"; ?></a>
			<div class="card-body">
        <h5 class="card-title"><?php echo $row['mv_name']; ?></h5>
        <p class="card-text"><?php echo $row['mv_lang']; ?></p>
        <a href="viewmovie.php?id=<?php echo$row['movie_id']; ?>" class="btn btn-secondary">View Details</a>
                </div>
</div>

		

			<?php
		}
	}
}

  ?></div>
  </div>
</div>
</div>
