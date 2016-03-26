<?php
session_start();error_reporting(0);
if($_SESSION["loggedin"]=="yes" && $_SESSION["role"]=="admin"){
require 'header.php';
    require'connection.php';
?>
<body>
  <!-- container section start -->
  <section id="container" class="">
      <?php require 'topbar.php';?>      
      <!--header end-->
      <!--sidebar start-->
      <?php require 'sidebar.php';?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
    <section class="panel">
    <header class="panel-heading">Current Admins List</header>
    <div class="panel-body">
    <a href='admin_add.php'><button type='button' class='btn btn-primary'>Add New Admin</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='admin_edit.php'><button type='button' class='btn btn-primary'>Edit Existing Admin</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='admin_delete.php'><button type='button' class='btn btn-danger'>Delete Existing Admin</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <table cellpadding="10">
      <tr>
        <td><b>Full Name</b></td>
        <td><b>Username</b></td>
        <td><b>Phone Number</b></td>
        <td><b>E-mail</b></td>
      </tr>
      <?php
                                                  $sqldept = "SELECT * from login where role='admin'";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    echo "<tr><td>"; echo $rowdept["full_name"]; echo "</td><td>";
                                                    echo $rowdept["_id"]; echo "</td><td>";
                                                    echo $rowdept["phone"];echo "</td><td>";
                                                    echo $rowdept["email"];
                                                    echo "</td></tr>";
                                                  }
                                                  ?>
    </table>
    </div>
    </section>
    </div>
		  
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <?php require 'js.php';?>
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