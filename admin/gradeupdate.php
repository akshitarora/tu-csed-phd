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
$_SESSION["success_grade_added"]=1;
header('Location: /phd/admin/'); die();
mysqli_close($conn);
}
else {
    $_SESSION["success_grade_added"]=2;
	header('Location: /phd/admin/'); die();
}
?>