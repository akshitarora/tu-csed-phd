<?php session_start();error_reporting(0);

    require 'admin/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Akshit Arora, Abhinav Garg and Chahak Gupta">
        <meta name="description" content="Thapar University Ph.D. Portal">
        <!--
    For Suggestions contact -> Akshit Arora (akshit.arora1995@gmail.com)
    -->
    <meta property="og:url" content="http://onlinehostelj.in/phd/" />
<meta property="og:title" content="TU CSED Ph.D. Portal" />
<meta property="og:description" content="Information about ongoing research in various departments at Thapar University, Patiala. Young, motivated and dedicated faculty with a good ratio of faculty with Ph.D. Degree. Many faculty have certifications in cutting edge technology areas of Computer Science and Engineering. Department has Produced 30 PhDs in niche areas of Computer Engineering including Machine Learning, Data Mining and Cloud Computing. " />
<meta property="og:type" content="website" />
<!--
<meta property="og:image" content="cgpcc12.jpg" />-->
        <meta property="og:site_name" content="Ph.D. Portal for Thapar University, Patiala"/>
        <meta name="keyword" content="Ph.D., Portal, Thapar University, Patiala, India, Doctrate, Graduates, Education, Academia, www.thapar.edu, www.onlinehostelj.in, online, Thapar, University,
        Academic, Institution, Study, computer science and engineeing department, department, schools, computer, science, CSED">
    <link rel="shortcut icon" href="admin/img/favicon.png">
    <title>Admin Panel</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootcards/1.1.1/css/bootcards-desktop.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="admin/js/bootcards.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.3/fastclick.min.js"></script>
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />
    <!--
    For Suggestions contact -> Akshit Arora (akshit.arora1995@gmail.com)
    -->
  </head>
  <body>
    <!--topbar starts-->
    <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
                </div>
                <a href="browse_2.php" class="logo"><span class="lite">PORTAL</span></a>
               <div class="top-nav notification-row">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="" src="admin/img/now/<?php      $path = "admin/img/now/avatar1_small.jpg";  if(file_exists($path)) {             echo "avatar";     }?>1_small.jpg">
                                </span>
                                <span class="username"><?php echo $_SESSION["name"];?></span>
                                <b class="caret"></b>
                            </a>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
          </header>
    <!--topbar end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li>
                    <a class="" href="browse_2.php">
                        <i class="icon_document_alt"></i>
                        <span>Search</span>
                    </a>
                </li>
                <li>
                    <a class="" href="index.php">
                        <i class="icon_document_alt"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="" href="browse.php">
                        <i class="icon_document_alt"></i>
                        <span>Browse All</span>
                    </a>
                </li>
                <li>
                    <a class="" href="contact.php">
                        <i class="icon_document_alt"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a class="" href="developers.php">
                        <i class="icon_document_alt"></i>
                        <span>Developers</span>
                    </a>
                </li>
            </ul>
          </aside>
            <!-- sidebar menu end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
                    <!--ALERTS START -->
                    <!--No alerts here-->
                    <!--ALERTS END -->
					<center><h3>SEARCH RESULTS</h3></center><br>
                  </div>
              </div>
              <div class="row">


<?php
    if((!isset($_GET["regno"]) && !isset($_GET["sname"]) && !isset($_GET["full_part"]) &&  !isset($_GET["status"]) && !isset($_GET["sthesis"]) && !isset($_GET["semail"]) && !isset($_GET["sphone"]) && !isset($_GET["sdob"])) || ( empty($_GET["regno"]) && empty($_GET["sname"]) && empty($_GET["full_part"]) &&  empty($_GET["status"]) && empty($_GET["sthesis"]) && empty($_GET["semail"]) && empty($_GET["sphone"]) && empty($_GET["sdob"]) ) ) {
        echo "<h4>&nbsp;&nbsp;&nbsp;&nbsp;No parameters to search</h4>";
} else {
        echo "<div class='col-sm-12 bootcards-list' id='list' data-title='students'>";
        $sql="SELECT * from student WHERE def=1";
        if(!empty($_GET["regno"]) && isset($_GET["regno"])) {
            $sql .= " AND regno=".$_GET["regno"];
        }
        if(!empty($_GET["sname"]) && isset($_GET["sname"])) {
            $sql .= " AND sname LIKE '%".$_GET["sname"]."%'";
        }
        if(!empty($_GET["full_part"]) && isset($_GET["full_part"])) {
            $sql .= " AND full_part='".$_GET["full_part"]."'";
        }
        if(!empty($_GET["status"]) && isset($_GET["status"])) {
            $sql .= " AND status='".$_GET["status"]."'";
        }
        if(!empty($_GET["sthesis"]) && isset($_GET["sthesis"])) {
            $sql .= " AND lower(sthesis) LIKE '%".$_GET["sthesis"]."%'";
        }
        if(!empty($_GET["semail"]) && isset($_GET["semail"])) {
            $sql .= " AND semail LIKE '%".$_GET["semail"]."%'";
        }
        if(!empty($_GET["sphone"]) && isset($_GET["sphone"])) {
            $sql .= " AND sphone LIKE '%".$_GET["sphone"]."%'";
        }
        if(!empty($_GET["sdob"]) && isset($_GET["sdob"])) {
            $sql .= " AND sdob='".$_GET["sdob"]."'";
        }


    if ($result=mysqli_query($conn,$sql))
    {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result))
    {
      $sqlpro = "SELECT * from progress WHERE sid=".$row["regno"]." ORDER by urbdate DESC";
      $resultpro = mysqli_query($conn,$sqlpro);
      $rowpro = mysqli_fetch_assoc($resultpro);
      echo "<a class='list-group-item' href='cinfo.php?regno="; echo $row["regno"]; echo "'>";
      echo "<img src='admin/img/now/avatar1.png' class='img-rounded pull-left'/>
        <h3 class='list-group-item-heading'>&nbsp;";echo $row["sname"]; echo "</h3><br>";
      echo "<p class='list-group-item-text'>&nbsp; Email: "; echo $row["semail"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp; Thesis:"; echo $row["sthesis"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp; Registration No.: "; echo $row["regno"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp; Supervisor: "; echo $row["supervisor1"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp; PhD Stage: "; echo $row["status"]; echo "</p>";
      echo "<p class='list-group-item-text'>&nbsp; Percentage progress: "; echo $rowpro["percentage"]; echo "</p>";
      echo "</a>";
    }
        echo "</div>";
        echo "</div>";
  // Free result set
  mysqli_free_result($result); echo "</div>";
    }

    }
?>

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
