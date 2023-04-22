<?php
include 'header.php';
include 'db.php';
?>
<div class="container">
	<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Genre On Cross Cinema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="addgenre.php">Add a Genre</a>
      </li>
     </ul>
    <ul class="navbar-nav ml-auto">

     <form class="form-inline" method="post" action="searchgenre.php">
    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
    <button class="btn btn-success" name="submit" type="submit">Search</button>
  </form>
    </ul>
  </div>
</nav>
</div>
	<hr>
<table class="table caption-top">
  <caption>List of users</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">POST</th>
      <th scope="col">Curd</th>
      
    </tr>
  </thead>
  <?php
  $query="SELECT * from genre";
  $run = mysqli_query($con,$query);
  if($run) {
    while ($row=mysqli_fetch_assoc($run)) {

  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['genre_id'];?></th>
      <td><?php echo $row['genre_name'];?></td>
      <?php 
$id = $row['genre_id'];
$query2 = "SELECT count(*) as total_post from movie,genre where genre.genre_id=movie.genre_id and genre.genre_id=$id";
$run2 = mysqli_query($con,$query2);
if ($run2) {
  while ($row2=mysqli_fetch_assoc($run2)) {
    ?>
  
<td><?php echo $row2['total_post']; ?></td>
  <?php
    
  }
}

 ?>
      <td><a class="btn btn-outline-info" href="editgenre.php?genre_id=<?php echo $row['genre_id']; ?>&genre_name=<?php echo$row['genre_name']; ?>">EDIT</a></td>
    </tr>
    <?php
    }
    }
    ?>
  </tbody>
</table>
</div>