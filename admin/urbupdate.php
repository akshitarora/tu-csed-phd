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
$regno = test_input($_POST['regno']);
$date = test_input($_POST['date']);
$percent = test_input($_POST['percent']);

$sql = "UPDATE student SET sdurb='".$date."' WHERE regno=".$regno.";";
$sql2 = "INSERT INTO progress(sid,urbdate,percentage) VALUES('$regno','$date','$percent')";

if(mysqli_query($conn,$sql))
{
    mysqli_query($conn,$sql2);
	$_SESSION["success"]=1;
	$_SESSION["message"]="URB Progress updated!";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>