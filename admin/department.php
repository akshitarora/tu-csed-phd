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
    <header class="panel-heading">Current Departments List</header>
    <div class="panel-body">
    <a href='department_edit.php'><button type='button' class='btn btn-primary'>Edit Existing Department</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='department_add.php'><button type='button' class='btn btn-primary'>Add New Department</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='department_delete.php'><button type='button' class='btn btn-danger'>Delete Existing Department</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <table cellpadding="10">
      <tr>
        <td><b>Department Name</b></td>
        <td><b>Department Code</b></td>
        
      </tr>
      <?php
                                                  $sqldept = "SELECT * from department";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    echo "<tr><td>"; echo $rowdept["dpt_name"]; echo "</td><td>";
                                                    echo $rowdept["dpt_code"]; echo "</td></tr>";
                                                  }
                                                  ?>
    </table>
    </div>
    </section>
    </div>
		
	</section>
	</section>
	</section>
	<?php require'js.php';?>
	</body>
</html>