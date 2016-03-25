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
                      <form class="form-validate form-horizontal" method="post" action="sem_editprocess.php">
                      <div class="form-group">
                        <label for="old_semester" class="control-label col-lg-2">Semester to be edited<span class="required">*</span></label>
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
                                    <label for="semcode" class="control-label col-lg-2">New Semester Code<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="semcode" type="text" placeholder="Eg. 1516ODDSEM" required />
                                        </div>
                                   </div>
                                  <div class="form-group">
                                    <label for="year" class="control-label col-lg-2">New Year<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="year" type="number" placeholder="Eg. 2015" min=2000 max=3000 required/>
                                        </div>
                                   </div>
                                   <div class="form-group">
                                    <label for="odd" class="control-label col-lg-2">New Type of Semester<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <div class="radios">
                                      <label class="label_radio" for="radio-01">
                                          <input name="odd" id="radio-01" value="1" type="radio" required /> Odd Semester
                                      </label>
                                      <label class="label_radio" for="radio-02">
                                          <input name="odd" id="radio-02" value="0" type="radio" /> Even Semester
                                      </label>
                                  </div>
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