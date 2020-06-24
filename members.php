<!DOCTYPE HTML>
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
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Women In Tech</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="events.html">Events</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="profiles.html">Profiles</a></li>
									<li class="current"><a href="signup.html">Sign Up</a></li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
                            <h2>Members</h2>

                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Student/Staff ID</th>
                                    <th>Member Type</th>
                                    <th>Newsletter</th>
                                </tr>

                                <?php

                                    $con = mysqli_connect('127.0.0.1','root','');

									if (!$con) {
										echo "Server error";
									}
	
									if (!mysqli_select_db($con,'autwomenintech')) {
										echo "Could not connect to database";
									}

                                    $sql = "SELECT * FROM members";

                                    $records = mysqli_query($con,$sql);

                                    while ($row = mysqli_fetch_array($records)) {                                       
                                        echo "<tr>";
                                        echo "<td>".$row['id']."</td>";
                                        echo "<td>" . $row['firstName'] . "</td>";
                                        echo "<td>" . $row['lastName'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['tertiaryID'] . "</td>";
                                        echo "<td>" . $row['memberType'] . "</td>";
                                        if ($row['newsletter'] == true) {
                                            echo "<td>Yes</td>";
                                        } else {
                                            echo "<td>No</td>";
                                        }
                                        echo "</tr>";
                                    }

                                ?>
                            </table>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<!-- <div class="row">
							<div class="col-3 col-6-medium col-12-small">

								Contact
								<section class="widget contact">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
								</section>

							</div>
						</div> -->
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