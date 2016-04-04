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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Add new Faculty Member</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i><a href='faculty.php'> Faculty</a></li>
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
                                                  <?php
                                                  $sqldept = "SELECT * from department";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQLI_ASSOC)) {
                                                    echo "<option value='"; echo $rowdept["dpt_code"]; echo "'>";
                                                    echo $rowdept["dpt_name"]; echo "</option>";
                                                  }
                                                  ?>
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
                                                  <option value="Professor">Professor</option>
                                                  <option value="Associate Professor">Associate Professor</option>
                                                  <option value="Assistant Professor">Assistant Professor</option>
                                                  <option value="Lecturer">Lecturer</option>
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
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
                                              <input class="form-control" id="phone" name="phone" type="number" max="9999999999" min="1000000000" required />
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