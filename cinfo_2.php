<?php session_start();error_reporting(1);


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
      <!--topbar start-->
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
              <!-- sidebar menu end-->

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
                        $sql1 = "SELECT * FROM student WHERE full_part='full' AND (supervisor1='".$row["fname"]."' OR supervisor2='".$row["fname"]."');";
                        $result1 = mysqli_query($conn,$sql1);
                        $row_cnt1 = mysqli_num_rows($result1);
                        $sql2 = "SELECT * FROM student WHERE full_part='part' AND (supervisor1='".$row["fname"]."' OR supervisor2='".$row["fname"]."');";
                        $result2 = mysqli_query($conn,$sql2);
                        $row_cnt2 = mysqli_num_rows($result2);
                    ?>
					<center><h3>COMPLETE INFORMATION OF FACULTY</h3></center><br>
                  </div>
              </div>
              <div class="row jumbotron">
                  <center>
                      <h1><?php echo $row["fname"];?></h1>
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
                  <p><b>Number of full time Ph.D. students</b>: <?php echo $row_cnt1;?> </p>
                  <p><b>Number of part time Ph.D. students</b>: <?php echo $row_cnt2;?> </p>
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
