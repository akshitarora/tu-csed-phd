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
$title = test_input($_POST['title']);
$authors = test_input($_POST['authors']);
$pub = test_input($_POST['publisher']);
$pages = test_input($_POST['pages']);
$bpy = test_input($_POST['bpy']);
$isbn = test_input($_POST['isbn']);
$status = test_input($_POST['status']);
$sql = "INSERT INTO research_book(`chapter_title`, `authors`, `publisher`, `page_numbers`,
 `book_publish_year`, `book_isbn`, `sid`, `status`) VALUES 
('".$title."','".$authors."','".$pub."','".$pages."',".$bpy.",'".$isbn."',".$regno.",'".$status."');";
if(mysqli_query($conn,$sql)) {
	$_SESSION["success"]=1;
	$_SESSION["message"]="Book Added!";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
} else {
	$_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>