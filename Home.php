<?php
    // First connect to the database via your connection insert file
    require 'New/connection.inc.php'; 
    
    // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    $sqlnew = $dbconn->prepare("Select news_id, header, update, image, blank_1 From newsupdates ORDER BY news_id DESC LIMIT 8") ; 
    // Execute the query, if there were variables, they could be bound within the brackets
    $sqlnew->execute() ;
?>

<html>
	<head>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107335403-1"></script>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" />
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments)};
		  gtag('js', new Date());
		
		  gtag('config', 'UA-107335403-1');
		</script>
		<title>Island Hoppin' Charters</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		<link rel="shortcut icon" href="images/favicon.png" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header">
					
						
					<!-- Inner -->
						<div class="inner">
							<header>
								<h1 id="logo" style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">Island Hoppin'</h1>
								<hr />
								<p style="font-style: italic; font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">The Premier Caribbean Charter Experience</p>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php" style="font-weight:bold;">Home</a></li>
								<li>
									<a href="Boat.html">The Boat</a>
									<ul>
										<li><a href="Boat.html#specifications">Specifications</a></li>
										<li><a href="Boat.html#features">Features</a></li>
										<li><a href="Boat.html#floor">Floor Plan</a></li>
										<li><a href="Boat.html#dive">Dive Features</a></li>
										<li><a href="Boat.html#photos">Photos</a></li>
									</ul>
								</li>
								<li>
									<a href="Crew.html">The Crew</a>
									<ul>
										<li><a href="Crew.html#meet">Meet the Crew</a></li>
										<li><a href="Crew.html#experience" class="scrolly">Experience</a></li>
										<li><a href="Crew.html#qualifications">Qualifications</a></li>
										<li><a href="Crew.html#photos">Photos</a></li>
									</ul>
								</li>
								<li>
									<a href="Experience.php">The Experience</a>
									<ul>
										<li><a href="Experience.php#itinerary">Sample Itinerary</a></li>
										<li><a href="Experience.php#explore">Explore</a></li><!--Recommend activites -->
										<li><a href="Experience.php#menu">Sample Menu</a></li>
										<li><a href="Experience.php#testemonials">Testemonials</a></li>
									</ul>
								</li>
								<li>
									<a href="Book.html">Booking</a>
									<ul>
										<li><a href="Book.html#rates">Rates</a></li>
										<li><a href="Book.html#specials">Specials</a></li>
										<li><a href="Book.html#availability">Availability</a></li>
										<li><a href="Book.html#contact">Contact Us</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					
				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Welcome aboard Island Hoppin'</h2>
						<p>
							Where Luxury and Paradise come together.
						</p>
					</header>
				</section>

			<!-- Carousel -->
			
				<section class="carousel">
					<div class="reel">
					
						
						<article>
							<a href="Boat.html" class="image featured"><img src="images/Boat/lagoon52-cover.jpg" alt="" /></a>
							<header>
								<h3><a href="Boat.html">Lagoon 52 Catamaran</a></h3>
							</header>
							<p>Check out what Island Hoppin' has to offer.</p>
						</article>

						<article>
							<a href="Crew.html#meet" class="image featured"><img src="images/Crew/Jamie&Susannah-tall.jpg" alt="" /></a>
							<header>
								<h3><a href="Crew.html#meet">Meet the Crew</a></h3>
							</header>
							<p>Meet Captain Jamie & Chef Susannah, The Best of the Virgin Islands</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="Experience.html#menu">Whats Cookin...</a></h3>
							</header>
							<p>Check out the fine culinary skills aboard.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="Boat.html#dive">Experience Below</a></h3>
							</header>
							<p>Island Hoppin is equipped with the Scuba and Snorkeling equipment.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#"></a></h3>
							</header>
							<p></p>
						</article>

					</div>
				</section>

			
			<!-- News -->
			
				<div class="wrapper style1">
					<section id="features" class="container special">
						<header>
							<h2>On Deck News</h2>
							<p>Stay up to date with everything that happening aboard Island Hoppin'.</p>
						</header>
						<div class="row">
							<?php while( $row = $sqlnew->fetch()) : ?>
								<article class="6u 12u(mobile) special">
									<a href="<?php echo $row['image']; ?>" class="image featured"><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['update']; ?>" /></a>
									<header>
										<h3><a href="#"><?php echo $row['header']; ?></a></h3>
										<h3><i><?php echo $row['blank_1']; ?></i></h3>
									</header>
									<p><?php echo $row['update']; ?></p>
								</article>
							<?php endwhile ?>
						</div>
					</section>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							
							<!-- Tweets -->
							<!--
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Hendrerit rutrum quisque.
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
							<!--
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
							<!--
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
									</div>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
									</div>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
										</div>
									</div>
								</section>
								-->

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Like what you see?</h3>
										</header>
										<p>Check out some of our social media pages.</p>
										<ul class="icons">
											<li><a href="https://www.facebook.com/IslandHoppinCharters/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/islandhoppincharters/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="mailto:IslandHoppinCharters@gmail.com" class="icon fa-envelope-o"><span class="label">Email Us</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Island Hoppin' 2017. All rights reserved.</li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>