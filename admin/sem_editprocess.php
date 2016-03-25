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
$semcode = test_input($_POST['semcode']);
$year = test_input($_POST['year']);
$odd = test_input($_POST['odd']);
$old = test_input($_POST['old_semester']);

$sql2 = "UPDATE semester SET semcode='$semcode',year='$year',odd='$odd' WHERE semcode='$old'";

if(mysqli_query($conn,$sql2))
{
    $_SESSION["success"]=1;
    $_SESSION["message"]="Semester updated. OLD SEMESTER CODE = ".$old." . NEW SEMESTER DETAILS: semcode = ".$semcode." , year = ".$year." and odd = ".$odd;
    echo "<script>window.location.href='/phd/admin/'</script>";
    //echo "<script>window.location.href='/phd/admin/'</script>";
    mysqli_close($conn);
}
else {
    //$_SESSION["success"]=2;
    echo $sql2;
    //echo "<script>window.location.href='/phd/admin/'</script>";
}
?>