<?php
session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
require 'header.php';
    $conn = new mysqli("localhost", "root", "","phd");
?>
<body>
  <!-- container section start -->
  <section id="container" class="">
      <?php require 'topbar.php';?>      
      <!--header end-->
      <!--sidebar start-->
      <?php require'sidebar.php';?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
      <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>Add Book</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="icon_document_alt"></i><a href=#>Research Paper</a></li>
						<li><i class="icon_document_alt"></i><a href="book_add.php">Add Book</a></li>
					</ol>
				</div>
			</div>
      <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Book Details
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="book_addprocess.php">
                                    <div class="form-group ">
                                <label for="regno" class="control-label col-lg-2">Registration Number<span class="required">*</span></label>
                                <div class="col-lg-10">
<?php
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
?>
                                  </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="title" class="control-label col-lg-2">Chapter Title<span class="required">*</span></label>
                                    <div class="col-lg-10">
                                      <input class="form-control" id="title" name="title" type="text" required />
                                    </div>
                                  </div>
                                  <div class="form-group ">
                                    <label for="authors" class="control-label col-lg-2">Authors<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" id="authors" name="authors" type="text" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="publisher" class="control-label col-lg-2">Publisher<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="publisher" type="text" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                          <label for="pages" class="control-label col-lg-2">Page Numbers<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="pages" name="pages" type="text" required />
                                          </div>
                                    </div>
                                    <div class="form-group ">
                                          <label for="bpy" class="control-label col-lg-2">Book Publish Year<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="bpy" name="bpy" type="number" min=0 required />
                                          </div>
                                    </div>
                                    <div class="form-group ">
                                    <label for="isbn" class="control-label col-lg-2">Book ISBN<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="isbn" type="text" required/>
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                          <label for="status" class="control-label col-lg-2">Status<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="status">
                                                  <option value="Published">Published</option>
                                                  <option value="Accepted">Accepted</option>
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