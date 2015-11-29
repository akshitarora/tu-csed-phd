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
$regno = test_input($_POST['sid']);
$title = test_input($_POST['title']);
$status = test_input($_POST['status']);
$jp = test_input($_POST['journal_pages']);
$pd = test_input($_POST['publish_date']);
$jn = test_input($_POST['journal_number']);
$jv = test_input($_POST['journal_volume']);
$jname = test_input($_POST['journal_name']);
$auth = test_input($_POST['authors']);
$ji = test_input($_POST['journal_impact']);

$sql = "INSERT INTO research_journal(title,authors,journal_name,journal_volume,journal_no,publish_date,journal_pages,status,sid,journal_impact) VALUES ('".$title."','".$auth."','".$jname."',".$jv.",".$jn.",'".$pd."','".$jp."','".$status."',".$regno.",".$ji.");";
if(mysqli_query($conn,$sql)) {
	$_SESSION["success"]=1;
	$_SESSION["message"]="Journal added";
	header('Location: /phd/admin/'); die();
	mysqli_close($conn);
} else {
	$_SESSION["success"]=2;
	header('Location: /phd/admin/'); die();
}
?>