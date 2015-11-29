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

$fname = test_input($_POST['fname']);
$dept = test_input($_POST['department']);
$email = test_input($_POST['email']);
$designation = test_input($_POST['designation']);
$rint = test_input($_POST['r_int']);
$url = test_input($_POST['url']);
$dob = test_input($_POST['dob']);
$phone = test_input($_POST['phone']);
$faculty_code = test_input($_POST['faculty_code']);
$password = test_input($_POST['password']);
$password = crypt($password);

$hod = $_POST['hod'];
if(!empty($hod)) {
    $designation .= " and Head of Department";
}
$sql = "INSERT INTO faculty(fname,department,email,designation,r_int,url,dob,phone,faculty_code)    VALUES('$fname','$dept','$email','$designation','$rint','$url','$dob','$phone','$faculty_code');"; 

if(mysqli_query($conn,$sql))
{
$sql1 = "INSERT INTO LOGIN(role,_id,password,full_name,phone,email) VALUES('faculty','$faculty_code','$password','$fname','$phone','$email')";
mysqli_query($conn,$sql1);
$_SESSION["success_faculty_added"]=1;
header('Location: /phd/admin/'); die();
mysqli_close($conn);
}
else {
    $_SESSION["success_faculty_added"]=2;
header('Location: /phd/admin/'); die();
}
?>