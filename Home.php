<?php
    // First connect to the database via your connection insert file
    require 'New/connection.inc.php'; 
    
    // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    $sqlnew = $dbconn->prepare("Select news_id, header, update, image, blank_1 From newsupdates ORDER BY news_id DESC LIMIT 9") ; 
    // Execute the query, if there were variables, they could be bound within the brackets
    $sqlnew->execute() ;
?>
<!DOCTYPE HTML>
<html lang="en">
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
								<li><a href="Home.php" style="font-weight:bold;">Home</a></li>
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
										<li><a href="Experience.php#testimonials">Testimonials</a></li>
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
							<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif;">On Deck News</h2>
							<p>Stay up to date with everything happening aboard Island Hoppin'.</p>
						</header>
							<?php $i=0;
							while( $row = $sqlnew->fetch()) : 
								$i++; 
								if($i % 3 == 1){echo '<div class="row">';}?>
								<article class="4u 12u(mobile) special">
									<a href="<?php echo $row['image']; ?>" target="_blank" class="image featured"><img src="<?php echo $row['image']; ?>" alt="<?php echo $row['update']; ?>" /></a>
									<header>
										<h3><?php echo $row['header']; ?></h3>
										<h3><i><?php echo $row['blank_1']; ?></i></h3>
									</header>
									<p><?php echo $row['update']; ?></p>
								</article>
							<?php if ($i % 3 == 0) {echo "</div> <hr />";}
							endwhile;
							if ($i % 3 != 0) {echo "</div>";}?>

					</section>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										
										<div class="row">
											<article class="3u 12u(mobile) special">
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
											</article>
											<article class="6u 12u(mobile) special">
											<header>
												<h3>Like what you see?</h3>
											</header>
											<p>Check out some of our social media pages.</p>
											<ul class="icons">
												<li><a href="https://www.facebook.com/IslandHoppinCharters/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.instagram.com/islandhoppincharters/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="mailto:IslandHoppinCharters@gmail.com" target="_blank" class="icon fa-envelope-o"><span class="label">Email Us</span></a></li>
											</ul>
											</article>
											<article class="3u 12u(mobile) special fadeshow1">
												<a href="#" class="image featured" style="margin-top:-30px; width: 15em; margin-left: auto; margin-right: auto;"><img src="images/logo.png" alt="" /></a>
											</article>
										</div>
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