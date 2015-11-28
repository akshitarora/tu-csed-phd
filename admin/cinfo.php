<?php session_start();error_reporting(0);
require 'auth.php';
if(1){
    require 'header.php';
    $conn = new mysqli("localhost", "root", "","phd");
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
                        $sql = "SELECT * FROM STUDENT WHERE regno=".$_GET["regno"].";";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
					<center><h3>COMPLETE INFORMATION OF Ph.D. STUDENT</h3></center><br>
                  </div>
              </div>
              <div class="row jumbotron">
                  <center>
                      <h1><?php echo $row["sname"]; ?></h1>
                      <img src='<?php 
    $path = "img/now/".$row["regno"].".jpg";
    if(file_exists($path)) {
        echo $path;}
    else {
        echo "img/now/avatar1.png";}
                                ?>' class='img-rounded'/>
                  </center>
                  <br><h3><b>Ph.D. Information</b></h3>
                  <p><b>Registration Number</b>: <?php echo $row["regno"];?></p>
                  <p><b>Thesis Title</b>: <?php echo $row["sthesis"];?></p>
                  <p><b>Type</b>: <?php echo $row["full_part"];?> time</p>
                  <p><b>Date of URB</b>: <?php echo $row["sdurb"];?></p>
                  <p><b>Date of Admission</b>: <?php echo $row["sdoa"];?></p>
                  <p><b>Current Status</b>: <?php echo $row["status"];?></p>
                  
                  <?php
                        $sql1 = "SELECT * from courses where sregno = ".$row["regno"]." ORDER BY timestamp DESC;"; 
                        $result3 = mysqli_query($conn,$sql1);
                        echo "<br><h3><b>Coursework Information</b></h3>";
                        while($row2 = mysqli_fetch_assoc($result3)) {
                        $sql2 = "SELECT * from faculty WHERE fid = ".$row2["coordinator_fid"].";";
                        $result4 = mysqli_query($conn, $sql2);
                        $row5 = mysqli_fetch_assoc($result4);
                        echo "<p><b>Course Name</b>: ".$row2["cname"];"</p>";
                        echo "<p><b>Semester Code</b>: ".$row2["semcode"];"</p>";
                        echo "<p><b>Course Credits</b>: ".$row2["credits"];"</p>";
                        echo "<p><b>Class</b>: ".$row2["class"];"</p>";
                        echo "<p><b>Course Co-ordinator</b>: ".$row5["fname"];"</p>";
                        }
                  ?>
                  
                  <?php
                        if($row["comm_id"] != 0 && isset($row["comm_id"])) {
                            $sql4 = "SELECT * from STUDENT, doc_comm where student.comm_id = doc_comm.pno AND regno=".$_GET["regno"].";";
                            
                            $result2 = mysqli_query($conn,$sql4);
                            $row1 = mysqli_fetch_assoc($result2);
                            echo "<br><h3><b>Doctoral Committee Information</b></h3>";
                            echo "<p><b>Chairman</b>: ".$row1["chairman_fid"];"</p>";
                            echo "<p><b>Supervisor 1</b>: ".$row1["supervisor_1_fid"];"</p>";
                            echo "<p><b>Supervisor 2</b>: ".$row1["supervisor_2_fid"];"</p>";
                            echo "<p><b></b>: ".$row1["inside_1_fid"];"</p>";
                        }
                  ?>
                  
                  <br><br><h3><b>Contact Information</b></h3>
                  <p><b>E-mail Id</b>: <?php echo $row["semail"];?></p>
                  <p><b>Phone</b>: <?php echo $row["sphone"];?></p>
                  
                  <br><h3><b>Additional Information</b></h3>
                  <p><b>Date of Birth</b>: <?php echo $row["sdob"];?></p>
                  <p><b>Information last updated</b>: <?php echo $row["timestamp"];?></p>
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