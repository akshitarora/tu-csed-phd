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
        <!--Generalizing dashboard alerts-->
                    <?php 
    if($_SESSION["success"]==1){ ?>
                    <div class="alert alert-success">
                        <strong>Alert!</strong> <?php echo $_SESSION["message"];?>
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
            <h3 class="page-header"><i class="fa fa-files-o"></i>Edit Journal Details</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                <li><i class="icon_document_alt"></i><a href="journal.php">Edit Journal Details</a></li>
            </ol>
        </div>
    <div class="row">
    <section class="panel">
    <header class="panel-heading">Current Journal List</header>
    <div class="panel-body">
    <a href='journal_add.php'><button type='button' class='btn btn-primary'>Add New Journal</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <table cellpadding="10">
      <tr>
        <td><b>Title</b></td>
        <td><b>Authors</b></td>
        <td><b>Journal Name, Volume, Number</b></td>
        <td><b>Impact Factor</b></td>
        <td><b>Date Published</b></td>
        <td><b>Page Numbers</b></td>
        <td><b>Student Reg. No.</b></td>
        <td><b>Published / Accepted</b></td>
      </tr>
      <?php
                                                  $sqldept = "SELECT * from research_journal";
                                                  $resultdept = mysqli_query($conn,$sqldept);
                                                  while($rowdept = mysqli_fetch_array($resultdept,MYSQL_ASSOC)) {
                                                    echo "<tr><td>"; 
                                                    echo $rowdept["title"]; echo "</td><td>";
                                                    echo $rowdept["authors"]; echo "</td><td>";
                                                    echo $rowdept["journal_name"].", ".$rowdept["journal_volume"].", ".$rowdept["journal_no"]; echo "</td><td>";
                                                    echo $rowdept["journal_impact"]; echo "</td><td>";
                                                    echo $rowdept["publish_date"]; echo "</td><td>";
                                                    echo $rowdept["journal_pages"]; echo "</td><td>";
                                                    echo $rowdept["sid"]; echo "</td><td>";
                                                    echo $rowdept["status"]; echo "</td><td>";
                                                    echo "<a href='journal_edit.php?rid=";
                                                    echo $rowdept["rid"];
                                                    echo "'><button class='btn btn-primary'>Edit</button></a>";
                                                    echo "</td><td>";
                                                    echo "<a href='journal_delete.php?rid=";
                                                    echo $rowdept["rid"];
                                                    echo "'><button class='btn btn-danger'>Delete</button></a>";
                                                    echo "</td></tr>";
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