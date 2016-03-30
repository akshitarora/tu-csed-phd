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
      <?php 
 
$regno=$_POST["old_student"];
$sqlfac = "SELECT * from student where regno='$regno'";
$resultfac = mysqli_query($conn,$sqlfac);
$row = mysqli_fetch_assoc($resultfac);

?>
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>Edit Student</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i><a href="student_edit2.php">Edit Student</a></li>
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
                                  <form class="form-validate form-horizontal" method="post" action="student_editprocess.php">
                                      <div class="form-group ">
                                          <label for="regno" class="control-label col-lg-2">Registration Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control hidden" id="sid" name="sid" value="<?php echo $row["sid"];?>">
                                              <input class="form-control" id="regno" name="regno" type="number" value="<?php echo $row["regno"];?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sname" name="sname" type="text" value="<?php echo $row["sname"];?>" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Full / Part Time <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                      <div class="radios">
                                     
                                              <label class="label_radio" for="radio-01">
                                                  <input name="full_part" id="radio-01" value="full" type="radio" <?php
                                          if($row["full_part"]=="full"){echo "checked=checked";}
                                      ?> required/> Full Time
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="full_part" id="radio-02" value="part" type="radio" <?php
                                          if($row["full_part"]=="part"){echo "checked=checked";}
                                      ?> /> Part Time
                                              </label>
                                        </div>
                                      </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="status" class="control-label col-lg-2">Status <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="status">
                                                  <option value="Coursework"  <?php
                                                  if($row["status"]=="Coursework")
                                                       echo "' selected='selected'"; ?>>Coursework</option>
                                                  <option value="Ongoing" <?php
                                                  if($row["status"]=="Ongoing")
                                                       echo "' selected='selected'"; ?>>Ongoing</option>
                                                  <option value="Synopsis Submitted" <?php
                                                  if($row["status"]=="Synopsis Submitted")
                                                       echo "' selected='selected'"; ?>>Synopsis Submitted</option>
                                                  <option value="Thesis Submitted" <?php
                                                  if($row["status"]=="Thesis Submitted")
                                                       echo "' selected='selected'"; ?>>Thesis Submitted</option>
                                                  <option value="Ph.D. Completed" <?php
                                                  if($row["status"]=="Ph.D. Completed")
                                                       echo "' selected='selected'"; ?>>Ph.D. Completed</option>
                                              </select>
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
                                               class="form-control" value="<?php echo $row["sdob"];?>" required>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="semail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="semail" type="email" name="semail" value="<?php echo $row["semail"];?>" required />
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
                                                    echo "<option value='"; echo $rowdept["dpt_code"]; echo "' ";
                                                    if($rowdept["dpt_code"] == $row["sbranch"]) {
                                                      echo " selected='selected'";
                                                    } 
                                                    echo ">";
                                                    echo $rowdept["dpt_name"]; echo "</option>";
                                                  }
                                                  ?>
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sdoa" class="control-label col-lg-2">Date of Admission <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdoa" type="date" name="sdoa" size="16" class="form-control" value="<?php echo $row["sdoa"];?>">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="sdurb" class="control-label col-lg-2">Date of URB <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input id="sdurb" type="date" name="sdurb" size="16" class="form-control" value="<?php echo $row["sdurb"];?>">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="sthesis" class="control-label col-lg-2">Thesis Title <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sthesis" name="sthesis"  type="text" value="<?php echo $row["sthesis"];?>" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sphone" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="sphone" name="sphone" type="number" max="9999999999" min="1000000000" value="<?php echo $row["sphone"];?>"required />
                                          </div>
                                      </div>
                                      
                                      
                                      <div class="form-group ">
                                <label for="chair" class="control-label col-lg-2">Chairperson Board of Studies(Ex-officio)<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='chair'>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["chair"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
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
                                <label for="supervisor1" class="control-label col-lg-2">First Supervisor<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='supervisor1'>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["supervisor1"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
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
                                <label for="supervisor2" class="control-label col-lg-2">Second Supervisor (if any)<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='supervisor2'><option value=NULL>none</option>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["supervisor2"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
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
                                <label for="cognate1" class="control-label col-lg-2">Faculty Members in the cognate area from the Department<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='cognate1'>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["cognate1"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
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
                                <label for="cognate2" class="control-label col-lg-2">Faculty Members in the cognate area from the Department<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='cognate2'><option value=NULL>none</option>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["cognate2"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
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
                                <label for="outside" class="control-label col-lg-2">One faculty Member from outside the Department/School<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='outside'>";
  while ($rowfac=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $rowfac[0];
      echo "' " ;
      if($rowfac["0"] == $row["outside"]) {
           echo " selected='selected'";
            } 
      echo ">";
      echo $rowfac[0];
      echo "</option>";
    }
  // Free result set
            mysqli_free_result($result);
            echo "</select>";
}  
?>
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