<?php
require 'auth.php';
require 'connection.php';
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
$department = test_input($_POST['department']);
$class = test_input($_POST['class']);

$sql = "INSERT INTO courses(sregno,cname,coordinator,credits,semcode,department,class,L,T,P) 
VALUES(".$regno.",'".$cname."','".$coordinator."',".$credits.",'".$semcode."','".$department."','".$class."',".$creditsL.",
	".$creditsT.",".$creditsP.");";
if(mysqli_query($conn,$sql))
{
$_SESSION["success_course_added"]=1;
header('Location: /phd/admin/'); die();
mysqli_close($conn);
}
else {
    $_SESSION["success_course_added"]=2;
    echo $sql;
//header('Location: /phd/admin/'); die();
}
?>