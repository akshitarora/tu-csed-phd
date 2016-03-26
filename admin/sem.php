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
      <h3 class="page-header"><i class="fa fa-files-o"></i>Edit Semester</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
        <li><i class="icon_document_alt"></i><a href="sem.php">Edit Semester</a></li>
      </ol>
    </div>
    <div class="row">
      <section class="panel">
        <header class="panel-heading">
                    Semester Details
                </header>
                <div class="panel-body">
                  <a href='sem_edit.php'><button type='button' class='btn btn-primary'>Edit Existing Semester</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='sem_add.php'><button type='button' class='btn btn-primary'>Add New Semester</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='sem_delete.php'><button type='button' class='btn btn-danger'>Delete Existing Semester</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <table cellpadding="10">
      <tr>
        <td><b>Semester Code</b></td>
        <td><b>Year</b></td>
        <td><b>Type of Semester</b></td>
      </tr>
      <?php
                                                  $sqldept = "SELECT * from semester";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    if($rowdept["odd"] == 0) {$oddsem = "Even Semester";} else {$oddsem = "Odd Semester";}
                                                    echo "<tr><td>"; echo $rowdept["semcode"]; echo "</td><td>";
                                                    echo $rowdept["year"]; echo "</td><td>".$oddsem."</tr>";
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