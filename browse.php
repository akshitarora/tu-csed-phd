<!DOCTYPE HTML>
<html>
	<head>
		<title>CSED Research</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="Akshit Arora, Abhinav Garg and Chahak Gupta">
		<meta name="description" content="Thapar University Ph.D. Portal">
		<!--
    For Suggestions contact -> Akshit Arora (akshit.arora1995@gmail.com)
    -->
    <meta property="og:url" content="http://onlinehostelj.in/phd/" />
<meta property="og:title" content="TU CSED Ph.D. Portal" />
<meta property="og:description" content="Information about ongoing research in various departments at Thapar University, Patiala. Young, motivated and dedicated faculty with a good ratio of faculty with Ph.D. Degree. Many faculty have certifications in cutting edge technology areas of Computer Science and Engineering. Department has Produced 30 PhDs in niche areas of Computer Engineering including Machine Learning, Data Mining and Cloud Computing. " />
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1072705366108136',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<meta property="og:type" content="website" />
<!--
<meta property="og:image" content="cgpcc12.jpg" />-->
        <meta property="og:site_name" content="Ph.D. Portal for Thapar University, Patiala"/>
    	<meta name="keyword" content="Ph.D., Portal, Thapar University, Patiala, India, Doctrate, Graduates, Education, Academia, www.thapar.edu, www.onlinehostelj.in, online, Thapar, University,
    	Academic, Institution, Study, computer science and engineeing department, department, schools, computer, science, CSED">
       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
	<body>
		<div id="page-wrapper">
			<div id="header-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="2u">
                            <a href="http://thapar.edu" id="header1">
                                <embed src="logo.png">
                            </a>
                        </div>
                        <div class="10u">
							<header id="header">
                                <h1><a id = "logo" href="#">Computer Science and Engineering Department</a></h1>
								<nav id="nav">
									<a href="index.php">Home</a>
									<a href="browse_2.php" class="current-page-item">Browse</a>
									<a href="contact.php" >Contact Us</a>
								</nav>
							</header>
						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="4u 12u(mobile)">
							<section>
								<h2>Browse</h2>
								<div>
									<div class="12u">
										<ul class="link-list">
											<li><a href="browse.php">Ph.D. Students</a></li>
											<li><a href="browse1.php">Faculty</a></li>
										</ul>
									</div>
								</div>
							</section>
						</div>
						<div class="8u 12u(mobile) important(mobile)">

							<section class="right-content">
								<!--<h2>Two Column #2 (left-hand sidebar)</h2>
								<a href=#><img src='images/pic2.jpg' alt='' class='left' /></a>-->
								<ul class="small-image-list">
									<?php
									require 'admin/connection.php';

									$sql = "SELECT * from student";
									$result = mysqli_query($conn,$sql);
									while ($row=mysqli_fetch_assoc($result))
									{
									echo "<li>
										<h4>".$row["sname"]."</h4>
										<p>Thesis Topic: "; if(!empty($row["sthesis"])) {
											echo $row["sthesis"];
										} else {
											echo "Not Decided Yet";
										};
										echo " (".$row["full_part"]." time)<br>
										Registration Number: ".$row["regno"]."<br>
										Supervisor: ".$row["supervisor1"]; if($row["supervisor2"]!="NULL") {
											echo " and ".$row["supervisor2"];
										};
										echo"<br>
										Ph.D. Stage: ".$row["status"]."<br>
										Contact: ".$row["semail"]."
									</li>";
								}
									?>
								</ul>
							</section>

						</div>
					</div>
				</div>
			</div>
			<div id="footer-wrapper">
				<div class="container">
					<!--<div class="row">
						<div class="8u 12u(mobile)">

							<section>
								<h2>How about a truckload of links?</h2>
								<div>
									<div class="row">
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Suspendisse varius ipsum</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Vitae magna sed dolore</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Suspendisse varius ipsum</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
											</ul>
										</div>
										<div class="3u 12u(mobile)">
											<ul class="link-list">
												<li><a href="#">Quis accumsan lorem</a></li>
												<li><a href="#">Sed neque nisi consequat</a></li>
												<li><a href="#">Eget et amet consequat</a></li>
												<li><a href="#">Dapibus sed mattis blandit</a></li>
												<li><a href="#">Vitae magna sed dolore</a></li>
											</ul>
										</div>
									</div>
								</div>
							</section>

						</div>
						<div class="4u 12u(mobile)">

							<section>
								<h2>Something of interest</h2>
								<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
								Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
								mollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
								lorem ipsum dolor sit amet consequat blandit.</p>
								<footer class="controls">
									<a href="#" class="button">Oh, please continue ....</a>
								</footer>
							</section>

						</div>
					</div>-->
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; Computer Science and Engineering Department, Thapar University. All rights reserved.
							</div>
							<center>
							<a href="developers.php">Developers: Akshit Arora, Chahak Gupta and Abhinav Garg</a><br>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
