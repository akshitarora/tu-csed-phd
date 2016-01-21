<?php 
error_reporting(1);
session_start();
if(!isset($_POST['uname']) || !isset($_POST['password'])) {
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="container alert alert-danger">
            <strong><h2>OOPS!</h2></strong>
            <p>Please go <a href="index.php">here</a> first.</p>
        </div>
    </body>
</html>
<?php } else {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }
    $uname = test_input($_POST['uname']);
    $password = test_input($_POST['password']);
    require 'admin/connection.php';
    if(!function_exists('hash_equals')) //for servers with older versions of PHP
{
    function hash_equals($str1, $str2)
    {
        if(strlen($str1) != strlen($str2))
        {
            return false;
        }
        else
        {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--)
            {
                $ret |= ord($res[$i]);
            }
            return !$ret;
        }
    }
}
    $sql = "SELECT * FROM login WHERE _id='$uname'";
    if(mysqli_query($conn,$sql)) {
        $result1 = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
        if (hash_equals($row["password"], crypt($password,$row["password"]))) {
            //echo "Password verified!";
            session_start();
            $_SESSION["loggedin"]="yes";
            $_SESSION["id"]=$uname;
            $_SESSION["name"]=$row["full_name"];
            if($row["role"]=="admin"){
                $_SESSION["role"]="admin";
                echo "<script>window.location.href='/phd/admin/'</script>";die();}
            else if($row["role"]=="student"){
                $_SESSION["role"]="student";
                echo "<script>window.location.href='/phd/student/'</script>";die();}
            else if($row["role"]=="faculty"){
                $_SESSION["role"]="faculty";
                echo "<script>window.location.href='/phd/faculty/'</script>";die();}
            else {
                ?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="container alert alert-danger">
            <strong><h2>OOPS!</h2></strong>
            <p>Data inaccurate! Please contact the administrator. @ akshit [dot] arora1995 [at] gmail [dot] com</p>
        </div>
    </body>
</html>
<?php
            }
        }
        else {
            ?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="container alert alert-danger">
            <strong><h2>OOPS!</h2></strong>
            <p>Password Incorrect. Please go <a href="index.php">here</a> first.</p>
        </div>
    </body>
</html>
<?php
        }
    } else {
        ?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <div class="container alert alert-danger">
            <strong><h2>Sorry!</h2></strong>
            <p>We are unavailable at the moment. Please go <a href="index.php">here</a> first.</p>
        </div>
    </body>
</html>
<?php
    
    session_destroy();}
    session_destroy();
}
?>