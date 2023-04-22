<?php 
session_start();
include 'db.php';
 ?>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<div class="container">
	<div class="head" style="text-align: center;">
	</div>
	<form action="login.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Admin login</h2>
        <div class="text-center mb-5 text-dark">MPLAY</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="uname" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" name="pwd" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
          </form>
        </div>

      </div>
    </div>
  </div>
</form>
</div>

<?php 

if (isset($_POST['submit'])) {
	$user = $_POST['uname'];
	$pwd = $_POST['pwd'];

	$query = "Select * From admin where uname = '$user'";
	$run = mysqli_query($con,$query);

	if (mysqli_num_rows($run)>0) {
    while ($row=mysqli_fetch_assoc($run)) {
      if(password_verify($pwd,$row['pwd'])){
        $_SESSION['loginsuccesfull']=1;
        echo "<script>alert('Logged in Successfully'); window.location.href='index.php';</script>";
      }
    }
  }
	
	else{
				echo "<script>alert('Check your ID pass - They Not Mactched our Users'); </script>";
			}
    }
 ?>
 <style>
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
</style>