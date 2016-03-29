<?php
session_start();error_reporting(0);
require 'auth.php';
require 'header.php';
require 'connection.php';
$sqlconf = "SELECT * from research_conference WHERE rid=".$_GET["rid"];
   $resultconf = mysqli_query($conn,$sqlconf);
   $rowconf = mysqli_fetch_array($resultconf);
?>
<body>
  <section id="container" class="">
  <?php require'topbar.php';?>
  <?php require'sidebar.php';?>
  <section id="main-content">
  <section class="wrapper">
    <div id="row">
      <h3 class="page-header"><i class="fa fa-files-o"></i>Edit Conference Paper</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        
        <li><i class="icon_document_alt"></i><a href="conf.php">Edit Conference Paper</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Conference Paper Details
                </header>
                <div class="panel-body">
                  <div class="form">
                      <form class="form-validate form-horizontal" method="post" action="conf_editprocess.php">
                                    <div class="form-group ">
                                    <input class="form-control hidden" id="rid" name="rid" type="number" value="<?php echo $_GET["rid"]; ?>" required />
                                <label for="regno" class="control-label col-lg-2">Registration Number <span class="required">*</span></label>
                                <div class="col-lg-10">
                                <input class="form-control" id="regno" name="regno" type="number" value="<?php echo $rowconf["sid"]; ?>" required />
                                  </div>
                                  </div>

                                  <div class="form-group ">
                                    <label for="title" class="control-label col-lg-2">Title of paper<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="title" type="text" value="<?php echo $rowconf["title"]; ?>" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="people" class="control-label col-lg-2">Authors<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="people" type="text" value="<?php echo $rowconf["people"]; ?>" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Conference Name<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="name" type="text" value="<?php echo $rowconf["conference_name"]; ?>" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="cdate" class="control-label col-lg-2">Conference Date<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="cdate" type="date" max=<?php echo date("Y-m-d");?> value="<?php echo $rowconf["conference_date"]; ?>"required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="location" class="control-label col-lg-2">Conference Location<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="location" type="text" value="<?php echo $rowconf["conference_location"]; ?>" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                          <label for="status" class="control-label col-lg-2">Status (Current Status is: <b><?php echo $rowconf["status"]; ?></b>)<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="status">
                                                  <option value="Published">Published</option>
                                                  <option value="Accepted">Accepted</option>
                                              </select>
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