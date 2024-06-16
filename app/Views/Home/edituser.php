<?php 
require 'fumction.php' ;
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_room WHERE id = $id"));

?>
<!DOCTYPE html>
<html>
<body>
    <form class="" action="" method="post" enctype="multipart/form-data">
    ROOMNUM
    <input type="text" name="ROOMNUM" value = "<?php echo $user['ROOMNUM']; ?>" > <br>
    CAPACITY
    <input type="text" name="CAPACITY" value = "<?php echo $user['CAPACITY']; ?>" > <br>
    DESCRIPTION 
    <input type="text" name="DESCRIPTION" value = "<?php echo $user['DESCRIPTION']; ?>" > <br>
    IMAGE 
    <input type="file" name="file" > <br>
    <button type="submit" name="submit" value="edit">EDIT</button>
    </form>
     <br>
     <br>
  
     <a href="index.php">Index page</a>


</body>
</html>