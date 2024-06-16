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

    $ROOMNUM = $_POST["ROOMNUM"];
    $CAPACITTY= $_POST["CAPACITY"];
    $DESCRIPTION= $_POST["DESCRIPTION"];
    $filename = $_FILES["file"]["name"];
    $tmpname = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file( $tmpname, 'Aquatic-Resort/' . $newfilename );
    $query = "INSERT INTO tbl_room VALUES('', '$ROOMNUM', '$CAPACITTY', '$DESCRIPTION', '$newfilename' )";-
    mysqli_query($conn, $query);

    echo 
    "
    <script> alert('user added successfully'); document.location.href = 'index.php';</script>
    ";


}
function edit(){
  global $conn ;
  $id = $_GET["id"];
  $ROOMNUM = $_POST["ROOMNUM"];
  $CAPACITY= $_POST["CAPACITY"];
  $DESCRIPTION= $_POST["DESCRIPTION"];
  
  if($_FILES["file"]["error"] != 4){
    $filename = $_FILES["file"]["name"];
    $tmpname = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $filename;

    move_uploaded_file( $tmpname, 'Aquatic-Resort/' . $newfilename );
    $query = "UPDATE tbl_room SET IMAGE = '$newfilename' WHERE id = $id";
    mysqli_query($conn, $query);
  }
    $query = "UPDATE tbl_room SET ROOMNUM = '$ROOMNUM' , CAPACITY = '$CAPACITY', DESCRIPTION = '$DESCRIPTION' WHERE id = $id";
    mysqli_query($conn, $query);

    echo 
    "
    <script> alert('user Edited successfully'); document.location.href = 'index.php';</script>
    ";

}
 

    function delete() {
      global $conn ;
       
      $id = $_POST["submit"];

      $query = "DELETE FROM tbl_room WHERE id = $id";
      mysqli_query( $conn, $query);

      echo 
      "
      <script> 
      confirm('user Deleted successfully')
      </script>
      ";
    }