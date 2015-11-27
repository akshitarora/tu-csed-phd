<?php
session_start(); error_reporting(0);
?>
<?php
		if(!isset($_SESSION["loggedin"]) && !$_SESSION["role"]=="admin"){
            header('Refresh:0;URL=/phd/index.php');
			die();
        } 
?>			