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
				<form action="login"></form>
            <a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Dashboard</span>
				</a>
				</form>
			</li>
			<li>
                <a href="<?= base_url('Bookings') ?>" class="sidebar-link">
					<i class='bx bxs-group' ></i>
					<span class="text">Bookings</span>
				</a>
			</li>
			<li>
                <a href="<?= base_url('Rooms') ?>" class="sidebar-link">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Rooms</span>
				</a>
			</li>
			<li>
                <a href="<?= base_url('Cottages') ?>" class="sidebar-link">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Cottages</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">...</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">	
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
                <a href="<?= base_url('login') ?>" class="sidebar-link">
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

		<tbody>
							<tr>
								<td>
									<img src="logo.png" width="100px">
									<!-- <p>Katlyn Joy Lopez</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td> -->
							</tr>
							<tr>
								<td>
								<img src="logo.png" width="100px">
									<!-- <p>Ron Zedrick Romilla</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td> -->
							</tr>
							<tr>
								<td>
								<img src="logo.png" width="100px">
									<!-- <p>John Carlo Faustino</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td> -->
							</tr>
							<tr>
								<td>
								<img src="logo.png" width="100px">
									<!-- <p>Gian Cristobal</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td> -->
							</tr>
							<tr>
								<td>
								<img src="logo.png" width="100px">
									<!-- <p>Aaron Romano</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td> -->
							</tr>
						</tbody>