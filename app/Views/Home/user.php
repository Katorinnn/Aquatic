<?php 

require 'fumction.php' ;

@include 'conf.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:loginform.php');
}

$conn = mysqli_connect("localhost","root","","rooms");
$sql = mysqli_query($conn,"SELECT * FROM tbl_verify");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">

	<title>Aquatic Resort</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="img">
			<img src="logo.png" alt="" width="200px" height="200px">
		</a>
		<ul class="side-menu top">
			<li class="active">
            <a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
                <a href="<?=('bookingstaff.php') ?>" class="sidebar-menu top">
					<i class='bx bxs-group' ></i>
					<span class="text">Bookings</span>
				</a>
			</li>
			<li>
                <a href="<?= ('loginform.php') ?>" class="sidebar-menu top">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
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
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
                    <h1>Welcome Back,
					<span><?php echo $_SESSION['user_name']?>
					</h1>
					<h6><span><?php echo $_SESSION['user_email']?></h6>
					<h6>Staff</h6>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

</div>

					<ul class="box-info">
				<li>
                    <i class='bx bxs-group' ></i>
					<span class="text">
					<?php
						$conn = mysqli_connect("localhost","root","","rooms");
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_verify WHERE Status = 'Pending'";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h4 class="mb=0"> ' .$tbl_verify_total.' </h4>';
							}else
							{
								echo '<h4 class="mb=0"> 00 </h4>';
							}
							?>	
						<p>New Bookings</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<?php
						$conn = mysqli_connect("localhost","root","","rooms");
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_verify WHERE Status = 'Cancelled'";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h4 class="mb=0"> ' .$tbl_verify_total.' </h4>';
							}else
							{
								echo '<h4 class="mb=0"> 00 </h4>';
							}
							?>	
						<p>Cancelled Bookings</p>
					</span>
				</li>
				<li>
                    <i class='bx bxs-group' ></i>
					<span class="text">
					<?php
						$conn = mysqli_connect("localhost","root","","rooms");
							$rooms_tbl_verify_query = "SELECT * FROM tbl_verify";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h4 class="mb=0"> ' .$tbl_verify_total.' </h4>';
							}else
							{
								echo '<h4 class="mb=0"> No Data </h4>';
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
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="containers">
    <table border="1">
        <tr>
        <td style="display:none">#</td>
        <th>Guest Name</th>
	    <th>Date</th>
        <th>Room No.</th>
        <th>Cottage No.</th>
        <th>Contact No.</th>
        <th>Status</th>
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
    
	

	<script src="script.js"></script>
</body>
</html>