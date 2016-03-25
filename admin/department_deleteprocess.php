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

$dpt_code = stripslashes($_POST['sbranch']);

$sql = "DELETE from department WHERE dpt_code='$dpt_code';";

if(mysqli_query($conn,$sql))
{
	$_SESSION["success"]=1;
	$_SESSION["message"]="Deleted Department. Code = '".$dpt_code."' !";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
}
else {
    $_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>