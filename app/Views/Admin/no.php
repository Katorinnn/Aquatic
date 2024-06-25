<?php 

require 'function.php' ;

@include 'conf.php';





?>
<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link href="style.css" rel="stylesheet">
   </head>
<body>
<div class = "form-container">
    <form class="" action="" method="post" enctype="multipart/form-data">
    COTTAGENUM
    <input type="text" name="COTTAGENUM"required> <br>
    CAPACITY
    <input type="text" name="CAPACITY" required> <br>
    DESCRIPTION 
    <input type="text" name="DESCRIPTION" required> <br>
    IMAGE 
    <input type="file" name="file" required> <br>
    <button type="submit" name="submit" value="add">ADD</button>
    </form>
     <br>
     <br>
  </div>
     <a href="index.php">Index page</a>
    

</body>
</html>