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
$rid = test_input($_POST['rid']);

$sql = "UPDATE research_journal SET title='".$title."',authors='".$auth."',journal_name='".$jname."',journal_volume=".$jv.",journal_no=".$jn.",publish_date='".$pd."',journal_pages='".$jp."',status='".$status."',sid=".$regno.",journal_impact=".$ji.";";
if(mysqli_query($conn,$sql)) {
	$_SESSION["success"]=1;
	$_SESSION["message"]="Journal Edited";
	echo "<script>window.location.href='/phd/admin/'</script>";
	mysqli_close($conn);
} else {
	$_SESSION["success"]=2;
	echo "<script>window.location.href='/phd/admin/'</script>";
}
?>