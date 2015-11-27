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
                          <li><a class="" href="student_add.php">Students</a></li>
                          <li class="active"><a class="" href="faculty_add.php">Faculty Members</a></li>
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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Add new Faculty Member</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Faculty Member</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Faculty Details
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="faculty_addprocess.php">
                                      <div class="form-group ">
                                          <label for="fname" class="control-label col-lg-2">Full Name<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="fname" name="fname" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="faculty_code" class="control-label col-lg-2">Faculty Id<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="faculty_code" name="faculty_code" type="text" placeholder="Example: KJK, PBH, SJ, SGO etc. It must be unique for every faculty member" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="department" class="control-label col-lg-2">Department <span class="required">*</span></label>    
                                          <div class="col-lg-10">
                                              <select name="department">
                                                  <option value="COE">Computer Engineering</option>
                                                  <option value="ECE">Electronics and Communication</option>
                                                  <option value="MECH">Mechanical</option>
                                                  <option value="MTX">Mechatronix</option>
                                                  <option value="CHE">Chemical</option>
                                                  <option value="CIV">Civil</option>
                                                  <option value="EIC">Electronics and Instrumentation</option>
                                                  <option value="ELE">Electrical</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Official E-Mail<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" type="email" name="email" required />
                                          </div>
                                      </div> 
                                      
                                      <div class="form-group ">
                                          <label for="designation" class="control-label col-lg-2">Designation<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select id="designation" name="designation">
                                                  <option value="Associate Professor">Associate Professor</option>
                                                  <option value="Assistant Professor">Assistant Professor</option>
                                                  <option value="Lecturer">Lecturer</option>
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="hod" class="control-label col-lg-2">Head of Department</label>
                                          <div class="col-lg-10">
                                              <input type="checkbox" name="hod" />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="url" class="control-label col-lg-2">Website</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="url" type="url" name="url" />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="dob" class="control-label col-lg-2">Date of Birth <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="dob" type="date" name="dob" size="16" class="form-control" required>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="r_int" class="control-label col-lg-2">Research Interests<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="r_int" name="r_int" type="text" placeholder="please enter comma separated values" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="phone" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="phone" name="phone" type="text" placeholder="+91xxxxxxxxxx" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="password" name="password" type="password" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <a href="index.php"><button class="btn btn-default" type="button">Cancel</button></a>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!--<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Advanced Form validations
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Full name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                              <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>-->
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