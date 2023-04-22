<?php 

include 'db.php';
include 'header.php';
include 'ft.php';
 ?>

<div class="container">
	
  <form action="searchmovie.php" method="post">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Movies On Cross Cinema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <ul class="navbar-nav ml-auto">
  	 	      <li class="nav-item">
        <a class="btn btn-warning text-light" href="addmovie.php">Add a Movie</a>
      </li>
  	 </ul>
    <ul class="navbar-nav ml-auto">

 		 <form class="form-inline" method="post" action="searchmovie.php">
    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
    <button class="btn btn-success" name="submit" type="submit">Search</button>
  </form>
    </ul>
  </div>
</nav>
</div>

		
	
		
<div class="container">
  

<div class="row">
<?php 

$query = "SELECT * FROM movie";
$run = mysqli_query($con,$query);

if ($run) {
	while ($row = mysqli_fetch_assoc($run)) {
		?>
  <div class="col-md-2">
    <div class="card" style="width:200px;
    height: 400px;
    margin-top:10px;
    text-align: center;
    ">
    <p><?php echo $row['movie_id']; ?></p>
     <?php echo "<img height='150px' width='200' src='../thumb/".$row['img']."'>"; ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['mv_name']; ?></h5>
        <p class="card-text"><?php echo $row['mv_lang']; ?></p>
        <a href="viewmovie.php?id=<?php echo$row['movie_id']; ?>" class="btn btn-secondary">View Details</a>
      <br>
      <br>
      <button onclick="myFunction()" class="btn btn-danger">DELETE</button>
      <script>
  //show a confirmation and redirect to the delete profile script
  function myFunction() {
    if (confirm("Delete movie ")) {
        location.href = "deletemovie.php?movie_id=<?php echo$row['movie_id'] ?>";
    }
}
</script>
      <a href="editmovie.php?movie_id=<?php echo$row['movie_id'] ?>" class="btn btn-info ">Edit</a>
</div>

    </div>
  </div><?php		
	}}

 ?>
</div>
	</div>