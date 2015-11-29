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
						<li><i class="icon_document_alt"></i><a href="stage2_urbpending.php">STAGE 2: URB Pending</a></li>
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
                                              <input class="form-control" id="regno" name="regno" min=1000000000 type="number" required />
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
                                      
                                      <div class="form-group ">
                                          <label for="status" class="control-label col-lg-2">Status <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
                                              <select name="status">
                                                  
                                                  <option value="URB Pending">URB Pending</option>
                                                  
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sdob" class="control-label col-lg-2">Date of Birth <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdob" type="date" name="sdob" size="16" class="form-control" required>
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
                                          <label for="sdoa" class="control-label col-lg-2">Date of Admission <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdoa" type="date" name="sdoa" size="16" class="form-control">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sdurb" class="control-label col-lg-2">Date of URB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdurb" type="date" name="sdurb" size="16" class="form-control">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sthesis" class="control-label col-lg-2">Thesis Title <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sthesis" name="sthesis" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sphone" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sphone" name="sphone" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="spassword" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="spassword" name="spassword" type="password" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="comm_id" class="control-label col-lg-2">Committee Id <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
<?php
    $sql = "SELECT pno from doc_comm";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
        echo "<select name='comm_id'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value=";
    printf ("%d",$row[0]);
       echo ">" ;
      echo $row[0];
      echo "</option>";
    }
  // Free result set
            mysqli_free_result($result);
            echo "</select>";
}  
?>
                                              
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="slid" class="control-label col-lg-2">Slot Id <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
<?php
    $sql1 = "SELECT slid from slots";
    if ($result1=mysqli_query($conn,$sql1))
  {
        
            echo "<select name='slid'>";
  // Fetch one and one row
  while ($row1=mysqli_fetch_row($result1))
    {
      echo "<option value=";
    printf ("%d",$row1[0]);
       echo ">";
      echo $row1[0];
      echo"</option>";
    }
  // Free result set
            mysqli_free_result($result1);
}  
?>
                                              </select>
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
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <?php require 'js.php';?>
  </body>
</html>
<?php
                     }
else {
    ?>
<html>
    <?php require'header.php';?>
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