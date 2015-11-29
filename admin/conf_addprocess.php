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
$sid = test_input($_POST['regno']);
$title = test_input($_POST['title']);
$people = test_input($_POST['people']);
$name = test_input($_POST['name']);
$location = test_input($_POST['location']);
$date = test_input($_POST['cdate']);
$status = test_input($_POST['status']);

$sql = "INSERT INTO research_conference(`title`, `people`, `conference_name`, `conference_date`, `conference_location`, `status`, `sid`) VALUES('".$title."','".$people."','".$name."','".$date."','".$location."','".$status."',".$sid.");";

if(mysqli_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Conference Paper added!";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>