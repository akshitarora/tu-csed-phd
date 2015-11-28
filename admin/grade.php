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
			<h3 class="page-header"><i class="fa fa-files-o"></i>Update Grade</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon_document_alt"></i><a href="course.php">Update Grade</a></li>
			</ol>
		</div>
		<div class="row">
			<section class="panel">
				<header class="panel-heading">
                    Course Details
                </header>
                <div class="panel-body">
                	<div class="form">
                		<form class="form-validate form-horizontal" method="post" action="gradeupdate.php">
                			<div class="form-group ">
                                <label for="regno" class="control-label col-lg-2">Registration Number<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
    $sql = "SELECT DISTINCT sregno from courses";
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
  // Fetch one and one row
        echo "<select name='cname'>";
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
                            <div class="form-group">
                            	<label for="semcode" class="control-label col-lg-2">Semester Code<span class="required">*</span></label>
                            	<div class="col-lg-10">
<?php
    $sql = "SELECT DISTINCT semcode from courses";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<select name='semcode'>";
  while ($row=mysqli_fetch_row($result))
    {
      	echo "<option value=";
    	echo $row[0];
		echo ">" ;
	    echo $row[0];
	    echo "</option>";
    }
  	mysqli_free_result($result);
    echo "</select>";
}  
?>
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label for="creditsP" class="control-label col-lg-2">Grade<span class="required">*</span></label>
                            	<div class="col-lg-10">
                            		<select name="grade">
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="X">X</option>
                                    </select>
                            	</div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Update Grade</button>
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