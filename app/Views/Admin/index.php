<?php
require 'fumction.php' ;

$conn = mysqli_connect("localhost","root","","user_db");



if (!isset($_SESSION['admin_name'])) {
    header('location:loginform');
}

$conn = mysqli_connect("localhost","root","","rooms");
$sql = mysqli_query($conn,"SELECT * FROM tbl_verify");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">`
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="dashboard.css">
	
	<title>Aquatic Resort</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="<?=('index.php') ?>" class="sidebar-menu-top">
			<img src="logo.png" alt="" class="logo" width="200px" height="200px">
		</a>
		<ul class="side-menu top">
			<li class="active">
            <a href="index.php">
				<i class='bx bxs-doughnut-chart' ></i>
				<span class="text">Dashboard</span>
			</a>
			</li>
			<li>
                <a href="<?=('bookings') ?>" class="sidebar-menu top">
					<i class='bx bxs-group' ></i>
					<span class="text">Bookings</span>
				</a>
			</li>
			<li>
                <a href="<?=('rooms') ?>" class="sidebar-menu top">
					<i class='bx bxs-dashboard' ></i>
					<span  class="text">Rooms</span>
				</a>
			</li>
			<li>
                <a href="<?= ('cottages') ?>" class="sidebar-menu top">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Cottages</span>
				</a>
			</li>	
			<li>
                <a href="<?= ('loginform') ?>" class="sidebar-menu top">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
					<input type="checkbox" id="switch-mode" hidden>
				<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num"></span>
			</a>
			<a href="#" class="profile">
				<img src="admin.png" class="pfp">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
				<h1>Welcome Back, Admin!
					<?php if(isset($_SESSION['admin_name'])) { ?>
					<span><?php echo $_SESSION['admin_name']; ?></span><?php } ?>

				<h2></h2>
					<?php if (isset($_SESSION['admin_email'])){?>
					<span><?php echo $_SESSION['admin_email']; ?></span><?php } ?>
					
					<!-- <h6>Admin</h6> -->
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Dashboard</a>
						</li>
					</ul>
				</div>

			</div>
			<ul class="box-info">
				<li>	
					<span class="text">
					<?php
						$conn = mysqli_connect("localhost","root","","rooms");
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_verify WHERE Status = 'Pending'";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h1 class="mb=0"> ' .$tbl_verify_total.' </h1>';
							}else
							{
								echo '<h1 class="mb=0"> 00 </h1>';
							}
							?>	
						<p>New Bookings</p>
						
					</span>
				</li>
				<li>
					<span class="text">
					<?php
						$conn = mysqli_connect("localhost","root","","rooms");
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_verify WHERE Status = 'Cancelled'";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h1 class="mb=0"> ' .$tbl_verify_total.' </h1>';
							}else
							{
								echo '<h1 class="mb=0"> 00 </h1>';
							}
							?>	
						<p>Cancelled Bookings</p>
					</span>
				</li>
				<li>
					<span class="text">
					<?php
						$conn = mysqli_connect('localhost','root','','rooms');
							$rooms_tbl_verify_query = "SELECT * FROM tbl_verify";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h1 class="mb=0"> ' .$tbl_verify_total.' </h4>';
							}else
							{
								echo '<h1 class="mb=0"> No Data </h1>';
							}
							?>	
						<p>Booking Records</p>
					</span>
				</li>
			</ul>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Booking History</h3>
				<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"></i></button>
				</div>
			</form>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>		
					<div id ="horizontal-line"></div>
				<!-- <div class="containers"> -->
			<table class="table">
				<thead>
				<tr>
					<th>Guest Name</th>
					<th >Date</th>
					<th>Room No.</th>
					<th>Cottage No.</th>
					<th>Contact No.</th>
					<th>Status</th>
				</tr>
				</thead>
				</div>
			<?php 
			$i = 1;
				if(mysqli_num_rows($sql) > 0) {
					while($row = mysqli_fetch_assoc($sql)) {?>
					<tr>
						<td style="display:none">#</td>
						<td><?php echo $row["GUEST_NAME"]?></td>
						<td><?php echo $row["DATE"]?></td>
						<td><?php echo $row["Room_no."]?></td>
						<td><?php echo $row["Cottage_no."]?></td>
						<td><?php echo $row["Contact_no."]?></td>
					<td>
					<?php 
					if($row["Status"] == "Pending") {
						echo"Pending";
					}if($row["Status"] == "Verified") {
						echo"Verified";
					}if($row["Status"] == "Cancelled") {
						echo"Cancelled";}
					?>
				</td>
				
				</tr>
				<?php }
			}
			?>
        </tr>
    </table>
    </div>
<script type="text/javascript">
function status_update(value,id){
    let url = "http://localhost:8000/bookings.php";
    window.location.href= url+ "?id="+id+"&Status="+value;
}

    </script>
		</main>
    </section>
	</div>
	<script src="script.js"></script>
</body>
</html>
