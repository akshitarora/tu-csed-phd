<?php
session_start();error_reporting(0);
require 'auth.php';
require 'connection.php';
$target_dir = "img/now/";
$target_file = $target_dir . $_SESSION["id"] . ".jpg";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
/* Functionality not needed here, an old photo is also replaceable.
Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
// Check file size => 5 MEGA BYTES
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "jpeg") {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
     $_SESSION["success"]=3;
     $_SESSION["message"]="Your uploaded photo isn't up to the guidelines. Please follow the guidelines properly. If problem persists. Kindly contact the administrator at: akshit [dot] arora1995 [at] gmail [dot] com .";
    echo "<script>window.location.href='/phd/admin/photo_upload.php'</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $sql = "UPDATE login SET photo=1 WHERE _id='".$_SESSION["id"]."';";
        echo $sql;
        if(mysqli_query($conn,$sql)){
            $_SESSION["success"]=1;
    $_SESSION["message"]="Uploaded photo successfully!";
    echo "<script>window.location.href='/phd/admin/photo_upload.php'</script>";
    mysqli_close($conn);
        }
    } else {
        $_SESSION["success"]=2;
    echo "<script>window.location.href='/phd/admin/photo_upload.php'</script>";
    }
}
?>