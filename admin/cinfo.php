<?php session_start();error_reporting(0);
require 'auth.php';
if(1){
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
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
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
                    <!--No alerts here-->
                    <!--ALERTS END -->
                    <?php
                        $sql = "SELECT * FROM STUDENT WHERE regno=".$_GET["regno"].";";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>
					<center><h3>COMPLETE INFORMATION OF Ph.D. STUDENT</h3></center><br>
                  </div>
              </div>
              <div class="row jumbotron">
                  <center>
                      <h1><?php echo $row["sname"]; ?></h1>
                      <img src='<?php 
    $path = "img/now/".$row["regno"].".jpg";
    if(file_exists($path)) {
        echo $path;}
    else {
        echo "img/now/avatar1.png";}
                                ?>' class='img-rounded'/>
                  </center>
                  <br><h3><b>Ph.D. Information</b></h3>
                  <p><b>Registration Number</b>: <?php echo $row["regno"];?></p>
                  <p><b>Thesis Title</b>: <?php echo $row["sthesis"];?></p>
                  <p><b>Type</b>: <?php echo $row["full_part"];?> time</p>
                  <p><b>Date of URB</b>: <?php echo $row["sdurb"];?></p>
                  <p><b>Date of Admission</b>: <?php echo $row["sdoa"];?></p>
                  <p><b>Current Status</b>: <?php echo $row["status"];?></p>
                  
                  <?php
                        $sql1 = "SELECT * from courses where sregno = ".$row["regno"]." ORDER BY timestamp DESC;"; 
                        $result3 = mysqli_query($conn,$sql1);
                        echo "<br><h3><b>Coursework Information</b></h3>";
                        while($row2 = mysqli_fetch_assoc($result3)) {
                        $sql2 = "SELECT * from faculty WHERE fid = ".$row2["coordinator_fid"].";";
                        $result4 = mysqli_query($conn, $sql2);
                        $row5 = mysqli_fetch_assoc($result4);
                        echo "<p><b>Course Name</b>: ".$row2["cname"];"</p>";
                        echo "<p><b>Semester Code</b>: ".$row2["semcode"];"</p>";
                        echo "<p><b>Course Credits</b>: ".$row2["credits"];"</p>";
                        echo "<p><b>Class</b>: ".$row2["class"];"</p>";
                        echo "<p><b>Course Co-ordinator</b>: ".$row5["fname"];"</p>";
                        }
                  ?>
                  
                  <?php
                        if($row["comm_id"] != 0 && isset($row["comm_id"])) {
                            $sql4 = "SELECT * from STUDENT, doc_comm where student.comm_id = doc_comm.pno AND regno=".$_GET["regno"].";";
                            
                            $result2 = mysqli_query($conn,$sql4);
                            $row1 = mysqli_fetch_assoc($result2);
                            echo "<br><h3><b>Doctoral Committee Information</b></h3>";
                            echo "<p><b>Chairman</b>: ".$row1["chairman_fid"];"</p>";
                            echo "<p><b>Supervisor 1</b>: ".$row1["supervisor_1_fid"];"</p>";
                            echo "<p><b>Supervisor 2</b>: ".$row1["supervisor_2_fid"];"</p>";
                            echo "<p><b></b>: ".$row1["inside_1_fid"];"</p>";
                        }
                  ?>
                  
                  <br><br><h3><b>Contact Information</b></h3>
                  <p><b>E-mail Id</b>: <?php echo $row["semail"];?></p>
                  <p><b>Phone</b>: <?php echo $row["sphone"];?></p>
                  
                  <br><h3><b>Additional Information</b></h3>
                  <p><b>Date of Birth</b>: <?php echo $row["sdob"];?></p>
                  <p><b>Information last updated</b>: <?php echo $row["timestamp"];?></p>
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