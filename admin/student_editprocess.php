<?php
session_start();
error_reporting(0);
require 'auth.php';
require 'connection.php';
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }
$sid = test_input($_POST['sid']);
$regno = test_input($_POST['regno']);
$sname = test_input($_POST['sname']);
$full_part = test_input($_POST['full_part']);
$status = test_input($_POST['status']);
$sdob = test_input($_POST['sdob']);
$semail = test_input($_POST['semail']);
$sbranch = test_input($_POST['sbranch']);
$sdoa = test_input($_POST['sdoa']);
$sdurb = test_input($_POST['sdurb']);
$sthesis = test_input($_POST['sthesis']);
//$spassword = test_input($_POST['spassword']);
//$spassword = crypt($spassword);
$sphone = test_input($_POST['sphone']);
$chair = test_input($_POST['chair']);
$supervisor1 = test_input($_POST['supervisor1']);
$supervisor2 = test_input($_POST['supervisor2']);
$cognate1 = test_input($_POST['cognate1']);
$cognate2 = test_input($_POST['cognate2']);
$outside = test_input($_POST['outside']);
//$percent = test_input($_POST['percent']);

$sql = "UPDATE student SET regno='$regno',sname='$sname',full_part='$full_part',status='$status',sdob='$sdob',semail='$semail',sbranch='$sbranch',sdoa='$sdoa',sdurb='$sdurb',sphone='$sphone',chair='$chair',supervisor1='$supervisor1',supervisor2='$supervisor2',cognate1='$cognate1',cognate2='$cognate2',outside='$outside',sthesis='$sthesis' WHERE sid='$sid';";
if(mysqli_query($conn,$sql)){
//$sql1 = "INSERT INTO login(role,_id,password,full_name,phone,email) VALUES('student','$regno','$spassword','$sname','$sphone','$semail')";
//mysqli_query($conn,$sql1);
$_SESSION["success"]=1;
$_SESSION["message"] = "Student Edited!";
if($status=="Coursework"){
	
	echo "<script>window.location.href='/phd/admin/'</script>";
} else {
    
echo "<script>window.location.href='/phd/admin/'</script>";
}
mysqli_close($conn);
} else {
    $_SESSION["success_student_added"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>