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
					<form action="#" onsubmit="return false;">
        				<div class="form-input">
            				<input type="search" id="searchInput" placeholder="Search..." oninput="searchTable()">
        				</div>
    				</form>
						<i class=""><button id="addCottagesBtn" class="btn">+</button></i>	
					</div>
				<div id ="horizontal-line"></div>
			<div id="addCottagesModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
			<div class = "form-container">
				<form class="" action="" method="post" enctype="multipart/form-data">
				Cottage #
				<input type="text" name="COTTAGENUM"required> <br>
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
	<div id ="horizontal-line"></div>
		<div class="containers">	
			<table class="table">
				<thead>
				<div class="containers">	
			<tr>
				<td>COTTAGENUM</td>
				<td>CAPACITY</td>
				<td>DESCRIPTION</td>
				<td>IMAGE</td>
				<td>ACTION</td>
			</tr>
				<div id="editModal" class="modal">
					<div class="modal-content">
						<span class="close" onclick="closeModal()">&times;</span>
						<h2>Edit Cottage</h2>
						<form id="editForm" enctype="multipart/form-data">
							<input type="hidden" id="editItemId" name="editItemId" value="">
							<div class="form-group">
								<label for="editCottageNo">Cottage Number</label>
								<input type="text" id="editCottageNo" name="editCottageNo">
							</div>
							<div class="form-group">
								<label for="editCapacity">Capacity:</label>
								<input type="text" id="editCapacity" name="editCapacity">
							</div>
							<div class="form-group">
								<label for="editDescription">Description:</label>
								<textarea id="editDescription" name="editDescription"></textarea>
							</div>
							<div class="form-group">
								<label for="editImage">Upload Image:</label>
								<input type="file" id="editImage" name="editImage">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
				</tr>
			</thead>
		<?php 
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = '';
		$db     = 'user_db';
		
		
		$conn  = mysqli_connect($dbhost,$dbuser,'',$db);
		$rooms = mysqli_query($conn, "SELECT * FROM tbl_cottage");
		$i = 1;
		foreach($rooms as $user):
			?>
			<tr>
			<td style="display:none">#</td>
				<td><?php echo $user["COTTAGENUM"]?></td>
				<td><?php echo $user["CAPACITY"]?></td>
				<td><?php echo $user["DESCRIPTION"]?></td>
				<td> <img src = "C:\Users\Acer\Documents\Aquatic-Resort BBBBBBBBBUP\public\uploads<?php echo $user["IMAGE"]; ?>"width="100"></td>
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
	<script>
		var modal = document.getElementById("addCottagesModal");

// Get the button that opens the modal
var addCottagesBtn = document.getElementById("addCottagesBtn");

// When the user clicks the button, open the modal
addCottagesBtn.onclick = function() {
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