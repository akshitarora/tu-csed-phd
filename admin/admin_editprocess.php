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

$full_name = test_input($_POST['full_name']);
$_id = test_input($_POST['_id']);
$email = test_input($_POST['email']);
$phone = test_input($_POST['phone']);
$sno = test_input($_POST['admin']);

$password = test_input($_POST['password']);
$password = crypt($password);

$sql = "UPDATE login SET full_name='$full_name', _id='$_id',email='$email',phone='$phone',password='$password' WHERE sno='$sno' ";
if(mysqli_query($conn,$sql))
{
$_SESSION["success"]=1;
	$_SESSION["message"]="Edited Administrator with new full name = '".$full_name."' and new username = '".$_id."'.";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
   // $_SESSION["success_admin_added"]=2;
    echo $sql;
//echo "<script>window.location.href='/phd/admin/'</script>";
}
?>