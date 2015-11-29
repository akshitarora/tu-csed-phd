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
$regno = test_input($_SESSION["regnoud"]);
unset($_SESSION["regnoud"]);
$chair = test_input($_POST['chair']);
$supervisor1 = test_input($_POST['supervisor1']);
$supervisor2 = test_input($_POST['supervisor2']);
$cognate1 = test_input($_POST['cognate1']);
$cognate2 = test_input($_POST['cognate2']);
$outside = test_input($_POST['outside']);
$percent = test_input($_POST['percent']);
$sdurb = test_input($_POST['sdurb']);
$sthesis = test_input($_POST['sthesis']);

$sql = "UPDATE student SET status='Ongoing', chair='$chair', supervisor1='$supervisor1', supervisor2='$supervisor2', cognate2 = '$cognate2', cognate1='$cognate1', outside='$outside', sthesis='$sthesis', sdurb='$sdurb' WHERE regno=".$regno.";";

if(mysqli_query($conn,$sql))
{
	$sql1 = "INSERT INTO progress(sid,urbdate,percentage) VALUES('$regno','$sdurb','$percent');";
	mysql_query($sql1);
	$_SESSION["success"]=1;
	$_SESSION["message"]="Updated student's status from URB Pending to <strong>Ongoing</strong> with registration number = ".$regno." !";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>