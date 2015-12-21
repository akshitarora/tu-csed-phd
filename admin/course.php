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
			<h3 class="page-header"><i class="fa fa-files-o"></i>Add new Course</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon_document_alt"></i><a href="course.php">Add Course</a></li>
			</ol>
		</div>
		<div class="row">
			<section class="panel">
				<header class="panel-heading">
                    Course Details
                </header>
                <div class="panel-body">
                	<div class="form">
                		<form class="form-validate form-horizontal" method="post" action="courseadd.php">
                			<div class="form-group ">
                                <label for="regno" class="control-label col-lg-2">Registration Number<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
if(isset($_SESSION["regno"])&& !empty($_SESSION["regno"])) {
	echo "<input class='form-control hidden' name='regno' type='text' value=".$_SESSION["regno"]." required>";
	echo $_SESSION["regno"];
  unset($_SESSION["regno"]);
} else {
    $sql = "SELECT regno from student";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
        echo "<select name='regno'>";
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
}
?>
                                </div>
                            </div>
                            <div class="form-group">
                            	<label for="cname" class="control-label col-lg-2">Course Name<span class="required">*</span></label>
                            	<div class="col-lg-10">
<?php
$sql = "SELECT DISTINCT cname from courses";
    if ($result=mysqli_query($conn,$sql))
  {
    echo "<input list='courses' name='cname'>";
    echo "<datalist id='courses'>";
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value=";
    echo $row[0];
       echo ">" ;
       echo $row[0];
      echo "</option>";
    }
  // Free result set
            mysqli_free_result($result);
            echo "</datalist>";
}  
?>
                            	</div>
                            </div>
                            <div class="form-group ">
                                <label for="department" class="control-label col-lg-2">Branch <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select name="department">
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
                                <label for="coordinator" class="control-label col-lg-2">Course Co-ordinator<span class="required">*</span></label>
                                <div class="col-lg-10">
                                              
<?php
    $sql = "SELECT fname from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
        echo "<select name='coordinator'>";
  while ($row=mysqli_fetch_row($result))
    {
    	echo "<option value='";
    	echo $row[0];
       	echo "''>" ;
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
                            <div class="form-group">
                            	<label for="creditsL" class="control-label col-lg-2">Course Credits(lecture)<span class="required">*</span></label>
                            	<div class="col-lg-10">
                            		<input class="form-control" name="creditsL" min=0.0 type="number" step=0.5 required>
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label for="creditsT" class="control-label col-lg-2">Course Credits(tutorial)<span class="required">*</span></label>
                            	<div class="col-lg-10">
                            		<input class="form-control" name="creditsT" min=0.0 type="number" step=0.5 required>
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label for="creditsP" class="control-label col-lg-2">Course Credits(practical)<span class="required">*</span></label>
                            	<div class="col-lg-10">
                            		<input class="form-control" name="creditsP" min=0.0 type="number" step=0.5 required>
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label for="semcode" class="control-label col-lg-2">Semester Code<span class="required">*</span></label>
                            	<div class="col-lg-10">
<?php
    $sql = "SELECT semcode from semester";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
        echo "<select name='semcode'>";
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value=";
    echo $row[0];
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
                            <div class="form-group">
                            	<label for="class" class="control-label col-lg-2">Class<span class="required">*</span></label>
                            	<div class="col-lg-10">
                            		<select name="class">
                                        <option value="UG">Undergraduate</option>
                                        <option value="PG">Postgraduate</option>
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
	</section>
	</section>
	</section>
	<?php require'js.php';?>
	</body>
</html>