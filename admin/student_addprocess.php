<?php
session_start();
error_reporting(0);
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }

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
$spassword = test_input($_POST['spassword']);
$spassword = crypt($spassword);
$sphone = test_input($_POST['sphone']);
$slid = test_input($_POST['slid']);
$conn = new mysqli("localhost", "root", "","phd");
$sql = "INSERT INTO student(regno,sname,full_part,status,sdob,semail,sbranch,sdoa,sdurb,sthesis,sphone,comm_id,slid)    VALUES('$regno','$sname','$full_part','$status','$sdob','$semail','$sbranch','$sdoa','$sdurb','$sthesis','$sphone','$comm_id','$slid');";
if(mysqli_query($conn,$sql)){
$sql1 = "INSERT INTO LOGIN(role,_id,password,full_name,phone,email) VALUES('student','$regno','$spassword','$sname','$sphone','$semail')";
mysqli_query($conn,$sql1);
$_SESSION["success_student_added"]=1;
if($status=="Coursework"){
	$_SESSION["regno"]=$regno;
	header('Location: /phd/admin/course.php');
} else {
header('Location: /phd/admin/'); die();}
mysqli_close($conn);
} else {
    $_SESSION["success_student_added"]=2;
	header('Location: /phd/admin/'); die();
}
?>