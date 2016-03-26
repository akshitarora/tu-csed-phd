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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Add Conference Paper</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href=#>Research Paper</a></li>
        <li><i class="icon_document_alt"></i><a href="conf_add.php">Add Conference Paper</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Conference Paper Details
                </header>
                <div class="panel-body">
                  <div class="form">
                      <form class="form-validate form-horizontal" method="post" action="conf_addprocess.php">
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
                                    <label for="title" class="control-label col-lg-2">Title of paper<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="title" type="text" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="people" class="control-label col-lg-2">People<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="people" type="text" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Conference Name<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="name" type="text" required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="cdate" class="control-label col-lg-2">Conference Date<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="cdate" type="date" max=<?php echo date("Y-m-d");?> required />
                                        </div>
                                   </div>
                                   <div class="form-group ">
                                    <label for="location" class="control-label col-lg-2">Conference Location<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                          <input class="form-control" name="location" type="text" required />
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