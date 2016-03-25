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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Edit Semester</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href="sem.php">Edit Semester</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Semester Details
                </header>
                <div class="panel-body">
                  <div class="form">
                      <form class="form-validate form-horizontal" method="post" action="sem_deleteprocess.php">
                      <div class="form-group">
                        <label for="old_semester" class="control-label col-lg-2">Semester to be deleted<span class="required">*</span></label>
                        <div class="col-lg-10">
                                              <select name="old_semester">
                                              <?php
                                                  $sqldept = "SELECT * from semester";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    if($rowdept["odd"] == 0) {$oddsem = "Even Semester";} else {$oddsem = "Odd Semester";}
                                                    echo "<option value='"; echo $rowdept["semcode"]; echo "'>";
                                                    echo $rowdept["semcode"]." (".$oddsem." = ".$rowdept["year"].") </option>";
                                                  }
                                                  ?>
                                              </select>
                                              </div>
                      </div>
                                  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Delete Semester</button>
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