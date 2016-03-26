<?php
session_start();
error_reporting(0);
require 'connection.php';
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }


$sno = $_POST['admin'];
$sqlknow = "SELECT * from login where sno='$sno'";
$resultknow = mysqli_query($conn,$sqlknow);
$rowknow = mysqli_fetch_array($resultknow,MYSQL_ASSOC);

$sql = "DELETE from login WHERE sno='$sno'";
if(mysqli_query($conn,$sql))
{

$_SESSION["success"]=1;
	$_SESSION["message"]="Deleted Administrator with full name = '".$rowknow["full_name"]."' and username = '".$rowknow["_id"]."'.";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success_admin_added"]=2;
echo "<script>window.location.href='/phd/admin/'</script>";
}
?>