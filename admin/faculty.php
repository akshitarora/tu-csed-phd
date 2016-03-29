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
			<h3 class="page-header"><i class="fa fa-files-o"></i>Faculty</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<li><i class="icon_document_alt"></i><a href="department.php">Faculty</a></li>
			</ol>
		</div>
    <div class="row">
    <section class="panel">
    <header class="panel-heading">Current Departments List</header>
    <div class="panel-body">
    
    <a href='faculty_add.php'><button type='button' class='btn btn-primary'>Add New Faculty</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
   
    <br>
    <table cellpadding="10">
      <tr>
        <td><b>Name</b></td>
        <td><b>Designation</b></td>
        <td><b>Email</b></td>
        <td><b>Department</b></td>
        <td><b>Code</b></td>
        
      </tr>
      <?php
                                                  $sqlfac = "SELECT * from faculty";
                                                  $resultfac = mysqli_query($conn,$sqlfac);


                                                  while($rowfac = mysqli_fetch_array($resultfac,MYSQLI_ASSOC)) {
                                                    echo "<tr><td>"; echo $rowfac["fname"]; echo "</td><td>";
                                                    echo $rowfac["designation"]; echo "</td><td>";
                                                    echo $rowfac["email"]; echo "</td><td>";
                                                    echo $rowfac["department"]; echo "</td><td>";
                                                    echo $rowfac["faculty_code"]; echo "</td><td>";
                                                    echo "<a href='faculty_edit.php?fid=".$rowfac["fid"]."'><button class='btn btn-primary' value='edit'>edit</button></a>
                                                    <a href='faculty_deleteprocess.php?fid=".$rowfac["fid"]."'>&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-danger' value='delete' ";?>onclick="return confirm('Are you sure?')">delete <?php echo"</button></a>
                                                    "; echo "</td></tr>";
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