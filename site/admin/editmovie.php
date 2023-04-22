<?php
include 'header.php';
include 'db.php';
include 'ft.php';
?>
<?php 

if (isset($_GET['movie_id'])) {
    
$id = $_GET['movie_id'];
$query = "SELECT * FROM movie Where movie_id=$id";
$run = mysqli_query($con,$query);
if ($run) {
  while ($row=mysqli_fetch_assoc($run)) {
    ?>
    <body>
<div class="container">
	<div class="jumbotron">
		<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="mv_name" value="<?php echo$row['mv_name'] ?>" class="form-control" placeholder="Enter Movie Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_link" value="<?php echo$row['mv_link'] ?>"class="form-control" placeholder="Movie link" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_trailer"value="<?php echo$row['mv_trailer'] ?>" class="form-control" placeholder="Trailer link" >
  </div>
  <div class="form-group">
   
    <input type="date" name="mv_date" value="<?php echo$row['mv_date'] ?>" class="form-control" placeholder="Enter Date">
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_director" value="<?php echo$row['mv_director'] ?>" class="form-control" placeholder="Enter Movie Director" >
  </div>
  <?php 
$query3 = "SELECT * FROM genre";
$run3 = mysqli_query($con,$query3);

?>
 <div class="form-group">
<select class="form-control" name="genre_id" aria-label="Default select example">
    <?php while($row3 =mysqli_fetch_array($run3)):;?>
    <option selected value="<?php echo$row3['genre_id'] ?>" ><?php echo$row3['genre_name'] ?></option>
    <?php endwhile; ?>
</select>
 </div> 
  
  

  <div class="form-group">
  <select class="form-control" name="mv_lang" aria-label="Default select example">
  <option selected ><?php echo$row['mv_lang'] ?></option>
  <option >Монгол</option>
  <option >Англи</option>
  <option >Солонгос</option>

</select>
  </div>
  <div class="form-group">
  <select class="form-control" name="mv_imdb" aria-label="Default select example">
  <option selected ><?php echo$row['mv_imdb'] ?></option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  <option >6</option>
  <option >7</option>
  <option >8</option>
  <option >9</option>
  <option >10</option>

</select>
  </div>
  <div >
    <input type="file" name="img"  id="customFile">
    <img src="<?php echo"../thumb/".$row['img'] ?>" height="300px">
    <input type="hidden" name="old_img"  value="<?php echo$row['img'] ?>">

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="form-group">
  <input type="text"value="<?php echo$row['mv_desc'] ?>" name="mv_desc" class="form-control" placeholder="Enter Movie description" rows="4" height="100px">
    
  </div>


  <button type="submit" name="submit1" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>
    </body>
<?php
if (isset($_POST['submit1'])) {
	$mv_name = $_POST['mv_name'];
	$mv_link = $_POST['mv_link'];
	$mv_trailer = $_POST['mv_trailer'];
	$mv_lang = $_POST['mv_lang'];
	$genre_id = $_POST['genre_id'];
	$mv_desc = $_POST['mv_desc'];
	$mv_director = $_POST['mv_director'];
  $mv_imdb=$_POST['mv_imdb'];
	$mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
	$target = "../thumb/".basename($_FILES['img']['name']);
	$newimg = $_FILES['img']['name'];
  $old_img=$_POST['old_img'];

  if ($newimg != '') {
    $update_filename = $newimg;
  }
  else{
    $update_filename=$old_img;
  }
  if ($_File['img']['name']!=''){
    if (file_exists("../thumb/".$newimg)) {
    $filname = $newimg;
    echo "<script>alert('Image Already Added.. :)');window.location.href='addmovie.php';</script>";
  }
}
  else{
    $query1 = " UPDATE `movie` SET `mv_name`='$mv_name',`mv_link`='$mv_link',`mv_trailer`='$mv_trailer',`mv_date`='$mv_date',`mv_director`='$mv_director',`genre_id`='$genre_id',`mv_lang`='$mv_lang',`mv_imdb`='$mv_imdb',`img`='$newimg',`mv_desc`='$mv_desc' WHERE movie_id = $id ";
    $qr = mysqli_query($con,$query1);
    if ($qr) {
        if ($_FILES['img']['name'] !='') {
        if (move_uploaded_file($_FILES['img']['tmp_name'], "../thumb/".$_FILES['img']['name'])) {
          echo "<script>alert('Movie Succesfully Updated');window.location.href='editmovie.php';</script>";
}
else{
     echo "<script>alert('Something Went Wrong!!.. :(');window.location.href='addmovie.php';</script>";
   }
}
}

}
}
   ?>


    <?php
  }
}

}
else{
  header('location:movielist.php');
}

 ?>


