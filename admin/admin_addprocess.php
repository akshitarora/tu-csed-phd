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

$full_name = test_input($_POST['full_name']);
$_id = test_input($_POST['_id']);
$email = test_input($_POST['email']);
$phone = test_input($_POST['phone']);

$password = test_input($_POST['password']);
$password = crypt($password);
$conn = new mysqli("localhost", "root", "","phd");
$sql = "INSERT INTO LOGIN(role,_id,password,full_name,phone,email) VALUES('admin','$_id','$password','$full_name','$phone','$email');";
if(mysqli_query($conn,$sql))
{
$_SESSION["success_admin_added"]=1;
header('Location: /phd/admin/'); die();
mysqli_close($conn);
}
else {
    $_SESSION["success_admin_added"]=2;
header('Location: /phd/admin/'); die();
}
?>