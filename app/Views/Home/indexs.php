<?php require 'fumction.php' ?>
<html>
	<head></head>
	<body>
	<table border = 1 cellpadding = 10 cellspacing = 0>
            <td style="display:none">#</td>
			<td>ROOMNUM</td>
			<td>CAPACITY</td>
			<td>DESCRIPTION</td>
			<td>IMAGE</td>
			<td>ACTION</td>

		</tr>
		<?php 
		$rooms = mysqli_query($conn, "SELECT * FROM tbl_room");
		$i = 0;
		
		foreach($rooms as $user):
		?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $user["ROOMNUM"]?></td>
			<td><?php echo $user["CAPACITY"]?></td>
			<td><?php echo $user["DESCRIPTION"]?></td>
			<td> <img src = "website/<?php echo $user["IMAGE"]; ?>"width="100"></td>
			<td>
				<a href="edituser.php?id=<?php echo $user['id']; ?>"><button>EDIT</button></a>
				<form class = "" action="" method = "post">
				<button type = "submit" name = "submit" value = <?php echo $user['id']; ?>> DELETE</button>
				</form>
		</tr>
		<?php endforeach; ?>
	</table>



	</body>
</html>
