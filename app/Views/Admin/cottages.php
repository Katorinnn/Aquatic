<?php require 'fumction.php' ?>
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
		<a href="<?=('index.php') ?>" class="sidebar-menu-top">
			<img src="logo.png" alt="" class="logo" width="200px" height="200px">
		</a>
		<ul class="side-menu top">
			<li>
            <a href="index.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span  class="text">Dashboard</span>
				</a>
			</li>
            <li>
                <a href="<?=('bookings') ?>" class="sidebar-menu top">
					<i class='bx bxs-group' ></i>
					<span class="text">Bookings</span>
				</a>
			</li>
			<li >
                <a href="<?=('rooms') ?>" class="bx bxs-doughnut-chartsidebar-menu top">
					<i class='bx bxs-dashboard' ></i>
					<span href="rooms.php" class="text">Rooms</span>
					
				</a>
			</li>
			<li class="active">
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
				<img src="admin.png" class="pfp">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Cottages</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Cottages</a>
						</li>
					</ul>
				</div>
			</div>
		<br>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>COTTAGES LIST</h3>
						<a href= "<?=('no')?> "class="btn">ADD COTTAGES</a>
					</div>
				<div id ="horizontal-line"></div>

					<!-- border = 1 cellpadding = 10 cellspacing = 0 -->
			<div class="containers">	
        <table class="table">
			<thead>
				<tr>
					<th>Cottage No.</th>
					<th>Capacity</th>
					<th>Description</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
		<?php 
			$rooms = mysqli_query($conn, "SELECT * FROM tbl_cottage");
			$i = 1;
			
			foreach($rooms as $user):
			?>
				<tr>
				<td style="display:none">#</td>
					<td><?php echo $user["COTTAGENUM"]?></td>
					<td><?php echo $user["CAPACITY"]?></td>
					<td><?php echo $user["DESCRIPTION"]?></td>
					<td> <img src = "website/<?php echo $user["IMAGE"]; ?>"width="100"></td>
					<td>
						<a href="editcott.php?id=<?php echo $user['id']; ?>"><button>EDIT</button></a>
						<form class = "" action="" method = "post">
						<button type = "submit" name = "submit" value = <?php echo $user['id']; ?>> DELETE</button>
						</form>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
</div>	
	
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>