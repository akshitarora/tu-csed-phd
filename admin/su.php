<?php
require 'auth.php';
require 'connection.php';
error_reporting(1);
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
}
$regno = test_input($_POST['regno']);

$sql1 = "SELECT status from student where regno=".$regno.";";
if($result1 = mysqli_query($conn,$sql1)){
	$row1 = mysqli_fetch_assoc($result1);
	if($row1["status"]=="URB Pending") {
		$_SESSION["regnoud"] = $regno;
		//Update status from URB Pending to ONGOING. pe to on
		echo "<script>window.location.href='/phd/admin/petoon.php'</script>";
	}
	if($row1["status"]=="Ongoing") {

		$sql23 = "UPDATE student SET status='Synopsis Submitted' WHERE regno='$regno';";
		if(mysqli_query($conn,$sql23)) {

		$_SESSION["success"]=1;
		$_SESSION["message"]="Updated student's status from Ongoing to <strong>Synopsis Submitted</strong> with registration number = ".$regno." !";
	echo "<script>window.location.href='/phd/admin/'</script>";
} else { echo $sql23;
//$_SESSION["success"]=2;
	//echo "<script>window.location.href='/phd/admin/'</script>";
}
		//Update status from ONGOING to SYNOPSIS SUBMITTED. 
	}
	if($row1["status"]=="Synopsis Submitted") {
		$sql24 = "UPDATE student SET status='Thesis Submitted' WHERE regno='$regno';";
		if(mysqli_query($conn,$sql24)) {
		$_SESSION["success"]=1;
		$_SESSION["message"]="Updated student's status from Synopsis Submitted to <strong>Thesis Submitted</strong> with registration number = ".$regno." !";
	echo "<script>window.location.href='/phd/admin/'</script>";
	} else {$_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";}
		//Update status from SYNOPSIS SUBMITTED to THESIS SUBMITTED.
	}

	if($row1["status"]=="Thesis Submitted") {
		
		//Update status from THESIS SUBMITTED to Ph.D. COMPLETED. 
		$sql2 = "UPDATE student SET status='Ph.D. Completed' WHERE regno='$regno';";
		if(mysqli_query($conn,$sql2)) {
		$_SESSION["success"]=1;
		$_SESSION["message"]="Updated student's status from Thesis Submitted to <strong>Ph.D. Completed</strong> with registration number = ".$regno." !";
	echo "<script>window.location.href='/phd/admin/'</script>";
	} else {$_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";}
	}
	if($row1["status"] == "Coursework") {
		$_SESSION["success"]=1;
		$_SESSION["message"]="The selected student is in the Coursework Stage and still hasn't obtained grades from their added courses. Kindly Add their grades to update their status to URB Pending.";
		echo "<script>window.location.href='/phd/admin/grade.php'</script>";
	}

}
else {
	$_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>