<?php 
$conn = mysqli_connect("localhost","root","","rooms");

if(isset($_POST["submit"])){
    if($_POST["submit"] == "add"){
          add();
        }
        else if ($_POST["submit"] == "edit"){
            edit();
          } else {
            delete();
          }
        }
function add(){
    global $conn;

    $COTTAGENUM = $_POST["COTTAGENUM"];
    $CAPACITTY= $_POST["CAPACITY"];
    $DESCRIPTION= $_POST["DESCRIPTION"];
    $filename = $_FILES["file"]["name"];
    $tmpname = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file( $tmpname, 'Aquatic-Resort/' . $newfilename );
    $query = "INSERT INTO tbl_cottage VALUES('','$COTTAGENUM', '$CAPACITTY', '$DESCRIPTION', '$newfilename' )";-
    mysqli_query($conn, $query);

    echo 
    "
    <script> alert('user added successfully'); document.location.href = 'index.php';</script>
    ";


}
function edit(){
  global $conn ;
  $id = $_GET["id"];
  $COTTAGENUM = $_POST["COTTAGENUM"];
  $CAPACITY= $_POST["CAPACITY"];
  $DESCRIPTION= $_POST["DESCRIPTION"];
  
  if($_FILES["file"]["error"] != 4){
    $filename = $_FILES["file"]["name"];
    $tmpname = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file( $tmpname, 'Aquatic-Resort/' . $newfilename );
    $query = "UPDATE tbl_cottage SET IMAGE = '$newfilename' WHERE id = $id";
    mysqli_query($conn, $query);
  }
    $query = "UPDATE tbl_cottage SET COTTAGENUM = '$COTTAGENUM' , CAPACITY = '$CAPACITY', DESCRIPTION = '$DESCRIPTION' WHERE id = $id";
    mysqli_query($conn, $query);

    echo 
    "
    <script> alert('user Edited successfully'); document.location.href = 'index.php';</script>
    ";

}
 

    function delete() {
      global $conn ;
       
      $id = $_POST["submit"];

      $query = "DELETE FROM tbl_cottage WHERE id = $id";
      mysqli_query( $conn, $query);

      echo 
      "
      <script> 
      confirm('user Deleted successfully')
      </script>
      ";
    }