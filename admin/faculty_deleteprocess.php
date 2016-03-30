<?php
require 'auth.php';
require 'connection.php';
error_reporting(0);
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
}
$fid = $_GET["fid"];
$sqlfac = "SELECT * from faculty where fid='$fid'";
$resultfac = mysqli_query($conn,$sqlfac);
$row = mysqli_fetch_assoc($resultfac);
$sql = "DELETE from faculty WHERE fid='$fid'; DELETE from login where role='faculty' AND _id='".$row["faculty_code"]."';";

if(mysqli_multi_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Deleted Faculty.!";
    
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
   
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>