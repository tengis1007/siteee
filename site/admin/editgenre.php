<?php 

include 'header.php';
include 'ft.php';
include 'db.php';
 ?>

<?php 

if (isset($_GET['genre_id'])) {
	$id =$_GET['genre_id'];
	$genrename = $_GET['genre_name'];

	if (isset($_POST['submit'])) {
		$gname = $_POST['gname'];
		$query = "UPDATE `genre` SET `genre_name`='$gname' WHERE genre_id=$id";
		$run = mysqli_query($con,$query);
		if ($run) {
			echo "<script>alert('Genre Successfully Updated.. :)');window.location.href='genreList.php';</script>";
		}
		else{
			echo "<script>alert('Something Went Wrong');window.location.href='editgenre.php';</script>";
		}

	}

}
else{
	header('location:genreList.php');
}

 ?>

 <div class="container">
 	<div class="head">
 		
 		<div class="jumbotron">
  <h1 class="display-4">Edit Genre</h1>
  <p class="lead">Edit Genre and also please mention their Category ID</p>
  <hr class="my-4">
  <form action="#" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" value="<?php echo$genrename; ?>" name="gname" class="form-control" placeholder="Genre Name">
    </div>
  <br><br>
  <button class="btn btn-primary btn-lg" name="submit">Edit Genre</button> &nbsp; &nbsp; &nbsp;
  <a class="btn btn-primary btn-lg" href="genreList.php">Back</a>

</form>
</div>
 	</div>
 </div>
<?php 
	

 ?>