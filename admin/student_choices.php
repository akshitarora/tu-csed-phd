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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Student options</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href="sem.php">Student options</a></li>
      </ol>
    </div>
    <div class="row">
    <!--Generalizing dashboard alerts-->
                    <?php 
    if($_SESSION["success"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Success!</strong> <?php echo $_SESSION["message"];?>
                    </div>
                    <?php 
                    unset($_SESSION["success"]); unset($_SESSION["message"]);
                    }
    else if($_SESSION["success"]==2){ ?>
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> Unable to process information right now. Please contact the administrator at akshit [dot] arora1995 [at] gmail [dot] com .
                    </div>
                    <?php
        unset($_SESSION["success"]);unset($_SESSION["message"]);
    }
                    ?>
                    <!--ALERTS END -->
      <section class="panel">
        <header class="panel-heading">
                    Student Details
                </header>
                <div class="panel-body">
                  <a href='student_edit1.php'><button type='button' class='btn btn-primary'>Edit Existing Student Details</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='student_add.php'><button type='button' class='btn btn-primary'>Add New Student</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='student_delete.php'><button type='button' class='btn btn-danger'>Delete Existing Student</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <br><br>
    <table cellpadding="10">
      
      <?php
                                                  $sql = "SELECT * from student where regno <> 0  ORDER by sname";
                                                  $result = mysqli_query($conn,$sql);
                                                  if ($result=mysqli_query($conn,$sql))
    {
        echo "<div class='panel panel-default'>";
        echo "<div class='list-group'>";
  // Fetch one and one row
if(mysql_num_rows($result)=="FALSE"){
  echo "NO RESULTS FOUND";
}

//echo $sql;
  while ($row=mysqli_fetch_assoc($result))
    {
      
//      echo var_dump($row);
      echo "<a class='list-group-item' href='cinfo.php?regno="; echo $row["regno"]; echo "'>";
      echo $row["sname"]; echo "</h3><br>";
      echo "<p class='list-group-item-text'> Registration No.: "; echo $row["regno"]; echo "</p>";
      echo "</a>";
    }
        echo "</div>";
        echo "</div>";
  // Free result set
  mysqli_free_result($result); echo "</div>";
    }
                                                  ?>
    </table>
                </div>
      </section>
    </div>
  </section>
  </section>
  </section>
  <?php require'js.php';?>
  </body>
</html>