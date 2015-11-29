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

$sql2 = "INSERT INTO semester(semcode,year,odd) VALUES('".$semcode."','$year','$odd')";

if(mysqli_query($conn,$sql2))
{
    $_SESSION["success"]=1;
    $_SESSION["message"]="Semester added!";
    echo "<script>window.location.href='/phd/admin/'</script>";
    //echo "<script>window.location.href='/phd/admin/'</script>";
    mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
    echo "<script>window.location.href='/phd/admin/'</script>";
}
?>