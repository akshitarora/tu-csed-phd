<?php
session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
require 'header.php';
    $conn = new mysqli("localhost", "root", "","phd");
?>
<body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>
            <a href="index.php" class="logo"><span class="lite">Admin</span></a>
           <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/now/<?php      $path = "img/now/".$_SESSION["id"]."1_small.jpg";  if(file_exists($path)) {    echo $_SESSION["id"];} else {         echo "avatar";     }?>1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION["name"];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="signout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Add People</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a class="" href="student_add.php">Students</a></li>
                          <li><a class="" href="faculty_add.php">Faculty Members</a></li>
                          <li><a class="" href="admin_add.php">Admins</a></li>
                      </ul>
                      
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Research Work</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="journal_add.php">Journal Article</a></li>
                          <li><a class="" href="book_add.php">Book Chapters</a></li>
                          <li><a class="" href="conf_add.php">Conference Papers</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>Add new Student</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i><a href="student_add.php">Add Student</a></li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Student Details
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <h2>
                                      <a href="stage1_coursework.php">STAGE 1: Coursework</a><br><br>
                                      <a href="stage2_urbpending.php">STAGE 2: URB Pending</a><br><br>
                                      <a href="stage3_ongoing.php">STAGE 3: Ongoing Ph.D.</a><br><br>
                                      <a href="stage4_synopsissubmitted.php">STAGE 4: Synopsis Submitted</a><br><br>
                                      <a href="stage5_thesissubmitted.php">STAGE 5: Thesis Submitted</a><br><br>
                                      <a href="stage6_phdcompleted.php">STAGE 6: Ph.D. Completed</a><br><br>
                                  </h2>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custom script for all page-->
    <script src="js/scripts.js"></script>    


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