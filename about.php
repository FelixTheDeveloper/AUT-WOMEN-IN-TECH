<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>About | Women In Technology</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload no-sidebar">
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
								</nav>
							</div>
							<div id="nav-bar" style="background-color: #f26522">
									<header id="header" class="container">	
									<!-- Nav -->
										<nav id="nav">
											<ul>									
												<li class="current"><a href="about.php">About Us</a>
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

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Content -->
								<article>
								<a class="image featured"><img src="images/AUT-Women-in-STEM-Web-Angle-1308x280.png" alt="" /></a>            
                  				<h2>About us</h2>

									<p>Our story started 5 years ago; a woman in tech with a dream to change representation in STEM-related fields. 
										Since then we have held over thirty events, workshops, and networking opportunities offering a safe, inclusive, 
										and diverse environment for everyone interested in all things STEM.</p>

									<p>We want influence the next generation of leaders, doers, and thinkers in STEM by showing young girls and women strong role models! 
										We want to encourage the next generation of leaders, doers, and thinkers in STEM, by showing them the importance and relevance of 
										STEM career paths for the future. We want to inspire the next generation of leaders, doers, and thinkers in STEM, by showing them 
										that they belong just as much as everyone else! </p>
										
									<p>AUT WOMEN IN TECH believes in equality. Our events are an open opportunity for all, regardless of background or gender, 
										high school or professional, we invite all to work together to make a difference in the representation of women in STEM.  
										AUT WOMEN IN TECH is proud to call Google and the Auckland University of Technology (AUT) our partners who work with us 
										to support women in STEM, driving diversity and inclusion in New Zealand and across the world! 
										Over 100 AUT WOMEN IN TECH members come together to change the face of STEM, advocating for diversity, equal opportunity, 
										and more representation of minorities in leadership roles in STEM. 
										AUT WOMEN IN TECH  has inspired many women to consider a career in STEM. We hope to continue to inspire many more!</p>
            					</article>

								<br>
								<div style="width: 100%; display: flex; flex-direction: row; justify-content: center;">
									<iframe src="https://www.login.php/maps/embed?pb=!1m14!1m8!1m3!1d12770.205437965518!2d174.7673188!3d-36.8532194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe08f185abdafcdbd!2sAuckland%20University%20of%20Technology!5e0!3m2!1sen!2snz!4v1594189242684!5m2!1sen!2snz" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
								<br>
						</div>
					</div>
				</div>

			<!-- Footer -->
			<div id="footer-wrapper">
					<footer id="footer" class="container">
						<!-- Contact -->
						<div class="footer-row">
							<div style="width: 100%; display: flex; flex-direction: row; justify-content: center;">
								<section class="widget contact">
									<h3 style="color:#e9f2f7;">Contact Us</h3>
									<ul class="menu">
										<li><a   href="https://twitter.com/WomenInTech_AUT" target="_blank" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a   href="https://www.facebook.com/Women-in-Technology-at-AUT-100506515131889" target="_blank" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a   href="https://www.instagram.com/womenintech_aut/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
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

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>