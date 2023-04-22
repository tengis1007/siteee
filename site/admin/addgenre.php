<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Add a Genre</h1>
  <hr class="my-4">
  <form action="addgenre.php" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" name="genrename" class="form-control" placeholder="Genre Name">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Add Genre</button>
</form>
</div>
 	</div>
 </div>

 <?php 

if (isset($_POST['submit'])) {
	$gename = $_POST['genrename'];
	$query = "INSERT INTO `genre`( `genre_name`) VALUES ('$gename')"; 
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>alert('Genre Successfully Added.. :)');window.location.href='genrelist.php';</script>";
	}
	else{
		echo "<script>alert('Something Went Wrong :(');window.location.href='addgenre.php';</script>";
	}

}

  ?>