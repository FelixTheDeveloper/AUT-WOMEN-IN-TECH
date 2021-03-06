<!DOCTYPE HTML>

<?php
	session_start();
?>

<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Home | Women In Technology</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
			<div id="logo" style="position: absolute !important; z-index: 2 !important; margin-left: 50px;">
					<a href="index.php">
						<img src=" images/logo.png" href="index.php" width="160" height="160">
					</a>
					</div>
						<div id="header-wrapper">
							<header id="header" class="container">	
							<!-- Logo -->
							</header>
							<div id="sign-in-bar">
								<nav id="nav">
											<ul>
											<?php
													if (isset($_SESSION['firstName'])) {
														$email = $_SESSION['email'];
														?> <li style="margin-right: 1rem;"><a href="profile.php">Welcome, <?php echo $email ?> </a>
															<ul>
																<li><a href="logout.php">Log Out</a></li>
															</ul>
													</li> <?php
													} else {
														?> <li style="margin-right: 1rem;"><a href="login.php">Sign In</a></li> <?php
													}
												?>
												
											</ul>
							</div>
							<div id="nav-bar" style="background-color: #f26522">
									<header id="header" class="container">	
									<!-- Nav -->
										<nav id="nav">
											<ul>									
												<li><a href="about.php">About Us</a>
													<ul>
														<li><a href="about.php">About Us</a></li>
														<li><a href="team.php">Our Team</a></li>
													</ul>
												</li>
												<li><a href="events.php">Events</a></li>
												<li><a href="gallery.php">Gallery</a></li>
												<li><a href="staffstories.php">Success Stories</a>
													<ul>
														<li><a href="staffstories.php">Staff Profiles</a></li>
														<li><a href="studentstories.php">Student Profiles</a></li>
													</ul>
												</li>
												<li><a href="mentoring.php">Mentoring</a></li>
											</ul>
										</nav>
									</header>
							</div>
						</div>
			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row" style="display:flex; justify-content: center; align-items:center;">
							<h2>Women in Technology at AUT</h2>
						</div>
					</div>
				</div>


			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<a class="image featured"><img src="images/FB-Cover-AUT-Women-in-STEM-820x662.png" alt="" /></a><br>
						<article>
							<p style="margin: 0 auto; width: 90%;">
									<mark style="background-color: #fee2c0; color: inherit;">Women</mark> are under-represented in the fields of engineering, technology, science and mathematics. 
									These fields change the way we live – but they need more <mark style="background-color: #fee2c0; color: inherit;">women</mark> and people of colour to help 
									create new developments that serve all of society, not just a small segment. Our <mark style="background-color: #fee2c0; color: inherit;">female students, 
									staff</mark> and alumni are proving they can play key roles in these male <mark style="background-color: #fee2c0; color: inherit;">dominated</mark> fields. We also run  
								programmes for high school and primary school students so we can inspire more girls to get into 
								these fields. 
	
							</p>
						</article>

						<div id="sidebar container">

							<!-- Sidebar -->
							<section style="background-color: #fee2c0; padding: 40px 41px 42px;">
								<iframe height="400px" width="400px"
									src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWomen-in-Technology-at-AUT-100506515131889&tabs=timeline&width=400&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
									style="border:none;overflow:hidden; " scrolling="no" frameborder="0" allowTransparency="true"
									allow="encrypted-media"></iframe>


								<iframe width="640" height="400" src="https://www.youtube.com/embed/P4LV06LD-9M" frameborder="1"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
									style=" float: right;"></iframe>
							</section>

						</div>
					</div>
				</div>

					
					

				<!-- Begin Mailchimp Signup Form -->	
			<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<!-- Contact -->
					<div class="footer-row">
						<div style="width: 100%; display: flex; flex-direction: row; justify-content: center;">
							<section class="widget contact">
								<p class="menu">
								<h3 style="color:#e9f2f7;">Contact Us</h3>
								<ul class="menu">
									<li><a href="https://twitter.com/WomenInTech_AUT" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/Women-in-Technology-at-AUT-100506515131889" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/womenintech_aut/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</section>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; R&D Team, 2020. All rights reserved</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

		</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>