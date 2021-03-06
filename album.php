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
                                                <li class="current"><a href="gallery.php">Gallery</a></li>
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
                  <a href="images/gallery_album/1.jpg" data-size="150x150">
                    <img alt="picture" src="images/gallery_album/1.jpg"
                      class="img-thumbnail pull-right">
                  </a>

                  <a href="images/gallery_album/2.jpg" data-size="150x150">
                    <img alt="picture" src="images/gallery_album/2.jpg"
                      class="img-thumbnail"/>
                  </a>

                  <a href="images/gallery_album/3.jpg" data-size="1600x1067">
                    <img alt="picture" src="images/gallery_album/3.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="images/gallery_album/4.jpg" data-size="1600x1067">
                    <img alt="picture" src="images/gallery_album/4.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/5-5-150x150.jpg" data-size="1600x1067">
                    <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/5-5-150x150.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/6-5-150x150.jpg" data-size="1600x1067">
                    <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/6-5-150x150.jpg"
                      class="img-thumbnail" />
                  </a>

                  <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                    <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg"
                      class="img-thumbnail" />
                  </a>

                </figure>
            <!-- 2nd Row -->
                <figure class="col-lg-12">
  
                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/8-4-150x150.jpg" data-size="1600x1067">
                      <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/9-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>
  
                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/6-5-150x150.jpg" data-size="1600x1067">
                      <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/10-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>
  
                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                      <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/11-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/12-5-150x150.jpg"
                          class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/13-5-150x150.jpg"
                          class="img-thumbnail" />
                    </a>
  
                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/14-5-150x150.jpg"
                          class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/7-4-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/15-5-150x150.jpg"
                          class="img-thumbnail" />
                    </a>
                </figure>
            <!-- 3rd row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/16-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/16-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/17-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/17-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/18-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/18-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/19-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/19-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/20-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/20-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/21-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/21-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/22-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/22-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>
            <!-- 4th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/23-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/23-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/24-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/24-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/25-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/26-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/27-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/27-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/28-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/28-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/29-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/29-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/30-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/30-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>
            <!-- 5th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/31-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/31-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/32-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/32-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/33-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/33-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/34-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/34-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/36-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/35-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/37-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/37-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/38-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/38-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>

            <!-- 6th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/39-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/39-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/40-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/40-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/41-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/41-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/42-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/42-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/43-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/43-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/44-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/44-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/45-5-150x150.jpg" daa-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/45-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>

            <!-- 7th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/46-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/46-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/47-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/47-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/48-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/48-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/49-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/49-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/50-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/50-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/51-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/51-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/52-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/52-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>

            <!-- 8th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/53-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/53-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/53-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/54-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/55-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/55-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/56-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/56-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/57-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/57-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/58-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/58-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/59-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/59-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>
                </figure>

            <!-- 8th Row -->
                <figure class="col-lg-12">

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/60-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/60-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/61-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/61-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/62-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/62-5-150x150.jpg"
                        class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/63-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/63-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/64-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/64-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/65-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/65-5-150x150.jpg"
                            class="img-thumbnail" />
                    </a>

                    <a href="https://www.shesharp.co.nz/wp-content/uploads/2018/07/66-5-150x150.jpg" data-size="1600x1067">
                        <img alt="picture" src="https://www.shesharp.co.nz/wp-content/uploads/2018/07/66-5-150x150.jpg"
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