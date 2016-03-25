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

$dpt_name = test_input($_POST['dpt_name']);
$dpt_code = stripslashes($_POST['dpt_code']);

$sql = "UPDATE department SET dpt_name='$dpt_name',dpt_code='$dpt_code' WHERE dpt_code='$dpt_code';";

if(mysqli_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Edited Department. New department name = '".$dpt_name."' and code = '".$dpt_code."' !";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>