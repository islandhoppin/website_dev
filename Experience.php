<?php
    // First connect to the database via your connection insert file
    require 'New/connection.inc.php'; 
    
    // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    $sqltut = $dbconn->prepare("Select news_id, header, update, image, blank_1 From customertut") ; 
    // Execute the query, if there were variables, they could be bound within the brackets
    $sqltut->execute() ;
?>
<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107335403-1"></script>
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
		<script src="assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="src/js/jquery.swipebox.js"></script>
		<link rel="stylesheet" href="src/css/swipebox.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			;( function( $ ) {
			
				$( '.swipebox' ).swipebox();
			
			} )( jQuery );
		</script>
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1 id="logo" style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif; ">Island Hoppin'</h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="Home.php">Home</a></li>
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
										<li><a href="Crew.html#experience">Experience</a></li>
										<li><a href="Crew.html#qualifications">Qualifications</a></li>
										<li><a href="Crew.html#photos">Photos</a></li>
									</ul>
								</li>
								<li>
									<a href="Experience.php" style="font-weight:bold;">The Experience</a>
									<ul>
										<li><a href="#itinerary">Sample Itinerary</a></li>
										<li><a href="#explore">Explore</a></li>
										<li><a href="#menu">Sample Menu</a></li>
										<li><a href="#testemonials">Testemonials</a></li>
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

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%" id="itinerary">
							<div class="8u 12u(mobile)" id="content">
								<article id="main">
									<header>
										<h2><a href="#">Sample Itinerary</a></h2>
										<p>
											The world is your playground, enjoy it aboard Island Hoppin'!
										</p>
									</header>
									<img class="image featured" src="images/Experience/map.png" alt="" />
									<p>
										This is your special trip, and you should be able to pick where you want to go. So our crew will work with you to 
										design your itinerary to fit all the wonderful places to see
									</p>
									<section>
										<header>
											<h3>Welcome Aboard (Sleep Aboard)</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. 
										</p>
										<p>
											Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
											orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
											ut penatibus fermentum nibh erat malesuada varius.
										</p>
									</section>
									<section>
										<header>
											<h3>Day 1</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 2</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 3</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 4</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 5</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 6</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
										</p>
									</section>
									<section>
										<header>
											<h3>Day 7</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. 
									</section>
								</article>
							</div>
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section id="explore">
									<header>
										<h3>Explore the Carribean</h3>
									</header>
									<p>
										Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
										porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
										magna tempus feugiat veroeros.
									</p>
									<footer>
										<a href="#" class="button">Learn More</a>
									</footer>
								</section>
								<hr />
								<section>
									<header>
										<h3><a href="#">Sed lorem etiam consequat</a></h3>
									</header>
									<p>
										Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
									</p>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Nibh sed cubilia</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Proin sed adipiscing</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Lorem feugiat magna</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Sed tempus fringilla</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Malesuada fermentum</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<footer>
										<a href="#" class="button">Magna Adipiscing</a>
									</footer>
								</section>
							</div>
						</div>
						<hr id="menu"/>
						<header style="text-align:center;">
							<h2>Sample Menu</h2>
						</header>
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Breakfast</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Lunch</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Dinner</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
						<hr />
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Appetizers</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Desserts</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Drinks</a></h3>
								</header>
								<p>
									Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
							</article>
						</div>
						<hr />
						<div id="testemonials">
							<!-- Motion Photos -->
							<header style="text-align:center;">
								<h2>Sailor Testemonials</h2>
							</header>
							<section  class="carousel">
								<div class="reel">
								<?php while( $row1 = $sqltut->fetch()) : ?>
									<article>
										<a href="<?php echo $row1['image']; ?>" class="swipebox" title="<?php echo $row1['header']; ?> - Date: <?php echo $row1['blank_1']; ?>">
											<img class="image featured" style="width:290px; height:auto; margin-top:30px" src="<?php echo $row1['image']; ?>" alt="<?php echo $row1['update']; ?>">
										</a>
									</article>
								<?php endwhile ?>
							</section>
						</div>
					</div>
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
												<li><a href="https://www.facebook.com/IslandHoppinCharters/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://www.instagram.com/islandhoppincharters/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="mailto:IslandHoppinCharters@gmail.com" class="icon fa-envelope-o"><span class="label">Email Us</span></a></li>
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