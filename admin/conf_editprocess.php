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
$rid = test_input($_POST['rid']);

$sql = "UPDATE research_conference SET `title`='".$title."', `people`='".$people."', `conference_name`='".$name."', `conference_date`='".$date."', `conference_location`='".$location."', `status`='".$status."', `sid`=".$sid." WHERE rid='$rid';";

if(mysqli_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Conference Paper edited!";
	echo "<script>window.location.href='/phd/admin/conf.php'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/conf.php'</script>";
}
?>