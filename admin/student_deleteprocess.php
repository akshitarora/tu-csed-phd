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

$old = $_POST['old_student'];

$sql2 = "DELETE from student WHERE regno='$old'";

if(mysqli_query($conn,$sql2))
{
    $_SESSION["success"]=1;
    $_SESSION["message"]="Student with registration number = ".$old." deleted.";
    echo "<script>window.location.href='/phd/admin/'</script>";
    //echo "<script>window.location.href='/phd/admin/'</script>";
    mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
    
    echo "<script>window.location.href='/phd/admin/'</script>";
}
?>