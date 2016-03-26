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
        <!--Generalizing dashboard alerts-->
                    <?php 
    if($_SESSION["success"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Alert!</strong> <?php echo $_SESSION["message"];?>
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
			<h3 class="page-header"><i class="fa fa-files-o"></i>Edit Departments</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon_document_alt"></i><a href="department.php">Edit Departments</a></li>
			</ol>
		</div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Edit Existing Department
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form class="form-validate form-horizontal" method="post" action="department_editprocess.php">
                    <div class="form-group">
                                          <label for="sbranch" class="control-label col-lg-2">Department to be edited<span class="required">*</span></label>
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
                                      <div class="form-group">
                                  <label for="dpt_name" class="control-label col-lg-2">New Full Department Name<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="dpt_name" name="dpt_name" type="text" placeholder="Eg. Department of Computer Science and Engineering" required />
                                          </div>
                                      </div>
                                    <div class="form-group ">
                                          <label for="dpt_code" class="control-label col-lg-2">New Department Code<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="dpt_code" name="dpt_code" type="text" placeholder="CSED" required />
                                          </div>
                                      </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit">Save</button>
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