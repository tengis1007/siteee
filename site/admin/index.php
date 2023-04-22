<?php
include "header.php";
include "db.php";
?>
<div class="container-fluid position-relative d-flex p-0">
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-2">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
$query = "SELECT count(*) as total_admin from admin";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
?>
                                <p class="mb-2">Total Admin</p>
                                <h6 class="mb-0"><?php echo $row['total_admin']; ?></h6>
                            </div>
                        </div>
   
                        </div>
                        <?php
                    }
	}
    ?>
        
                    <div class="col-sm-6 col-xl-2">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                           
<?php
                            $query2 = "SELECT count(*) as total_genre from genre";
	$run3 = mysqli_query($con,$query2);
	if ($run3) {
		while ($row5 = mysqli_fetch_assoc($run3)) {
?>
                                <p class="mb-2">Total genre</p>
                                <h6 class="mb-0"><?php echo $row5['total_genre']; ?></h6>
                            </div>
                            <?php
    }}?>
                        </div>
                    </div>
                    <?php
                            $query3 = "SELECT count(*) as total_movie from movie";
	$run4 = mysqli_query($con,$query3);
	if ($run4) {
		while ($row4 = mysqli_fetch_assoc($run4)) {
?>
                    <div class="col-sm-6 col-xl-2">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total movie</p>
                                <h6 class="mb-0"><?php echo $row4['total_movie']; ?></h6>
                            </div>
                            <?php
        }}?>
                        </div>
                    </div>
                    <?php
                            $query4 = "SELECT count(*) as total_contact from contact";
	$run5 = mysqli_query($con,$query4);
	if ($run5) {
		while ($row5 = mysqli_fetch_assoc($run5)) {
?>
                    <div class="col-sm-6 col-xl-2">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total contact</p>
                                <h6 class="mb-0"><?php echo $row5['total_contact']; ?></h6>
        <?php
        }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>