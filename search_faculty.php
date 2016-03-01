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
  <!-- container section start -->
  <section id="container" class="">
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
                      <a class="" href="browse.php">
                          <i class="icon_document_alt"></i>
                          <span>Browse All</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="index.php">
                          <i class="icon_document_alt"></i>
                          <span>Home</span>
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
					<center><h3>SEARCH RESULTS</h3></center><br>
                  </div>
              </div>
              <div class="row">


<?php
    if( ( !isset($_GET["faculty_code"]) && !isset($_GET["fname"]) && !isset($_GET["phone"]) && !isset($_GET["email"]) && !isset($_GET["designation"]) && !isset($_GET["dob"])) || ( empty($_GET["faculty_code"]) && empty($_GET["fname"]) && empty($_GET["phone"]) &&  empty($_GET["email"]) && empty($_GET["designation"]) && empty($_GET["dob"]) ) ) {
        echo "<h4>&nbsp;&nbsp;&nbsp;&nbsp;No parameters to search</h4>";
} else {
        echo "<div class='col-sm-12 bootcards-list' id='list' data-title='students'>";
        $sql = "SELECT * from faculty WHERE def=1";
        if(isset($_GET["faculty_code"]) && !empty($_GET["faculty_code"]) ) {
            $sql .= " AND faculty_code LIKE '%".$_GET["faculty_code"]."%'";
        }
        if(isset($_GET["fname"]) && !empty($_GET["fname"]) ) {
            $sql .= " AND fname LIKE '%".$_GET["fname"]."%'";
        }
        if(isset($_GET["phone"]) && !empty($_GET["phone"]) ) {
            $sql .= " AND phone LIKE '%".$_GET["phone"]."%'";
        }
        if(isset($_GET["email"]) && !empty($_GET["email"]) ) {
            $sql .= " AND email LIKE '%".$_GET["email"]."%'";
        }
        if(isset($_GET["designation"]) && !empty($_GET["designation"]) ) {
            $sql .= " AND designation LIKE '%".$_GET["designation"]."%'";
        }
        if(isset($_GET["dob"]) && !empty($_GET["dob"]) ) {
            $sql .= " AND dob=".$_GET["dob"];
        }
    if ($result=mysqli_query($conn,$sql))
    {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
if(mysql_num_rows($result)=="FALSE"){
  echo "NO RESULTS FOUND";
}
  while ($row=mysqli_fetch_assoc($result))
    {
      echo "<a class='list-group-item' href='cinfo_2.php?f_code="; echo $row["faculty_code"]; echo "'>";

      echo "<img src='admin/img/now/avatar1.png' class='img-rounded pull-left'/>
        <h4 class='list-group-item-heading'>";echo $row["fname"]; echo "</h4>";
      echo "<p class='list-group-item-text'>"; echo $row["designation"]; echo "</p>";
      echo "<p class='list-group-item-text'>"; echo $row["email"];  echo "</p>";
      echo "<p class='list-group-item-text'>"; echo $row["department"];  echo "</p>";

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
    <?php require'admin/js.php';?>
  </body>
</html>
