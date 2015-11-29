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
$cname = test_input($_POST['cname']);
$semcode = test_input($_POST['semcode']);
$grade = test_input($_POST['grade']);

$sql = "UPDATE courses SET grade='".$grade."' WHERE sregno=".$regno." AND cname='".$cname."' AND semcode='".$semcode."';";

if(mysqli_query($conn,$sql))
{
	$sqltest = "SELECT * from courses WHERE sregno=".$regno." WHERE grade IS NULL;";
	if(mysqli_query($conn,$sqltest))
	{
		//it means that the student hasn't cleared some subjects and so his / her status must not be updated to URB Pending
	}
	else {
		$sql1 = "UPDATE student SET status='URB Pending' WHERE regno=".$regno.";";
		mysqli_query($conn,$sql1);
	}
	$_SESSION["success_grade_added"]=1;
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success_grade_added"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>