<?php
// Database configuration
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db     = 'user_db';

// Establish connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Query to fetch data from tbl_verify
$sql = "SELECT * FROM tbl_datepicker";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquatic Resort</title>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard.css">
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
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
		<a href="<?= ('bookingstaff') ?>" class="sidebar-menu top">
                <i class='bx bxs-group'></i>
                <span class="text">Bookings</span>
            </a>
        </li>
        <li>
		<a href="<?= ('loginform_view') ?>" class="sidebar-menu top">
                <i class='bx bxs-log-out-circle'></i>
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
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link"></a>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile"></a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <?php
    // Retrieve user name from session
    $userName = session()->get('user_name');
    
    if ($userName) {
        echo " <h1>Welcome Back, $userName!</h1>";
    } else {
        echo "<p>User name not found</p>";
    }
    ?>
                </h1>
                <h6><span></span></h6>
                <h6>Staff</h6>
                <ul class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li><a class="active" href="#">Home</a></li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
				<li>	
					<span class="text">
					<?php
						$dbhost = 'localhost:3306';
						$dbuser = 'root';
						$dbpass = '';
						$db     = 'user_db';
						
						
						$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_datepicker WHERE Status = 'Pending'";
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
					<span class="text">
					<?php
					$dbhost = 'localhost:3306';
					$dbuser = 'root';
					$dbpass = '';
					$db     = 'user_db';
					
					
					$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
							$rooms_tbl_verify_query = "SELECT Status FROM tbl_datepicker WHERE Status = 'Cancelled'";
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
					<span class="text">
					<?php
						$dbhost = 'localhost:3306';
						$dbuser = 'root';
						$dbpass = '';
						$db     = 'user_db';
						
						
						$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
							$rooms_tbl_verify_query = "SELECT * FROM tbl_datepicker";
							$rooms_tbl_verify_query_run = mysqli_query($conn, $rooms_tbl_verify_query);

							if($tbl_verify_total = mysqli_num_rows($rooms_tbl_verify_query_run))
							{
							   echo '<h4 class="mb=0"> ' .$tbl_verify_total.' </h4>';
							}else
							{
								echo '<h4 class="mb=0"> 00 </h4>';
							}
							?>	
						<p>Booking Records</p>
					</span>
				</li>
			</ul>

			<section>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Booking History</h3>
					<form action="#" onsubmit="return false;">
        				<div class="form-input">
            				<input type="search" id="searchInput" placeholder="Search..." oninput="searchTable()">
        				</div>
    				</form>
					<i class='bx bx-filter' ></i>
					</div>		
					<div id ="horizontal-line"></div>
					
					<div class="containers">
				<table class="table" id="dataTable">
			<tr>
                        <thead>
                            <tr>
							<th>Guest Name</th>
            <th>Check in</th>
	        <th>Check out</th>
            <th>Room No.</th>
            <th>Cottage No.</th>
		    <th>Email</th>
            <th>Contact_No.</th>
            <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // Display booking records
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
									echo "<td>" . $row['guest_name'] . "</td>";
                                    echo "<td>" . $row['check_in'] . "</td>";
                                    echo "<td>" . $row['check_out'] . "</td>";
                                    echo "<td>" . $row['Room_no.'] . "</td>";
                                    echo "<td>" . $row['Cottage_no.'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['Contact_no.'] . "</td>";
                                    echo "<td>" . $row['Status'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No data available</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<script src="script.js"></script>
</body>
</html>
