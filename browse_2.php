<?php session_start();error_reporting(1);
require "admin/connection.php"

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
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
                    <!--ALERTS START -->
                    <!--NO ALERTS NEEDED!-->
                    <!--ALERTS END -->
					<h3 class="page-header"><i class="fa fa-laptop"></i>Welcome GUEST!</h3><br>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 form">
                      <center><h4>Search Student</h4></center><br>
                      <form class="form-validate form-horizontal" method="get" action="search_student.php">
                          <div class="form-group">
                              <label for="regno" class="control-label col-lg-2">Registration Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="regno" name="regno" type="number"/>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="sname" class="control-label col-lg-2">Name</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sname" name="sname" type="text"/>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-lg-2">Full / Part Time</label>
                              <div class="col-lg-10">
                                  <div class="radios">
                                      <label class="label_radio" for="radio-01">
                                          <input name="full_part" id="radio-01" value="full" type="radio"/> Full Time
                                      </label>
                                      <label class="label_radio" for="radio-02">
                                          <input name="full_part" id="radio-02" value="part" type="radio" /> Part Time
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="status" class="control-label col-lg-2">Status</label>
                              <div class="col-lg-10">
                                  <select name="status">
                                      <option value="">--</option>
                                      <option value="Coursework">Coursework</option>
                                      <option value="URB Pending">URB Pending</option>
                                      <option value="Ongoing">Ongoing</option>
                                      <option value="Synopsis Submitted">Synopsis Submitted</option>
                                      <option value="Thesis Submitted">Thesis Submitted </option>
                                      <option value="Ph.D. Completed">Ph.D. Completed</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="status" class="control-label col-lg-2">Supervisor</label>
                              <div class="col-lg-10">
                                  <select name="supervisor">
                                      <option value="">--</option>
                                      <?php 
                                      $sqlsup = "SELECT * from faculty";
                                      $resultsup = mysqli_query($conn,$sqlsup);
                                      
                                      while($rowsup = mysqli_fetch_assoc($resultsup)){

                                      echo "<option value='".$rowsup["fname"]."'>".$rowsup["fname"]."</option>";
                                      }
                                      ?>
                                  </select>
                              </div>
                          </div>

                          <!--<div class="form-group ">
                              <label for="semail" class="control-label col-lg-2">E-Mail</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="semail" type="email" name="semail"  />
                              </div>
                          </div>-->

                          <div class="form-group ">
                              <label for="sthesis" class="control-label col-lg-2">Thesis Title</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sthesis" name="sthesis" type="text"  />
                              </div>
                          </div>

                         <!-- <div class="form-group ">
                              <label for="sphone" class="control-label col-lg-2">Phone Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sphone" name="sphone" type="text" />
                              </div>
                          </div>-->

                          <!--<div class="form-group ">
                              <label for="sdob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                                  <input id="sdob" type="date" name="sdob" size="16" max=
                                  <?php
                                  //$d = strtotime("-18 Years");
                                 // echo date("Y-m-d",$d);
                                  ?>
                                  class="form-control">
                              </div>
                          </div>-->

                          <div class="form-group">
                              <div class="col-lg-12">
                                  <center><button class="btn btn-primary" type="submit">Search</button></center>
                              </div>
                          </div>
                      </form><br><br>
                  </div>
                  <div class="col-lg-6 form">
                      <center><h4>Search CSED</h4></center><br>
                      <form class="form-validate form-horizontal" method="get" action="search_faculty.php">

                          <div class="form-group ">
                              <label for="fname" class="control-label col-lg-2">Name</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="fname" name="fname" type="text"/>
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="faculty_code" class="control-label col-lg-2">Faculty Id</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="faculty_code" name="faculty_code" type="text" placeholder="Example: KJK, PBH, SJ, SGO etc."  />
                              </div>
                          </div>

                          <!--<div class="form-group ">
                              <label for="semail" class="control-label col-lg-2">E-Mail</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="email" type="email" name="semail"  />
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="sphone" class="control-label col-lg-2">Phone Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="phone" name="sphone" type="text" />
                              </div>
                          </div>-->

                          <!--<div class="form-group ">
                              <label for="dob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                              <input id="dob" type="date" name="dob" size="16" max=
                                  <?php
                                  //$d = strtotime("-18 Years");
                                  //echo date("Y-m-d",$d);
                                  ?>
                                  class="form-control" >
                              </div>
                          </div>-->

                          <div class="form-group ">
                              <label for="designation" class="control-label col-lg-2">Designation</label>
                              <div class="col-lg-10">
                                  <select id="designation" name="designation">
                                      <option value="">--</option>
                                      <option value="Professor">Professor</option>
                                      <option value="Associate Professor">Associate Professor</option>
                                      <option value="Assistant Professor">Assistant Professor</option>
                                      <option value="Lecturer">Lecturer</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-12">
                                  <center><button class="btn btn-primary" type="submit">Search</button></center>
                              </div>
                          </div>
                      </form><br><br></div>
              </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      </section>
  <!--   container section start -->

    <?php require'js.php';?>
  </body>
</html>
