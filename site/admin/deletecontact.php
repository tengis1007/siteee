<?php 

include 'header.php';
include 'ft.php';
include 'db.php';
if (isset($_GET['contact_id'])) {
	# code...

$id = $_GET['contact_id'];
$query = "DELETE FROM `contact` WHERE contact_id = $id";
$run = mysqli_query($con,$query);
if ($run) {
	echo "<script>alert('Request Has Been Deleted!!');window.location.href='contact.php';</script>";
}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='contact.php';</script>";
	}
}
else{
	header('location:contact.php');
}

 ?>