<?php


$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db     = 'user_db';


$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
$sql = mysqli_query($conn,"SELECT * FROM tbl_datepicker");

?>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="<?=('index') ?>" class="sidebar-menu-top">
			<img src="logo.png" alt="" width="200px" height="200px">
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
				<img src="admin.png" class="pfp">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<?php 
				$userName = session()->get('user_name');
    
    		if ($userName) {
        	echo " <h1>Welcome Back, $userName!</h1>";
   			 } else {
        		echo "<p>User name not found</p>";
   				 }
    		?>
		
					
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
								echo '<h4 class="mb=0"> No Data </h4>';
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
				<td style="display:none">#</td>
					<th class="1">Guest Name</th>
					<th class="1">Check in</th>
					<th class="1">Check out</th>
					<th class="1">Room #</th>
					<th class="1">Cottage #</th>
					<th class="1">Email</th>
					<th class="1">Contact No.</th>
					<th class="1">Status</th>
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
				
				</tr>
				<?php }
			}
			?>
        </tr>
    </table>
    </div>
<script type="text/javascript">
function status_update(value,id){
    let url = "http://localhost:8080/bookings.php";
    window.location.href= url+ "?id="+id+"&Status="+value;
}

    </script>
		</main>
    </section>
	</div>
	<script src="script.js"></script>
</body>
</html>
