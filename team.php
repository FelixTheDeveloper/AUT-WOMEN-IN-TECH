<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Team | Women In Technology</title>
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
				<!-- Features -->
				<div id="main-wrapper">
						<div class="container">
							<h2>Our Team</h2>

							<table>
								<tr>
									<td width="30%"><a class="image featured"><img src="images/team_bios/mahsa.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<h2>Mahsa Mohaghegh</h2>
											</header>
												<p>
														Dr Mahsa Mohaghegh is a Director of Women in Technology and Senior Lecturer 
														in AUT’s School of Engineering, Computer and Mathematical Sciences. She is a 
														well-recognised leader in AI and machine learning and is also the founder of 
														the charitable trust She Sharp, a women’s technology networking and learning 
														group, where she works to encourage young New Zealand girls to consider what 
														a career in technology offers. She was named winner of the Emerging Leader 
														category in the 2013 Westpac Women of Influence Awards and was one of ten 
														finalists for 2018 Kiwibank New Zealander of the Year. In 2019 she was the 
														Champion Award winner of the YWCA Equal Pay awards, and in 2020 presented 
														with the Massey University Distinguished Alumni Award.
												</p>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/team_bios/leanne.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<h2>Leanne Bint</h2>
											</header>
												<p>
														Leanne Bint has worked within AUT’s School of Engineering, Computer & Mathematical 
														Sciences for 10 years.  She works in an External Relations and Development Role 
														which aligns with AUT’s strategic directions. She is skilled in relationship and 
														partner development, industry and stakeholder management, sponsorship, event 
														management, and enjoys contributing to a variety of projects.  She enjoys 
														supporting women in technology due to the exciting career paths and opportunities 
														in these industries.  Women also need to ensure they contribute to the development 
														of technologies so these are produced with all users in mind.
												</p>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/team_bios/tim.JPG" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="profiles">
											<header>
												<h2>Tim Anderson</h2>
											</header>
												<p>
														Tim Anderson is a Senior Lecturer in the Department of Mechanical Engineering and 
														works extensively in the field of renewable energy and solar energy in particular. 
														He has a passion for the humanistic issues that are central to engineering as a 
														profession, and the role that engineers can play in society.
												</p>
										</div></td>
								</tr>
								<tr>
										<td><a class="image featured"><img src="images/team_bios/lorenzo.JPG" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
										<td><div class="inner">
												<header>
													<h2>Lorenzo Garcia</h2>
												</header>
													<p>
															Lorenzo Garcia is a lecturer at AUT and a BioDesign Engineer, specialized in 
															musculoskeletal biomechanics but also with extensive experience in technology 
															transfer, innovation management and design of medical devices. He has a background 
															in Applied Physics, Mechanical Engineering and Biomedical Engineering. Interrelated 
															with his interest in healthcare, quality of life and sustainability, he has combined 
															his role as technology manager with his passion to fulfil bioengineering needs in 
															two areas: healthcare technology and ocean technology. He is a supporter of diversity, 
															wellbeing and inclusion in engineering and among other initiatives he is actively part 
															of the DCT Women in Technology to inspire and support particularly women in the sector. 
													</p>
											</div></td>
									</tr>
									<tr>
											<td><a class="image featured"><img src="images/team_bios/sam.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
											<td><div class="inner">
													<header>
														<h2>Sam Madanian</h2>
													</header>
														<p>
																Sam Madanian is a lecturer and researcher at AUT, department of Computer Science with a 
																multidisciplinary background and profile. Her passions are teaching and research in the 
																fields of health informatics and project management. Her industrial experience, coupled 
																with my current research interests, allows her to bridge the gap between academia and 
																industry and putting the academic knowledge into practice. She strongly believes in 
																diversity and equity in STEM fields and her main objective of joining this group is 
																to support and empower our female students in STEM and encourage more females in the 
																STEM pathway.
														</p>
												</div></td>
										</tr>
							</table>
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