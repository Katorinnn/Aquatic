<?php 
$conn = mysqli_connect("localhost","root","","rooms");
$sql = mysqli_query($conn,"SELECT * FROM tbl_verify");

if (isset($_GET["id"]) && isset($_GET["Status"])){
    $id = $_GET["id"];  
    $status = $_GET["Status"];
    mysqli_query($conn,"UPDATE tbl_verify SET Status ='$status' WHERE id = '$id'");
    header("location:verify.php");
    die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <style>
        *{
            padding: 0%;
            margin: 0px;
            box-sizing: border-box;
        }
        body{
            background: #ccc;
            display: flex;
            justify-content: center;   
        }
        .container{
           margin: auto;
            width: 100%;
            max-width: 900px;
        }
        .container table{
            width: 1000px;
            margin: auto;
            border-collapse: collapse;
            font-size : 30px;;
        }
        section{
            width: 0.5rem 0;
            font-size: 1rem;
        }

    </style>
</head>
<body>
    <div class="container">
    <table border="1">
        <tr>
        <td style="display:none">#</td>
        <th>Guest Name</th>
	    <th>Date</th>
        <th>Room No.</th>
        <th>Cottage No.</th>
        <th>Contact No.</th>
        <th>Status</th>
        <th>Action</th>
        <?php 
        $i = 1;
        if(mysqli_num_rows($sql) > 0) {
            while($row = mysqli_fetch_assoc($sql)) {?>
            <tr>
            <td style="display:none">#</td>
			<td><?php echo $row["GUEST_NAME"]?></td>
			<td><?php echo $row["DATE"]?></td>
			<td><?php echo $row["Room_no."]?></td>
            <td><?php echo $row["Cottage_no."]?></td>
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
            <td>
                <select onchange="status_update(this.options[this.selectedIndex].value,<?php echo $row["id"]?>)">
                <option value="1">Verification</option>
                <option value="Pending">Pending</option>
                    <option value="Verified">Verified</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
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
    let url = "http://localhost:8000/verify.php";
    window.location.href= url+ "?id="+id+"&Status="+value;
}

    </script>
</body>
</html>
