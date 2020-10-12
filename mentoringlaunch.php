<!-- <!DOCTYPE html> -->
<?php
	session_start();
?>
<html>
    <head>
        <title>Gallery</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="is-preload no-sidebar">
        <!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

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


        <div class="container">
            <div class="col-md-12">
          
              <div id="mdb-lightbox-ui"></div>
          
              <div class="mdb-lightbox no-margin">
            <!-- 1st Row -->
                <figure class="col-lg-12">
                  <a href="" data-size="150x150">
                    <img alt="picture" src="images/events/mentoringProgramme/116105999_338985527110597_4512918244088641934_n.jpg"
                      class="img-thumbnail pull-right">
                  </a>

                  <a href="" data-size="150x150">
                    <img alt="picture" src="images/events/mentoringProgramme/116154423_2657905147794224_1303835210230527065_n.jpg"
                      class="img-thumbnail"/>
                  </a>

                  <a href="" data-size="1600x1067">
                    <img alt="picture" src="images/events/mentoringProgramme/116282163_1219313225096449_8087732124293167684_n.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="" data-size="1600x1067">
                    <img alt="picture" src="images/events/mentoringProgramme/116336966_597701131141848_7299845257968147516_n.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="" data-size="1600x1067">
                    <img alt="picture" src="images/events/mentoringProgramme/117186785_743493666218037_2226611828727251329_n.jpg"
                      class="img-thumbnail" />
                  </a>

                </figure>
            
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
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            
    </body>
</html>