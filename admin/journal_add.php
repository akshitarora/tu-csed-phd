<?php
session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
require 'header.php';
    $conn = new mysqli("localhost", "root", "","phd");
?>
<body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>
            <a href="index.php" class="logo"><span class="lite">Admin</span></a>
           <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/now/<?php      $path = "img/now/".$_SESSION["id"]."1_small.jpg";  if(file_exists($path)) {    echo $_SESSION["id"];} else {         echo "avatar";     }?>1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION["name"];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="signout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Add People</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="student_add.php">Students</a></li>
                          <li><a class="" href="faculty_add.php">Faculty Members</a></li>
                          <li><a class="" href="admin_add.php">Admins</a></li>
                      </ul>
                      
                  </li>
                  <li class="sub-menu active">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Research Work</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a class="" href="journal_add.php">Journal Article</a></li>
                          <li><a class="" href="book_add.php">Book Chapters</a></li>
                          <li><a class="" href="conf_add.php">Conference Papers</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--MAIN CONTENT start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>New Journal Article</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Journal Article</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Journal Details
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="journal_addprocess.php">
                                      <div class="form-group ">
                                          
                                          <label for="title" class="control-label col-lg-2">Title of the Article<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="title" name="title" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          
                                          <label for="authors" class="control-label col-lg-2">Authors<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="authors" name="authors" type="text" placeholder="please enter in comma separated format" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="journal_name" class="control-label col-lg-2">Journal Name<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="journal_name" name="journal_name" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="journal_volume" class="control-label col-lg-2">Journal Volume<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="journal_volume" name="journal_volume" type="number" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="journal_number" class="control-label col-lg-2">Journal Number<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="journal_number" name="journal_number" type="number" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="publish_date" class="control-label col-lg-2">Publish Date</label>
                                          <div class="col-lg-10">
                                              <input id="publish_date" type="date" name="publish_date" size="16" class="form-control">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="journal_pages" class="control-label col-lg-2">Journal Pages<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="journal_pages" name="journal_pages" type="text" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="status" class="control-label col-lg-2">Status<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
                                              <select name="status">
                                                  <option value="Published">
                                                  <option value="Accepted">
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="sid" class="control-label col-lg-2">Student <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              
                                              <select name="sid">
<?php
    $sql = "SELECT regno,sname from student ORDER BY sname";
    if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option value=";
    printf ("%d",$row[0]);
       echo ">" ;
      echo $row[1];echo "&nbsp;&nbsp;&nbsp;"; echo $row[0]; 
      echo"</option>";
    }
  // Free result set
  mysqli_free_result($result);
}  
?>
                                              </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="journal_impact" class="control-label col-lg-2">Journal Impact Factor<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="journal_impact" name="journal_impact" type="float" required />
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custom script for all page-->
    <script src="js/scripts.js"></script>    


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