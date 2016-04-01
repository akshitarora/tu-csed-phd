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
$fid = test_input($_POST['fid']);
$fname = test_input($_POST['fname']);
$dept = test_input($_POST['department']);
$email = test_input($_POST['email']);
$designation = test_input($_POST['designation']);
$rint = test_input($_POST['r_int']);
$url = test_input($_POST['url']);
$dob = test_input($_POST['dob']);
$phone = test_input($_POST['phone']);
$faculty_code = test_input($_POST['faculty_code']);



$sql = "UPDATE Faculty SET fname='$fname',department='$dept',email='$email',designation='$designation',r_int='$rint',url='$url',dob='$dob',phone='$phone',faculty_code='$faculty_code' WHERE fid='$fid';";

if(mysqli_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Edited Faculty. !";
	echo "<script>window.location.href='/phd/admin/faculty.php'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
    
	echo "<script>window.location.href='/phd/admin/faculty.php'</script>";
}
?>