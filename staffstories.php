<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Staff Stories | Women In Technology</title>
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
												<li><a href="about.php">About Us</a>
													<ul>
														<li><a href="about.php">About Us</a></li>
														<li><a href="team.php">Our Team</a></li>
													</ul>
												</li>
												<li><a href="events.php">Events</a></li>
												<li><a href="gallery.php">Gallery</a></li>
												<li class="current"><a href="#">Success Stories</a>
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
							<h2>Staff Stories</h2>

							<table>
								<tr>
									<td width="30%"><a class="image featured"><img src="images/staff_stories/amanda.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<br>
												<h2>Amanda Yates</h2>
											</header>
												<p>
													Amanda’s passion for sustainability has played an important role in her work. 
													As a spatial designer, Amanda considers how her work can create a positive difference 
													for the planet. As a senior lecturer in spatial design at AUT, Amanda teaches ideas 
													relating to ecology and indigeneity. And, as someone who has won seven design awards 
													and three teaching and research awards, it’s fair to say that Amanda’s environmental
													focused design work has not gone unnoticed. <br>
													As well as incorporating sustainability into her work, Amanda uses her spare time to 
													volunteer for environmental causes. This includes being part of the Sustainability 
													Task Force at AUT. For the past year this group has coordinated AUT’s ‘Sustainability 
													Roadmap’, or, in other words, a guideline for what AUT needs to achieve in terms of 
													sustainability in the next 30 years. 
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/staff_stories/christina.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<br>
												<h2> Dr Christina Vogels</h2>
											</header>
												<p>
													The year was 2000, and Dr Christina Vogels was a Bachelor of Communication Studies 
													student in the final year of her degree. She was given a project: create a communications 
													strategy for an external organisation. The Western Women’s Refuge was one of the students’ 
													potential clients. Members of the refuge staff came to speak to the class, and it was at 
													that moment that Christina knew she would dedicate her life to standing up for women’s 
													rights. <br>
													Christina then went on to complete her master’s degree focusing on researching anti-domestic 
													violence campaigns. While researching her thesis she talked to many key players within refuge, 
													academia, government, non-governmental organisations and more to find out what needed to be 
													done in terms of anti-domestic violence campaigns.
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/staff_stories/josephine.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="profiles">
											<header>
												<br>
												<h2>Josephine Prasad</h2>
											</header>
												<p>
													Josephine Prasad has great passion and love for her students. And as the postgraduate 
													coordinator for the School of Engineering, Computer and Mathematical Sciences – one of 
													the largest postgraduate schools in the university – Josephine has many students she 
													loves to help. <br>
													“My working style is that of an open door policy. The students know that they can come 
													to see me anytime – I am very accessible. This encourages open communication at both ends. 
													This working relationship is formed at the PhD enquiry stage until the moment the student 
													graduates. The open door policy creates the trust and transparency that is needed in the 
													4-6 years that the students spend in the University. They go through many obstacles; studies 
													and personal. Hence, any time they need to talk to me, they know that I will try and help 
													them out.”
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td width="30%"><a class="image featured"><img src="images/staff_stories/monique.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<br>
												<h2>Associate Professor Monique Redmond</h2>
											</header>
												<p>
														<i>“They used to put the tea leaves straight in the jug while it boiled, then pour from jug to 
														mug. I found watching this temporal social connection take place fascinating. It was like 
														taking a pause from the reality of the job.” </i> <br>
														
														Another experience that kindled Monique’s interest in shared tea break spaces was when she 
														worked at an outdoor furniture factory as an art student. She said her co-workers and her 
														had a 10-minute break, which they would work together to utilise to the fullest
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/staff_stories/kosala.png" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<br>
												<h2>Dr Kosala Gunawardane</h2>
											</header>
												<p>
													<i>“I remember in school we had to pick one of three subjects: music, dancing and 
													art. I didn’t want to pick any because I wasn’t good at artistic subjects, but 
													I always loved mathematics.” </i> <br>
													Growing up as a female in Sri Lanka with parents in agriculture made pursuing 
													her passion challenging. <br>
													<i>“I was told that studying mathematics was a difficult thing and not the right 
													career path for a female. But I was determined to stay with it because I have 
													a drive and passion for	maths.”</i>
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td><a class="image featured"><img src="images/staff_stories/sarah.png" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="profiles">
											<header>
												<br>
												<h2>Dr Sarah Marshall</h2>
											</header>
												<p>
													<i>"From a teaching perspective I hope that I can inspire students and show them about 
													the areas of mathematics and statistics that I’m really interested in."</i><br>
													Sarah’s impressive array of qualifications make her well-equipped to solve 
													complex problems. After studying two bachelor’s degrees at Victoria University 
													of Wellington – a Bachelor of Commerce and Administration majoring in Economics 
													and a Bachelor of Science majoring in Psychology and Operations Research – Sarah 
													decided to continue onto her master’s after a short hiatus at a stockbroking 
													firm in Sydney. She then started her PhD in 2007 at the University of Edinburgh, 
													United Kingdom. 
												</p>
												<br>
										</div></td>
								</tr>
								<tr>
									<td width="30%"><a class="image featured"><img src="images/pic01.jpg" alt="" style="width:300px; height:300px; border-radius: 50%"/></a></td>
									<td><div class="inner">
											<header>
												<br>
												<h2>Dr Suzie Gorodi</h2>
											</header>
												<p>
													As the loan central technician for the 4D labs, Suzie is in charge of managing 
													a collection of audio-visual equipment available free of charge to students 
													and staff within the school. <br>
													Suzie became aware of the need to provide alumni support for students who no 
													longer get access to free AV equipment. The Staples Rentals Loan Central Graduate 
													Film Award is an initiative between AUT Loan Central and Staples Rentals NZ. This 
													award was set up in 2017 and is given annually. It grants one graduating student 
													$1,000 worth of credit for renting equipment from Staples Rentals.
												</p>
												<br>
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

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>