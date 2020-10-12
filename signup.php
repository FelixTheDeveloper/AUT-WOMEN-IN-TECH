<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Sign Up | Women In Technology</title>
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
                            <h2>Sign Up</h2>
                             
                            <?php
								$con = mysqli_connect('localhost','root','','womenintech');

                                if (!$con) {
                                    echo "Server error";
								}


								if (isset($_POST['register'])) {
									$firstName = $_POST['firstName'];
									$lastName = $_POST['lastName'];
									$email = $_POST['email'];
									$tertiaryId = $_POST['tertiaryId'];
									if(!isset($_POST['memberType'])){
										$memberType = '';
									} else if ($_POST['memberType'] == 'student') {
										$memberType = 'Student';
									} elseif ($_POST['memberType'] == 'staff') {
										$memberType = 'Staff';
									} elseif ($_POST['memberType'] == 'alumni') {
										$memberType = 'Alumni';
									}
									$password = $_POST['password'];
									$password1 = $_POST['password1'];

									if ($password == $password1) {
										$password = md5($password);

										$sql = "INSERT INTO members (
											firstName, 
											lastName, 
											email,
											password, 
											tertiaryId, 
											memberType
										) VALUES (
											'$firstName', 
											'$lastName',
											'$email',
											'$password',
											'$tertiaryId',
											'$memberType'
										)";

										if(!mysqli_query($con, $sql)) {
											echo "Could not insert, please try again.";
											echo $sql;
										} else {
											echo "<p><b>Thanks, " . $firstName . " for signing up, we will be in touch soon!</b></p>";
											$_SESSION['message'] = "You are now logged in";
											$_SESSION['email'] = $email;
											$_SESSION['firstName'] = $firstName;
											header("location: index.php");
										}

									} else {
										#passwords do not match
										$_SESSION['message'] = 'The passwords do not match';
									}
								}
                            ?>

								<form action="signup.php" method="POST">
								<label for="firstName">First Name:</label>
								<input type="text" id="firstName" name="firstName"><br>
								
								<label for="lastName">Last Name:</label>
								<input type="text" id="lastName" name="lastName"><br>
								
								<label for="email">Email:</label>
									<input type="text" id="email" name="email"><br>
									
									<label for="tertiaryId">Student/Staff ID:</label>
									<input type="text" id="tertiaryId" name="tertiaryId"><br>	
									
									<label for="memberType">Membership Type: (Please select)</label>

									<select type="text" id="memberType" name="memberType">
										<option value="student">Student</option>
										<option value="staff">Staff</option>
										<option value="alumni">Alumni</option>
									</select><br>
											
									<label for="password">Password:</label>
									<input type="password" id="password" name="password"><br>
									
									<label for="password1">Repeat Password:</label>
									<input type="password" id="password1" name="password1"><br>

									<?php 
										if (isset($_SESSION['message'])) {
											echo $_SESSION['message']; 
										}
									
									?>
									<br>

									<input style="text-align:center" type="submit" name='register' value="Submit">
							</form>
						</div>
					</div>
                </div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								Contact
								<section class="widget contact">
										<h3 style="color:#e9f2f7;">Contact Us</h3>
										<ul>
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