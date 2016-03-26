<?php
session_start();error_reporting(0);
require 'auth.php';
require 'header.php';
require 'connection.php';
?>
<body>
<section id="container" class="">
<?php
require 'topbar.php';
require 'sidebar.php';
?>
<section id="main-content">
<section class="wrapper">
	<div class="row">
		<div class="col-lg-12">
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
    else if($_SESSION["success"]==3){ ?>
                    <div class="alert alert-success">
                        <strong>Oops!</strong> <?php echo $_SESSION["message"];?>
                    </div>
                    <?php
        unset($_SESSION["success"]);unset($_SESSION["message"]);
    }
                    ?>
	        <!--ALERTS END -->
	        <h3 class="page-header">Profile Details (beta)</h3>
	        </div></div>
	        <div class="row">
	        	<div class="col-lg-12">
	        		<h4>Your currently uploaded image</h4>
	        		<?php      $path = "img/now/".$_SESSION["id"].".jpg";  if(file_exists($path)) {    echo "<img alt='' src='img/now/";echo $_SESSION["id"];echo ".jpg'> <br>IMAGE DETAILS:<br>"; $image_details = getimagesize($path);echo $image_details[3]; echo "<br>"; echo $image_details["mime"];} 
	        		else {         echo "No image uploaded";     }
	        		?>
	        		<br><br><br>
	        		<form action="photo_uploadprocess.php" method="post" enctype="multipart/form-data">
    					Select image to upload (GUIDELINES: please upload only .jpg files, Square (optional), 5 MB limit):<br>
    					<input type="file" name="fileToUpload" id="fileToUpload"><br>
    					<input type="submit" value="Upload Image" name="submit">
					</form>
	        	</div>
	        </div>
		</div>
	</div>
</section>
</section>
</section>
</body>
</html>