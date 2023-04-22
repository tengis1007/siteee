<?php
include 'header.php';
include 'db.php';
?>
<div class="container">
    <div class="head" style="padding-top: 10px; padding-bottom:10px;text-align:center; ">
        <h1>Admins of MPLAY </h1>
    </div>
<table class="table caption-top">
  <caption>List of users</caption>
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Curd</th>
    </tr>
  </thead>
  <?php
  $query="SELECT * from admin";
  $run = mysqli_query($con,$query);
  if($run) {
    while ($row=mysqli_fetch_assoc($run)) {

  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['admin_id'];?></th>
      <td><?php echo $row['uname'];?></td>
      <td><pre>Password Encrypted</pre></td>
      <td><a class="btn btn-danger" href="deleteAdmin.php?unameid=<?php echo $row['admin_id'];?>">Delete</a></td>
    </tr>
    <?php
    }
    }
    ?>
  </tbody>
</table>
</div>