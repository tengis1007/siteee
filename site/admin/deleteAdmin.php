<?php
include 'db.php';
$id=$_GET['unameid'];
$query="DELETE FROM `admin` WHERE admin_id=$id";
$run=mysqli_query($con,$query);
if($run){
    echo "<script>alert('Admin has been Deleted!!');window.location.href='adminList.php';</script>";
}
?>
