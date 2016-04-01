<?php session_start();error_reporting(0);
    require 'admin/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Akshit Arora, Abhinav Garg and Chahak Gupta">
        <meta name="description" content="Thapar University Ph.D. Portal">
        <!--
    For Suggestions contact -> Akshit Arora (akshit.arora1995@gmail.com)
    -->
    <meta property="og:url" content="http://onlinehostelj.in/phd/" />
<meta property="og:title" content="TU CSED Ph.D. Portal" />
<meta property="og:description" content="Information about ongoing research in various departments at Thapar University, Patiala. Young, motivated and dedicated faculty with a good ratio of faculty with Ph.D. Degree. Many faculty have certifications in cutting edge technology areas of Computer Science and Engineering. Department has Produced 30 PhDs in niche areas of Computer Engineering including Machine Learning, Data Mining and Cloud Computing. " />
<meta property="og:type" content="website" />
<!--
<meta property="og:image" content="cgpcc12.jpg" />-->
        <meta property="og:site_name" content="Ph.D. Portal for Thapar University, Patiala"/>
        <meta name="keyword" content="Ph.D., Portal, Thapar University, Patiala, India, Doctrate, Graduates, Education, Academia, www.thapar.edu, www.onlinehostelj.in, online, Thapar, University,
        Academic, Institution, Study, computer science and engineeing department, department, schools, computer, science, CSED">
    <link rel="shortcut icon" href="tu_icon.ico">
    <title>Admin Panel</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.1.1/css/bootcards-desktop.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="admin/js/bootcards.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.3/fastclick.min.js"></script>
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />
    <!--
    For Suggestions contact -> Akshit Arora (akshit.arora1995@gmail.com)
    -->
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--topbar starts-->
      <header class="header dark-bg">
                  <div class="toggle-nav">
                      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
                  </div>
                  <a href="browse_2.php" class="logo"><span class="lite">PORTAL</span></a>
                 <div class="top-nav notification-row">
                      <ul class="nav pull-right top-menu">
                          <li class="dropdown">
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                  <span class="profile-ava">
                                      <img alt="" src="admin/img/now/<?php      $path = "admin/img/now/avatar1_small.jpg";  if(file_exists($path)) {             echo "avatar";     }?>1_small.jpg">
                                  </span>
                                  <span class="username"><?php echo $_SESSION["name"];?></span>
                                  <b class="caret"></b>
                              </a>
                          </li>
                          <!-- user login dropdown end -->
                      </ul>
                      <!-- notificatoin dropdown end-->
                  </div>
            </header>
      <!--topbar end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">

                  <li>
                      <a class="" href="browse_2.php">
                          <i class="icon_document_alt"></i>
                          <span>Search</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_document_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="browse.php">
                          <i class="icon_document_alt"></i>
                          <span>Browse All</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="contact.php">
                          <i class="icon_document_alt"></i>
                          <span>Contact Us</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="developers.php">
                          <i class="icon_document_alt"></i>
                          <span>Developers</span>
                      </a>
                  </li>
              </ul>
</aside>
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
        echo "admin/img/now/avatar1.png";}
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
                        if(mysqli_query($conn,$sql1)){
                          $result3 = mysqli_query($conn,$sql1) ;
                        echo "<br><h3><b>Coursework Information</b></h3>";
                        while($row2 = mysqli_fetch_assoc($result3)) {
                        echo "<p><b>Course Name</b>: ".$row2["cname"]."</p>";
                        echo "<p><b>Semester Code</b>: ".$row2["semcode"];"</p>";
                        echo "<p><b>Course Credits</b>: ".$row2["credits"];"</p>";
                        echo "<p><b>Class</b>: ".$row2["class"];"</p>";
                        echo "<p><b>Course Co-ordinator</b>: ".$row2["coordinator"];"</p>";
                        echo "<p><b>Department</b>: ".$row2["department"];"</p>";
                        echo "<p><b>Grade Obtained</b>: ".$row2["grade"];"</p>";
                        }
                      }
                  ?>

                  <?php
                            echo "<br><h3><b>Doctoral Committee Information</b></h3>";
                            echo "<p><b>Chairperson Board of Studies(Ex-officio)</b>: ".$row["chair"];"</p>";
                            echo "<p><b>Supervisor(s)</b>: ".$row["supervisor1"].",&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $row["supervisor2"]."</p>";
                            echo "<p><b>Two Faculty Members in the cognate area from the Department</b>: ".$row["cognate1"].",&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo $row["cognate2"]."</p>";
                            echo "<p><b>One faculty Member from outside the Department/School</b>: ".$row["outside"];"</p>";
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
