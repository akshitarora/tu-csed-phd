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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Update URB</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href="urb.php">Update URB</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    URB Details
                </header>
                <div class="panel-body">
                  <div class="form">
                      <form class="form-validate form-horizontal" method="post" action="semadd.php">
                                  <div class="form-group">
                                    <label for="semcode" class="control-label col-lg-2">Semester Code<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="semcode" type="text" placeholder="Eg. 1516ODDSEM" required />
                                        </div>
                                   </div>
                                  <div class="form-group">
                                    <label for="year" class="control-label col-lg-2">Year<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="year" type="number" placeholder="Eg. 2015" required />
                                        </div>
                                   </div>
                                   <div class="form-group">
                                    <label for="odd" class="control-label col-lg-2">Odd Semester?<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="odd" type="number" max=1 min=0 placeholder="Eg. 1 if above entered semester code represents odd semester, 0 otherwise" required />
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