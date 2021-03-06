<!DOCTYPE HTML>
<?php
		session_start();
		require_once('vendor/autoload.php');
	
		\Dotenv\Dotenv::create(__DIR__)->load();
?>

<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Sign In | Women In Technology</title>
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
				<div id="banner-wrapper">
					<div class="container">
						<div id="content">
							<h2>Sign In</h2>
							<p>Not a member of Women in Tech? <a href="signup.php">Click here</a> to sign up.</p>
						</div>
					</div>

					<?php
								$con = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASS'],$_ENV['DB_NAME']);

                                if (!$con) {
                                    echo "Server error";
								}


								if (isset($_POST['login'])) {
									$email = $_POST['email'];
									$password = $_POST['password'];

									$password = md5($password);

									$sql = "SELECT * FROM members WHERE email ='$email' AND password = '$password'";
									$result = mysqli_query($con, $sql);

									if (mysqli_num_rows($result) == 1) {
										$firstName = mysqli_fetch_array($result)['firstName'];
										$_SESSION['message'] = "You are now logged in";
										$_SESSION['email'] = $email;
										$_SESSION['firstName'] = $firstName;
										header("location: index.php");
									} else {
										$_SESSION['message'] = "Email or Password is incorrect";
									}
								}
                            ?>

					<div id="banner" class="box container"><form action="login.php" method="POST">						
						<label for="email">Email:</label>
						<input type="text" id="email" name="email"><br>
						
						<label for="password">Password:</label>
						<input type="password" id="password" name="password"><br>

						<?php 
							if (isset($_SESSION['message'])) {
								echo $_SESSION['message']; 
							}
						
						?>

						<br>
						
						<input style="text-align:center" type="submit" name="login" value="Submit">
					</form>
				</div>
			</div>
		</div>

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