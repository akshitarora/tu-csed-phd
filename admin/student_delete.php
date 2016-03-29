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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Delete Student</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href="student_delete.php">Delete Student</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Student Details
                </header>
                <div class="panel-body">
                  <div class="form">
                      <form class="form-validate form-horizontal" method="post" action="student_deleteprocess.php">
                      <div class="form-group">
                        <label for="old_student" class="control-label col-lg-2">Student to be deleted<span class="required">*</span></label>
                        <div class="col-lg-10">
                                              <select name="old_student">
                                              <?php
                                                  $sql = "SELECT * from student where regno <> 12345 ORDER by regno";
                                                  $result = mysqli_query($conn,$sql);
                                                  while($row = mysqli_fetch_array($result,MYSQL_ASSOC)) {
                                                    echo "<option value='"; echo $row["regno"]; echo "'>";
                                                    echo $row["regno"]." (".$row["sname"].") </option>";
                                                  }
                                                  ?>
                                              </select>
                                              </div>
                      </div>
                                  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Delete Student</button>
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