<?php require 'fumction.php' ?>


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
			<li class="active">
                <a href="<?=('rooms') ?>" class="bx bxs-doughnut-chartsidebar-menu top">
					<i class='bx bxs-dashboard' ></i>
					<span href="rooms.php" class="text">Rooms</span>
					
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
				<img src="admin.png" class="pfp">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Rooms</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Rooms</a>
						</li>
					</ul>
				</div>
			</div>
		<br>
		<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>ROOMS LIST</h3>
					<form action="#" onsubmit="return false;">
        				<div class="form-input">
            				<input type="search" id="searchInput" placeholder="Search..." oninput="searchTable()">
        				</div>
    				</form>
					<i class=""><button id="addRoomsBtn" class="btn">+</button></i>	
				</div>
				<div id ="horizontal-line"></div>
				<div id="addRoomsModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
            <h3>Add Rooms</h3>
        <div class = "form-container">
			<form class="" action="" method="post" enctype="multipart/form-data">
				Room #
				<input type="text" name="ROOMNUM"required> <br>
				Capacity
				<input type="text" name="CAPACITY" required> <br>
				Description
				<input type="text" name="DESCRIPTION" required> <br>
				Image
			
			<section class="btns">
				<input type="file" name="file" required > <br>
				<br>
				<br>
				<button	type="submit" name="submit" value="add">ADD</button>
			</section>
			</form>
		</div>
	</div>
</div>
				<div class="containers">
            <table class="table">
				<thead>
				<tr>
                <th>ROOMNUM</th>
                <th>CAPACITY</th>
                <th>DESCRIPTION</th>
                <th>IMAGE</th>
                <th>ACTION</th>
            </tr>
				</thead>
				<?php 
			$dbhost = 'localhost:3306';
			$dbuser = 'root';
			$dbpass = '';
			$db     = 'user_db';
			
			
			$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
			$rooms = mysqli_query($conn, "SELECT * FROM tbl_room");
			$i = 1;
			
			foreach ($rooms as $room): ?>
                <tr>
				<td style="display:none">#</td>
                    <td><?= $room['ROOMNUM'] ?></td>
                    <td><?= $room['CAPACITY'] ?></td>
                    <td><?= $room['DESCRIPTION'] ?></td>
                    <td><img src="<?= base_url('uploads/' . $room['IMAGE']) ?>" alt="Room Image" width="100"></td>
                    <td>
                        <a href="<?= site_url('room/edit/' . $room['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="<?= site_url('room/delete/' . $room['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	</div>
	
    </div>
	</div>
	
	</section>
	<!-- CONTENT -->
	

	<script>

var modal = document.getElementById("addRoomsModal");

// Get the button that opens the modal
var addRoomsBtn = document.getElementById("addRoomsBtn");

// When the user clicks the button, open the modal
addRoomsBtn.onclick = function() {
	modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
	modal.style.display = "none";
}

// Close the modal if the user clicks outside of it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

</script>
</body>
</html>