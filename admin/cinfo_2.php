<?php session_start();error_reporting(1);
require 'auth.php';
if(1){
    require 'header.php';
    require 'connection.php';
?>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <?php require 'topbar.php';?>
      <!--header end-->
      
      <!--sidebar start-->
      <?php require 'sidebar.php';?>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
                    <!--ALERTS START -->
                    <!--No alerts here-->
                    <!--ALERTS END -->
                    <?php
                        $sql = "SELECT * FROM FACULTY WHERE faculty_code='".$_GET["f_code"]."';";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
					<center><h3>COMPLETE INFORMATION OF FACULTY</h3></center><br>
                  </div>
              </div>
              <div class="row jumbotron">
                  <center>
                      <h1><?php echo row["fname"];?></h1>
                  </center>
                  <br><h3><b>Faculty Information</b></h3>
                  <p><b>Designation</b>: <?php echo $row["designation"];?></p>
                  <p><b>Department</b>: <?php echo $row["department"];?></p>
                  <p><b>E-mail</b>: <?php echo $row["email"];?></p>
                  <p><b>Research Interests</b>: <?php echo $row["r_int"];?></p>
                  <p><b>Website</b>: <?php echo $row["url"];?></p>
                  <p><b>Faculty Code</b>: <?php echo $row["faculty_code"];?></p>
                  <p><b>Phone Number</b>: <?php echo $row["phone"];?></p>
                  <p><b>Date of Birth</b>: <?php echo $row["dob"];?></p>
              </div>
          </section>
      </section>
      <!--main content end-->
      </section>
  <!--   container section start -->
      
    <!-- javascripts -->
    <?php require 'js.php';?>
  </body>
</html>
<?php
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
            <p>You are not logged in. Please go <a href="../">here</a> first.<br>If you are still unable to log in, kindly contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com.</p>
        </div>
    </body>
</html>
<?php
session_destroy();
}

?>