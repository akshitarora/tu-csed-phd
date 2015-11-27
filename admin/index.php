<?php session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
    require 'header.php';
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
                                <img alt="" src="img/now/<?php 
    $path = "img/now/".$_SESSION["id"]."1_small.jpg";
 if(file_exists($path)) {
   echo $_SESSION["id"];} else {
        echo "avatar";
    }?>1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION["name"]; ?></span>
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
                  <li class="active">
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
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon_document_alt"></i>
                          <span>Research Work</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="journal_add.php">Journal Article</a></li>
                          <li><a class="" href="book_add.php">Book Chapters</a></li>
                          <li><a class="" href="conf_add.php">Conference Papers</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
                    <!--ALERTS START -->
                    
                    <?php 
    if($_SESSION["success_student_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Student has been added!
                    </div>
                    <?php unset($_SESSION["success_student_added"]);
                    }
    else if($_SESSION["success_student_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_student_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_faculty_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Faculty has been added!
                    </div>
                    <?php unset($_SESSION["success_faculty_added"]);
                    }
    else if($_SESSION["success_faculty_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please make sure if the faculty id entered was unique or not. If the problem persists, please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_faculty_added"]);
    }
                    ?>
                    
                    
                    <?php 
    if($_SESSION["success_admin_added"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> Admin has been added!
                    </div>
                    <?php unset($_SESSION["success_admin_added"]);
                    }
    else if($_SESSION["success_admin_added"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success_admin_added"]);
    }
                    ?>
                    <!--ALERTS END -->
					<h3 class="page-header"><i class="fa fa-laptop"></i>Welcome <?php echo $_SESSION["name"];?>!</h3><br>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6 form">
                      <center><h4>Search Student</h4></center><br>
                      <form class="form-validate form-horizontal" method="get" action="search_student.php">
                          <div class="form-group">
                              <label for="rweegno" class="control-label col-lg-2">Registration Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="regno" name="regno" min=1000000000 type="number"/>  
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sname" class="control-label col-lg-2">Name</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sname" name="sname" type="text"/>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="control-label col-lg-2">Full / Part Time</label>
                              <div class="col-lg-10">
                                  <div class="radios">
                                      <label class="label_radio" for="radio-01">
                                          <input name="full_part" id="radio-01" value="full" type="radio"/> Full Time
                                      </label>
                                      <label class="label_radio" for="radio-02">
                                          <input name="full_part" id="radio-02" value="part" type="radio" /> Part Time
                                      </label>
                                  </div>
                              </div>
                          </div>
                         
                          <div class="form-group ">
                              <label for="status" class="control-label col-lg-2">Status</label>
                              <div class="col-lg-10">                          
                                  <select name="status">
                                      <option value="">--</option>
                                      <option value="Coursework">Coursework</option>
                                      <option value="URB Pending">URB Pending</option>
                                      <option value="Ongoing">Ongoing</option>
                                      <option value="Synopsis Submitted">Synopsis Submitted</option>
                                      <option value="Thesis Submitted">Thesis Submitted </option>
                                      <option value="Ph.D. Completed">Ph.D. Completed</option>
                                  </select>
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="semail" class="control-label col-lg-2">E-Mail</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="semail" type="email" name="semail"  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sthesis" class="control-label col-lg-2">Thesis Title</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sthesis" name="sthesis" type="text"  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sphone" class="control-label col-lg-2">Phone Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="sphone" name="sphone" type="text" />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sdob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                                  <input id="sdob" type="date" name="sdob" size="16" class="form-control" />
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-lg-12">
                                  <center><button class="btn btn-primary" type="submit">Search</button></center>
                              </div>
                          </div>
                      </form><br><br>
                      <!--
                      <center><h4>List of all Ph.D. students</h4></center><br>
                      <div class="col-sm-12 bootcards-list" id="list" data-title="students">
                          
<?php /*
    $conn = new mysqli("localhost", "root", "","phd");
    $sql = "SELECT * from student";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result))
    {
      echo "<a class='list-group-item' href='cinfo.php?regno="; echo $row["regno"]; echo "'>";
      
      echo "<img src='img/now/avatar1.png' class='img-rounded pull-left'/>
        <h3 class='list-group-item-heading'>&nbsp;";echo $row["sname"]; echo "</h3>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["semail"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["status"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["full_part"]; echo " time</p>";
      
      echo "</a>";
    }
        echo "</div>";
        echo "</div>";
  // Free result set
  mysqli_free_result($result);
}  */
?>
                  </div>-->
                  </div>
                  <div class="col-lg-6 form">
                      <center><h4>Search Faculty</h4></center><br>
                      <form class="form-validate form-horizontal" method="get" action="search_faculty.php">
                          
                          <div class="form-group ">
                              <label for="fname" class="control-label col-lg-2">Name</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="fname" name="fname" type="text"/>
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="faculty_code" class="control-label col-lg-2">Faculty Id</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="faculty_code" name="faculty_code" type="text" placeholder="Example: KJK, PBH, SJ, SGO etc."  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="semail" class="control-label col-lg-2">E-Mail</label>
                              <div class="col-lg-10">
                                  <input class="form-control " id="email" type="email" name="semail"  />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sphone" class="control-label col-lg-2">Phone Number</label>
                              <div class="col-lg-10">
                                  <input class="form-control" id="phone" name="sphone" type="text" />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="sdob" class="control-label col-lg-2">Date of Birth</label>
                              <div class="col-lg-10">
                                  <input id="sdob" type="date" name="dob" size="16" class="form-control" />
                              </div>
                          </div>
                          
                          <div class="form-group ">
                              <label for="designation" class="control-label col-lg-2">Designation</label>
                              <div class="col-lg-10">
                                  <select id="designation" name="designation">
                                      <option value="">--</option>
                                      <option value="Associate Professor">Associate Professor</option>
                                      <option value="Assistant Professor">Assistant Professor</option>
                                      <option value="Lecturer">Lecturer</option>
                                  </select>
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-lg-12">
                                  <center><button class="btn btn-primary" type="submit">Search</button></center>
                              </div>
                          </div>
                      </form><br><br><!--
                      <center><h4>List of all Faculty</h4></center><br>
                      <div class="col-sm-12 bootcards-list" id="list" data-title="students">
                          
<?php /*
    $conn = new mysqli("localhost", "root", "","phd");
    $sql = "SELECT * from faculty";
    if ($result=mysqli_query($conn,$sql))
  {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result))
    {
      echo "<a class='list-group-item' href='cinfo_2.php?f_code="; echo $row["faculty_code"]; echo "'>";
      
      echo "<img src='img/now/avatar1.png' class='img-rounded pull-left'/>
        <h4 class='list-group-item-heading'>&nbsp;";echo $row["fname"]; echo "</h4>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["designation"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["email"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp;"; echo $row["department"]; echo "</p>";
      
      echo "</a>";
    }
        echo "</div>";
        echo "</div>";
  // Free result set
  mysqli_free_result($result);
} */ 
?>
                  </div>-->
              </div>
              </div>
          </section>
      </section>
      <!--main content end-->
      </section>
  <!--   container section start -->
      
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custom script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
<script type="text/javascript">

      /*
       * Initialize Bootcards.
       * 
       * Parameters:
       * - offCanvasBackdrop (boolean): show a backdrop when the offcanvas is shown
       * - offCanvasHideOnMainClick (boolean): hide the offcanvas menu on clicking outside the off canvas
       * - enableTabletPortraitMode (boolean): enable single pane mode for tablets in portraitmode
       * - disableRubberBanding (boolean): disable the iOS rubber banding effect
       * - disableBreakoutSelector (string) : for iOS apps that are added to the home screen:
                            jQuery selector to target links for which a fix should be added to not
                            allow those links to break out of fullscreen mode.
       */
       
      bootcards.init( {
        offCanvasBackdrop : true,
        offCanvasHideOnMainClick : true,
        enableTabletPortraitMode : true,
        disableRubberBanding : true,
        disableBreakoutSelector : 'a.no-break-out'
      });

      //enable FastClick
      window.addEventListener('load', function() {
          FastClick.attach(document.body);
      }, false);

      //activate the sub-menu options in the offcanvas menu
      $('.collapse').collapse();

      //theme switcher: only needed for this sample page to set the active CSS
      $('input[name=themeSwitcher]').on('change', function(ev) {
        var theme = $(ev.target).val();
        var themeCSSLoaded = false;

        $.each( document.styleSheets, function(idx, css) {
          var href = css.href;
          if (href.indexOf('bootcards')>-1) {
            if (href.indexOf(theme)>-1) {
              themeCSSLoaded = true;
              css.disabled = false;
            } else {
              css.disabled = true;
            }
          }
        });

        if (!themeCSSLoaded) {
          $("<link/>", {
             rel: "stylesheet",
             type: "text/css",
             href: "//cdnjs.cloudflare.com/ajax/libs/bootcards/1.1.1/css/bootcards-" + theme + ".min.css"
          }).appendTo("head");
        }
        
      });

    </script>
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