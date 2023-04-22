<?php 
include 'header.php';
include 'db.php';

if (isset($_POST['submit'])) {
	$mv_name = $_POST['mv_name'];
	$mv_link = $_POST['mv_link'];
	$mv_trailer = $_POST['mv_trailer'];
	$mv_lang = $_POST['mv_lang'];
	$genre_id = $_POST['genre_id'];
	$mv_desc = $_POST['mv_desc'];
	$mv_imdb=$_POST['mv_imdb'];
	$mv_director = $_POST['mv_director'];
	$mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
	$target = "../thumb/".basename($_FILES['img']['name']);
	$img = $_FILES['img']['name'];

	$query="INSERT INTO `movie`(`mv_name`, `mv_link`, `mv_trailer`, `mv_date`, `mv_director`, `genre_id`, `mv_lang`,`mv_imdb`, `img`, `mv_desc`) VALUES ('$mv_name','$mv_link','$mv_trailer','$mv_date','$mv_director','$genre_id','$mv_lang','$mv_imdb','$img','$mv_desc')";

	$run = mysqli_query($con,$query);
	if  (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
		echo "<script>alert('Movie Successfully Added.. :)');window.location.href='movielist.php';</script>";
		
	}
	else{
		echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='addmovie.php';</script>";
		
	}

}

 ?>


