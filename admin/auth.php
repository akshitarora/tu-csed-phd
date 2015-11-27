<?php
session_start();
?>
<?php
		if(!isset($_SESSION["loggedin"]) && !$_SESSION["role"]=="admin"){
            header('Refresh:0;URL=/phd/index.php');
			die();
        } 
?>			