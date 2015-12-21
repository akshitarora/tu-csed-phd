<?php

	session_start();error_reporting(0);session_unset();

?>
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
    <meta property="og:url" content="http://onlinehostelj.in/phd" />
<meta property="og:title" content="TU CSED Ph.D. Portal" />
<meta property="og:description" content="Information about ongoing research in various departments at Thapar University, Patiala. Young, motivated and dedicated faculty with a good ratio of faculty with Ph.D. Degree. Many faculty have certifications in cutting edge technology areas of Computer Science and Engineering. Department has Produced 30 PhDs in niche areas of Computer Engineering including Machine Learning, Data Mining and Cloud Computing. " />
<meta property="og:type" content="Organization" />
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
                                <h1><a id = "logo" href=#>Computer Science and Engineering Department</a></h1>
								<nav id="nav">
									<a href="index1.html" class="current-page-item">Home</a>
								</nav>
							</header>
						</div>
					</div>
				</div>
			</div>
			<div id="banner-wrapper">
				<div class="container">
					<div id="banner">
						<h2 style="text-transform: capitalize">Welcome to Ph.D. Portal!</h2>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="4u 12u(mobile)">
							<section>
								<h2 style="text-transform: capitalize">About Us</h2>
								<p>Young, motivated and dedicated faculty with a good ratio of faculty with Ph.D. Degree. Many faculty have certifications in cutting edge technology areas of Computer Science and Engineering. Department has Produced 30 PhDs in niche areas of Computer Engineering including Machine Learning, Data Mining and Cloud Computing. Department produces excellent quality PG Thesis by ensuring Quality through Plagiarism tools and mandatory quality publications. Weekly Research Seminar on Every Wednesday on latest topics by experts/researchers and academicians.</p>
							</section>
						</div>
						<div class="4u 12u(mobile)">
							<section>
								<h2 style="text-transform: capitalize">Faculty</h2>
								<ul class="small-image-list">
									<li>
										<a href=#><img src="images/deepak.jpg" alt="" class="left" /></a>
										<h4>Dr. Deepak Garg</h4>
										<p>dgarg@thapar.edu<br>
                                        Associate Professor & Head of Department</p>
									</li>
									<li>
										<a href="#"><img src="images/parteek.jpg" alt="" class="left" /></a>
										<h4>Dr. Parteek Bhatia</h4>
										<p>parteek.bhatia@thapar.edu<br>
                                        Assistant Professor and Admin (Ph.D. Portal)</p>
									</li>
								</ul>
							</section>
						</div>
						<div class="4u 12u(mobile)">
							<section class="jumbotron">
                                <center><h2 style="text-transform: capitalize">Log In</h2></center>
                                <form class="form-group" role="form" method="post" name="form1" action="sign_process.php">
                                    <div class="form-group">
                                        <label for="usr">username:</label>
                                        <input type="text" class="form-control" id="usr" name="uname"><br>
                                        <label for="pwd">password:</label>
                                        <input type="password" class="form-control" id="pwd" name="password">
                                        <br>
                                        <center>
                                        <button type='submit' class="btn btn-primary btn-lg" name="Submit">Log In</button>
                                        </center>
                                    </div>
                                </form>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; CSED, Thapar University. All rights reserved.
							</div>
							<center>
							<a href="developers.php">Developers</a>
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
<?php
session_destroy();
?>