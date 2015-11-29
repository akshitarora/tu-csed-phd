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
$coordinator = test_input($_POST['coordinator']);
$creditsL = test_input($_POST['creditsL']);
$creditsT = test_input($_POST['creditsT']);
$creditsP = test_input($_POST['creditsP']);
$credits = $creditsL + $creditsT + $creditsP;
$semcode = test_input($_POST['semcode']);
$department = test_input($_POST['department']);
$class = test_input($_POST['class']);

$sql = "INSERT INTO courses(sregno,cname,coordinator,credits,semcode,department,class,L,T,P) 
VALUES(".$regno.",'".$cname."','".$coordinator."',".$credits.",'".$semcode."','".$department."','".$class."',".$creditsL.",
	".$creditsT.",".$creditsP.");";
if(mysqli_query($conn,$sql))
{
$_SESSION["success_course_added"]=1;
echo "<script>window.location.href='/phd/admin/'</script>";
mysqli_close($conn);
}
else {
    $_SESSION["success_course_added"]=2;
    //echo $sql;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>