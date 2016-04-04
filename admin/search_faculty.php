<?php session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
    require 'header.php';require 'connection.php';
?>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <?php require'topbar.php';?>      
      <!--header end-->
      
      <!--sidebar start-->
      <?php require 'sidebar.php';?>
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
            $sql .= " AND designation = '".$_GET["designation"]."'";
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
      
      echo "<img src='img/now/avatar1.png' class='img-rounded pull-left'/>
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
    <?php require'js.php';?>
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