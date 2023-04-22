<?php
include 'header.php';
include 'db.php';
include 'ft.php';
?>
<div class="container">
	<div class="head" style="text-align: center;">
	</div>
	<form action="registerAdmin.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5"> Register admin for MPLAY</h2>
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
            <div class="text-center"><button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Sign up</button></div>
          </form>
        </div>

      </div>
    </div>
  </div>
</form>
</div>
<?php 
if (isset($_POST['submit'])) {

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$hash = password_hash("$pwd", PASSWORD_BCRYPT);

	$query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>alert('Admin Successfully Added.. :)');window.location.href='adminlist.php';</script>";

	}
	else{
		echo "something wrong";
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
