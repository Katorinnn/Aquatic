
<?php 
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db     = 'user_db';

// Establish connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
$sql = mysqli_query($conn,"SELECT * FROM tbl_datepicker");

if (isset($_GET["id"]) && isset($_GET["Status"])){
    $id = $_GET["id"];  
    $status = $_GET["Status"];
    mysqli_query($conn,"UPDATE tbl_datepicker SET Status ='$status' WHERE id = '$id'");
    header("location:bookingstaff");
    die();
}
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
			<li >
            <a href="user">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
                <a href="<?=('bookings') ?>" class="sidebar-menu top">
					<i class='bx bxs-group' ></i>
					<span class="text">Bookings</span>
				</a>
                </li>
			<li>
                <a href="<?= ('loginform_view') ?>" class="sidebar-menu top">
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
					<h1>Dashboard</h1>
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
        <tr>
        <td style="display:none">#</td>
        <th>Guest Name</th>
            <th>Check in</th>
	        <th>Check out</th>
            <th>Room No.</th>
            <th>Cottage No.</th>
		    <th>Email</th>
            <th>Contact_No.</th>
            <th>Status</th>
        <th>Action</th>
        <?php 
        $i = 1;
        if(mysqli_num_rows($sql) > 0) {
            while($row = mysqli_fetch_assoc($sql)) {?>
            <tr>
            <td style="display:none">#</td>
			<td><?php echo $row["guest_name"]?></td>
			<td><?php echo $row["check_in"]?></td>
			<td><?php echo $row["check_out"]?></td>
			<td><?php echo $row["Room_no."]?></td>
            <td><?php echo $row["Cottage_no."]?></td>
			<td><?php echo $row["email"]?></td>
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
            <td>
                <select onchange="status_update(this.options[this.selectedIndex].value,<?php echo $row["id"]?>)">
                <option value="1">Verification</option>
                <option value="Pending">Pending</option>
                    <option value="Verified">Verified</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
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
    let url = "http://localhost:8080/bookingstaff";
    window.location.href= url+ "?id="+id+"&Status="+value;
}

    </script>
		</main>
    </section>
</body>
</html>
