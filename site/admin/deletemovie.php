<?php 

include 'db.php';
include 'header.php';
include 'ft.php';

if (isset($_GET['movie_id'])) {
	$id = $_GET['movie_id'];
	$query = "DELETE FROM `movie` WHERE movie_id=$id";
	$run = mysqli_query($con,$query);
	if ($run) {
		header('location:movielist.php');
	}
	else{
		echo "<script>alert('Something went Wrong!!');window.location.href='movielist.php';</script>";
	}
}
else{
	header('location:movielist.php');
}

 ?>