<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Mentoring | Women In Technology</title>
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
												<li class="current"><a href="#">Mentoring</a></li>
											</ul>
										</nav>
									</header>
							</div>
						</div>

						<!-- Main -->
				<!-- Features -->
				<div id="main-wrapper">
						<div class="container">
                            <div id="content">
                                <h2>Admin Panel</h2>

                                

									<?php
									
										if (isset($_SESSION['firstName'])) {

											$con = mysqli_connect('localhost','root','','womenintech');

											if (!$con) {
												echo "Server error";
											}

											$fetchProfile = "SELECT * FROM members WHERE email ='$email'";
											$profile = mysqli_query($con,$fetchProfile);

											$admin = mysqli_fetch_array($profile)['isAdmin'];

											if (!$admin) {
												echo "Access Denied";
											} else { ?>
												<h3>Members</h3>
												<table> <?php
												$sql = "SELECT * FROM members";
												$records = mysqli_query($con,$sql); ?>

												<tr>
													<th>ID</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Email</th>
													<th>Student/Staff ID</th>
													<th>Member Type</th>
												</tr>

												<?php while ($row = mysqli_fetch_array($records)) {                                       
													echo "<tr>";
													echo "<td>".$row['id']."</td>";
													echo "<td>" . $row['firstName'] . "</td>";
													echo "<td>" . $row['lastName'] . "</td>";
													echo "<td>" . $row['email'] . "</td>";
													echo "<td>" . $row['tertiaryId'] . "</td>";
													echo "<td>" . $row['memberType'] . "</td>";
													echo "</tr>";
												}
										?>
										</table>
										<br>

										<h3>Mentors</h3>
												<table> <?php
												$sql = "SELECT mentors.id as 'mentor_id', members.firstName, members.lastName, members.email FROM members join mentors where mentors.member_id = members.id";
												$records = mysqli_query($con,$sql); ?>

												<tr>
													<th>ID</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Email</th>
												</tr>

												<?php while ($row = mysqli_fetch_array($records)) {                                       
													echo "<tr>";
													echo "<td>".$row['mentor_id']."</td>";
													echo "<td>" . $row['firstName'] . "</td>";
													echo "<td>" . $row['lastName'] . "</td>";
													echo "<td>" . $row['email'] . "</td>";
													echo "</tr>";
												}
										
										?>
										</table>
										<br>

										<h3>Mentees</h3>
												<table> <?php
												$sql = "SELECT mentees.id as 'mentee_id', members.firstName, members.lastName, members.email FROM members join mentees where mentees.member_id = members.id";
												$records = mysqli_query($con,$sql); ?>

												<tr>
													<th>ID</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Email</th>
												</tr>

												<?php while ($row = mysqli_fetch_array($records)) {                                       
													echo "<tr>";
													echo "<td>".$row['mentee_id']."</td>";
													echo "<td>" . $row['firstName'] . "</td>";
													echo "<td>" . $row['lastName'] . "</td>";
													echo "<td>" . $row['email'] . "</td>";
													echo "</tr>";
												}
										?>
										</table>
										<br>

										<h3>Events</h3>
												<table> <?php
												$sql = "SELECT * FROM events";
												$records = mysqli_query($con,$sql); ?>

												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Time</th>
													<th>Location</th>
													<th>Capacity</th>
												</tr>

												<?php while ($row = mysqli_fetch_array($records)) {                                       
													echo "<tr>";
													echo "<td>".$row['id']."</td>";
													echo "<td>" . $row['name'] . "</td>";
													echo "<td>".$row['time']."</td>";
													echo "<td>" . $row['location'] . "</td>";
													echo "<td>".$row['capacity']."</td>";
													echo "</tr>";
												}
											}
									}
                                    ?>
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