<?php
include "db.php";
?>
<?php 
if (isset($_POST['ok'])) {
	$query3 = "UPDATE movie SET views=views+1 WHERE movie_id=$id";
	$run3 = mysqli_query($con,$query3);
	if ($run3) {
		while($row = mysqli_fetch_assoc($run3)){
			
		echo "<script>alert('Admin Successfully Added.. :)');window.location.href='';</script>";

	}
	{
		
	}
}
}
  ?>