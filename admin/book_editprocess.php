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
$rid = $_POST['rid'];
$sql = "UPDATE research_book SET `chapter_title`='".$title."', `authors`='".$authors."', `publisher`='".$pub."', `page_numbers`='".$pages."', `book_publish_year`=".$bpy.", `book_isbn`='".$isbn."', `sid`=".$regno.", `status`='".$status."' WHERE rid='$rid';";
if(mysqli_query($conn,$sql)) {
	$_SESSION["success"]=1;
	$_SESSION["message"]="Book Edited. CHAPTER TITLE = ".$title.", AUTHORS = ".$authors.", PUBLISHERS = ".$pub." and STATUS = ".$status;
	echo "<script>window.location.href='/phd/admin/book.php'</script>";
	
} else {
	$_SESSION["success"]=2;
	
	echo "<script>window.location.href='/phd/admin/book.php'</script>";
}
?>