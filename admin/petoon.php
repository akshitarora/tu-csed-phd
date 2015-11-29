<?php
session_start();error_reporting(0);
require 'auth.php';
require 'header.php';
require 'connection.php';
?>
<body>
	<section id="container" class="">
	<?php require'topbar.php';?>
	<?php require'sidebar.php';?>
	<section id="main-content">
	<section class="wrapper">
		<div id="row">
			<h3 class="page-header"><i class="fa fa-files-o"></i>Update Ph.D. Status</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon_document_alt"></i><a href="statusupdate.php">Update Ph.D. Status</a></li>
                <li><i class="icon_document_alt"></i><a href="#">URB Pending to Ongoing</a></li>
			</ol>
		</div>
		<div class="row">
			<section class="panel">
				<header class="panel-heading">
                    Status Details
                </header>
                <div class="panel-body">
                	<div class="form">
                		<form class="form-validate form-horizontal" method="post" action="petoon_process.php">
                			<div class="form-group ">
                                <label for="regno" class="control-label col-lg-2">Registration Number<span class="required">*</span></label>
                                <div class="col-lg-10"><?php
                                echo "<input class='form-control hidden' name='regno' type='text' value=".$_SESSION["regnoud"]." required>";
                                echo $_SESSION["regnoud"];
                                ?>
                                </div>
                            </div>
                            <div class="form-group ">
                                          <label for="sdurb" class="control-label col-lg-2">Date of URB<span class="required">*</span></label>
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
                                <label for="chair" class="control-label col-lg-2">Chairperson Board of Studies(Ex-officio)<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='chair'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                <label for="supervisor1" class="control-label col-lg-2">First Supervisor<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='supervisor1'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                <label for="supervisor2" class="control-label col-lg-2">Second Supervisor (if any)<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='supervisor2'><option value=NULL>none</option>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                <label for="cognate1" class="control-label col-lg-2">Faculty Members in the cognate area from the Department<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='cognate1'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                <label for="cognate2" class="control-label col-lg-2">Faculty Members in the cognate area from the Department<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='cognate2'><option value=NULL>none</option>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                <label for="outside" class="control-label col-lg-2">One faculty Member from outside the Department/School<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='outside'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value='";
      echo $row[0];
      echo "'>" ;
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
                                          <label for="percent" class="control-label col-lg-2">Percentage Completion <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="percent" name="percent" min=0 max=100 value=0 type="number" required />
                                          </div>
                                      </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="index.php"><button class="btn btn-default" type="button">Cancel</button></a>
                                </div>
                            </div>
                		</form>
                	</div>
                </div>
			</section>
		</div>
	</section>
	</section>
	</section>
	<?php require'js.php';?>
	</body>
</html>