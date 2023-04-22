<?php
include 'header.php';
include 'db.php';
include 'ft.php';
?>
<div class="container">
	<div class="jumbotron">
  <div class="head" style="padding-top: 10px; padding-bottom:10px;text-align:center; ">
        <h1>add movie </h1>
		<form action="newpost.php" method="post" enctype="multipart/form-data">
      <a class
  <div class="form-group">
    <input type="text" name="mv_name" class="form-control" placeholder="Enter Movie Name" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_link" class="form-control" placeholder="Movie link" >
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_trailer" class="form-control" placeholder="Trailer link" >
  </div>
  <div class="form-group">
   
    <input type="date" name="mv_date" class="form-control" placeholder="Enter Date">
  </div>
  <div class="form-group">
   
    <input type="text" name="mv_director" class="form-control" placeholder="Enter Movie Director" >
  </div>
  <?php 

$query = "SELECT * FROM genre";
$run = mysqli_query($con,$query);

?>
<div class="form-group">
<select class="form-control" name="genre_id" aria-label="Default select example">
    <?php while($row =mysqli_fetch_array($run)):;?>
    <option value="" disabled selected hidden>Select genre</option>
    <option value="<?php echo$row['genre_id'] ?>"><?php echo $row[1];?></option>
    <?php endwhile; ?>
</select>
 </div>
  
  

  <div class="form-group">
  <select class="form-control" name="mv_lang" aria-label="Default select example">
  <option value="" disabled selected hidden>Select language</option>
  <option >Монгол</option>
  <option >Англи</option>
  <option >Солонгос</option>

</select>
  </div>
  <div class="form-group">
  <select class="form-control" name="mv_imdb" aria-label="Default select example">
  <option value="" disabled selected hidden>imdb point</option>
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
   <div class="custom-file">
    <input type="file" name="img" id="File">
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
   <textarea type="text" name="mv_desc" class="form-control" placeholder="Enter Movie description" rows="4"></textarea>
    
  </div>


  <button type="submit" name="submit" class="btn btn-info btn-lg">Submit</button>
</form>
	</div>
</div>
</div>
