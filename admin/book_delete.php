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

$rid = test_input($_GET["rid"]);
$sql = "DELETE from research_book WHERE rid='$rid';";
if(mysqli_query($conn,$sql)) {
	$_SESSION["success"]=1;
	$_SESSION["message"]="Book Deleted.";
	echo "<script>window.location.href='/phd/admin/book.php'</script>";
	
} else {
	$_SESSION["success"]=2;
	
	echo "<script>window.location.href='/phd/admin/book.php'</script>";
}
?>