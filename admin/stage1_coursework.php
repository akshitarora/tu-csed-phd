<?php
session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
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
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>Add new Student</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i><a href="student_add.php">Add Student</a></li>
						<li><i class="icon_document_alt"></i><a href="stage1_coursework.php">STAGE 1: Coursework</a></li>
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
                                  <form class="form-validate form-horizontal" method="post" action="student_addprocess.php">
                                      <div class="form-group ">
                                          <label for="regno" class="control-label col-lg-2">Registration Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="regno" name="regno" type="number" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sname" name="sname" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Full / Part Time <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                      <div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input name="full_part" id="radio-01" value="full" type="radio" required/> Full Time
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="full_part" id="radio-02" value="part" type="radio" /> Part Time
                                              </label>
                                        </div>
                                      </div>
                                      </div>

                                      <div class="form-group hidden">
                                          <label for="status" class="control-label col-lg-2">Status <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="status" type="text" name="status" class="form-control" value="Coursework" required>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sdob" class="control-label col-lg-2">Date of Birth <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdob" type="date" name="sdob" size="16" max=
                                              <?php 
                                              $d = strtotime("-18 Years");
                                              echo date("Y-m-d",$d);
                                              ?>
                                               class="form-control" required>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="semail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="semail" type="email" name="semail" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sbranch" class="control-label col-lg-2">Branch <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
                                              <select name="sbranch">
                                                  <?php
                                                  $sqldept = "SELECT * from department";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    echo "<option value='"; echo $rowdept["dpt_code"]; echo "'>";
                                                    echo $rowdept["dpt_name"]; echo "</option>";
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sdoa" class="control-label col-lg-2">Date of Admission <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdoa" type="date" name="sdoa" size="16" class="form-control">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group hidden">
                                          <label for="sdurb" class="control-label col-lg-2">Date of URB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdurb" type="date" name="sdurb" size="16" value="NULL" class="form-control">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group hidden">
                                          <label for="sthesis" class="control-label col-lg-2">Thesis Title <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sthesis" name="sthesis" value="NULL" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sphone" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sphone" name="sphone" type="number" max="9999999999" min="1000000000" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="spassword" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="spassword" name="spassword" type="password" required />
                                          </div>
                                      </div>
                                      <div class="form-group hidden">
                                          <label for="slid" class="control-label col-lg-2">Slot Id <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control" name="slid" value="NULL" required>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Proceed to adding courses</button>
                                              <a href="index.php"><button class="btn btn-default" type="button">Cancel</button></a>
                                          </div>
                                      </div>
                                  </form>
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