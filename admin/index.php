<?php session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
    require 'header.php';
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
                    
                    <?php 
    if($_SESSION["success_student_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Student has been added!
                    </div>
                    <?php unset($_SESSION["success_student_added"]);
                    }
    else if($_SESSION["success_student_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_student_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_faculty_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Faculty has been added!
                    </div>
                    <?php unset($_SESSION["success_faculty_added"]);
                    }
    else if($_SESSION["success_faculty_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please make sure if the faculty id entered was unique or not. If the problem persists, please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_faculty_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_admin_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Admin has been added!
                    </div>
                    <?php unset($_SESSION["success_admin_added"]);
                    }
    else if($_SESSION["success_admin_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_admin_added"]);
    }
                    ?>
                    <?php 
    if($_SESSION["success_course_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Course has been added!
                    </div>
                    <?php 
                    unset($_SESSION["success_course_added"]);
                    }
    else if($_SESSION["success_course_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_course_added"]);
    }
                    ?>
                    <?php 
    if($_SESSION["success_grade_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Grade has been updated!
                    </div>
                    <?php 
                    unset($_SESSION["success_grade_added"]);
                    }
    else if($_SESSION["success_grade_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_grade_added"]);
    }
                    ?>
                    <!--Generalizing dashboard alerts-->
                    <?php 
    if($_SESSION["success"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?php echo $_SESSION["message"];?>
                    </div>
                    <?php 
                    unset($_SESSION["success"]); unset($_SESSION["message"]);
                    }
    else if($_SESSION["success"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success"]);unset($_SESSION["message"]);
    }
                    ?>
                    <!--ALERTS END -->
					<h3 class="page-header"><i class="fa fa-laptop"></i>Welcome <?php echo $_SESSION["name"];?>!</h3><br>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 form">
                      <center><h4>Search Student</h4></center><br>
                      <form class="form-validate form-horizontal" method="get" action="search_student.php">
                          <div class="form-group">
                              <label for="rweegno" class="control-label col-lg-2">Registration Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="regno" name="regno" min=1000000000 type="number"/>  
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
                              <label for="semail" class="control-label col-lg-2">E-Mail</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="semail" type="email" name="semail"  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sthesis" class="control-label col-lg-2">Thesis Title</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sthesis" name="sthesis" type="text"  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sphone" class="control-label col-lg-2">Phone Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sphone" name="sphone" type="text" />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sdob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                                  <input id="sdob" type="date" name="sdob" size="16" max=
                                  <?php 
                                  $d = strtotime("-18 Years");
                                  echo date("Y-m-d",$d);
                                  ?>
                                  class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-lg-12">
                                  <center><button class="btn btn-primary" type="submit">Search</button></center>
                              </div>
                          </div>
                      </form><br><br>
                  </div>
                  <div class="col-lg-6 form">
                      <center><h4>Search Faculty</h4></center><br>
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
                          
                          <div class="form-group ">
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
                          </div>
                          
                          <div class="form-group ">
                              <label for="dob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                              <input id="dob" type="date" name="dob" size="16" max=
                                  <?php 
                                  $d = strtotime("-18 Years");
                                  echo date("Y-m-d",$d);
                                  ?>
                                  class="form-control" required>
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="designation" class="control-label col-lg-2">Designation</label>
                              <div class="col-lg-10">
                                  <select id="designation" name="designation">
                                      <option value="">--</option>
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
                      </form><br><br><
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