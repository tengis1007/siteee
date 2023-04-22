<?php 

include 'header.php';
include 'ft.php';
include 'db.php';
 ?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Requests On Cross Cinema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <ul class="navbar-nav ml-auto">
  	 	      <li class="nav-item">
  
      </li>
  	 </ul>
    
  </div>
</nav>
</div>

 <div class="container" style="text-align: center;">
 	<center><h1>Contact List</h1></center>
 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Message</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "select * from contact";
  	$run = mysqli_query($con,$query);
  	if ($run) {
  		while ($row=mysqli_fetch_assoc($run)) {
  			?>

    <tr>
      <th scope="row"><?php echo $row['contact_id']; ?></th>
      <td><?php echo $row['c_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['massage']; ?></td>
 <td><a class="btn btn-danger" href="deletecontact.php?contact_id=<?php echo$row['contact_id'] ?>">Delete</a></td>
    </tr>
   	<?php
  		}
  	}
  	 ?>
  </tbody>
</table>
 </div>