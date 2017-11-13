<?php     
	require 'New/connection.inc.php'; 
      // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
	$sqltut = $dbconn->prepare("Select news_id, header, update, image, blank_1 From customertut ORDER BY news_id DESC") ; 
      // Execute the query, if there were variables, they could be bound within the brackets
    $sqltut->execute() ;
?>
<!DOCTYPE HTML>
<!--
	Helios by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html lang="en">
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
										<li><a href="#explore">Points of Interest</a></li>
										<li><a href="#menu">Sample Menu</a></li>
										<li><a href="#testimonials">Testimonials</a></li>
									</ul>
								</li>
								<li>
									<a href="Book.php">Booking</a>
									<ul>
										<li><a href="Book.php#rates">Rates</a></li>
										<li><a href="Book.php#specials">Specials</a></li>
										<li><a href="Book.php#availability">Availability</a></li>
										<li><a href="Book.php#contact">Contact Us</a></li>
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
										<h2  style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif"><a href="#">Sample Itinerary</a></h2>
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
										<h3 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Points of Interest</h3>
									</header>
									<p>
										The Caribbean has so much to offer that we can't show you everything here... BUT no one said we 
										wouldn't show you some of our favorite places.
									</p>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/The_Baths" target="_blank" class="image fit"><img src="images/Experience/The-Baths.png" alt="The Baths" /></a>
										</div>
										<div class="8u">
											<h4>The Baths</h4>
											<p>
												Located on Virgin Gorda, B.V.I.; The Baths satistfy the inner explorer in all of us. 
												The Baths was formed by granite that eroded into piles of boulders on the beach.
												The boulders form natural tidal pools, tunnels, arches, and scenic grottoes that are open to the sea.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Tortola" target="_blank" class="image fit"><img src="images/Experience/cane-garden-bay.jpg" alt="Cane Garden Bay" /></a>
										</div>
										<div class="8u">
											<h4>Cane Garden Bay</h4>
											<p>
												Located on the main island of Tortola, B.V.I.; this beach is known for the views, food, and night life.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Anegada" target="_blank" class="image fit"><img src="images/Experience/anegada-flamingo.jpg" alt="Anegada Island" /></a>
										</div>
										<div class="8u">
											<h4>Anegada Island</h4>
											<p>
												Located <del>15 miles</del> 24 KM from Virgin Gorda, B.V.I.; the island is home to 285 villagers and is known for miles of white sand beaches 
												and the largest barrier coral reef in the Caribbean, and the fourth largest on earth. 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="http://www.soggydollar.com/" target="_blank" class="image fit"><img src="images/Experience/Soggy-Dollar-Bar.jpg" alt="Soggy Dollar Bar" /></a>
										</div>
										<div class="8u">
											<h4>The Soggy Dollar Bar</h4>
											<p>
												Located on Jost Van Dyke, B.V.I (White Bay); The Soggy Dollar Bars offers a unique experience of 
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://travel.usnews.com/British_Virgin_Islands/Things_To_Do/Smugglers_Cove_Tortola_61148/" target="_blank" class="image fit"><img src="images/Experience/Smugglers-cove.jpg" alt="Smuggler's Cove" /></a>
										</div>
										<div class="8u">
											<h4>Smuggler's Cove</h4>
											<p>
												Enjoyed the shady palm trees and calm blue water located on Tortola, B.V.I..
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="http://divebvi.com/rms-rhone/" target="_blank" class="image fit"><img src="images/Experience/RMS-Rhone.jpg" alt="Wreck of the RMS Rhone" /></a>
										</div>
										<div class="8u">
											<h4>The Wreck of the RMS Rhone</h4>
											<p>
												Amet nullam fringilla nibh nulla convallis tique ante proin.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="https://en.wikipedia.org/wiki/Cooper_Island_(British_Virgin_Islands)" target="_blank" class="image fit"><img src="images/Experience/cooper-island.jpg" alt="Cooper Island" /></a>
										</div>
										<div class="8u">
											<h4>Cooper Island</h4>
											<p>
												A small island of the British Virgin Islands, offers amenities such a restaurant, rum bar, coffee shop, solar powered brewery, and gift shop.
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" target="_blank"class="image fit"><img src="images/Experience/" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Example place</h4>
											<p>
												Another place
											</p>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" target="_blank" class="image fit"><img src="images/Experience/" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Example place</h4>
											<p>
												Another place
											</p>
										</div>
									</div>
									
								</section>
							</div>
						</div>
						<hr id="menu"/>
						<header style="text-align:center;">
							<h2  style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sample Menu</h2>
						</header>
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="images/Experience/Break.jpg" alt="" /></a>
								<header>
									<h3 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Breakfast</h3>
								</header>
								<ul>
									<li>&mdash; Homemade buttermilk pancake stack served with bacon, dusted with icing sugar and a fresh berry sauce </li>
									<li>&mdash; Traditional Italian sausage frittata</li>
									<li>&mdash; Classic eggs benedict with black forest ham, homemade hollandaise sauce and wilted spinach</li>
									<li>&mdash; Full Irish: Authentic potato bread served with bacon, sausages, fried eggs and oven roasted vine tomatoes</li>
									<li>&mdash; Caribbean French toast served with fried bananas, toasted coconut and drizzled with local Virgin Islands honey</li>
									<li>&mdash; Smoked salmon, cream cheese and dill bagels</li>
									<li>&mdash; Individual egg soufflés with feta cheese, spinach, tomatoes and oregano</li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a class="image featured"><img src="images/Experience/Lunch.jpg" alt="" /></a>
								<header>
									<h3 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Lunch</h3>
								</header>
								<ul>
									<li>&mdash; Moules marinere with freshly baked granary bread</li>
									<li>&mdash; Citrus glazed salmon on a bed of seasonal greens</li>
									<li>&mdash; Chicken pad thai tossed with beansprouts, fresh cilantro and roasted peanuts </li>
									<li>&mdash; Seared scallops and crispy prosciutto with roasted tomatoes and smashed white beans </li>
									<li>&mdash; Grilled swordfish, green beans and spicy tomato salsa</li>
									<li>&mdash; Sweet okra shrimp curry with plantain puree</li>
									<li>&mdash; Caribbean jerk burgers with pineapple relish and spicy coleslaw</li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a href="" class="image featured"><img src="images/Experience/Lunch.jpg" alt="" /></a>
								<header>
									<h3>Dinner</h3>
								</header>
								<ul>
									<li>&mdash; Pork escalope Holstein with fried duck egg, buckwheat tomato salad, anchovies topped with parsley and capper beurre noisette</li>
									<li>&mdash; Braised lamb breast, boulangere potatoes, green beans and griddled courgettes</li>
									<li>&mdash; Honey glazed ham knuckle with buttered new potatoes, parsley sauce, sautéed cabbage and sweet piccalli</li>
									<li>&mdash; Confit duck ravioli with sage and hazelnut butter</li>
									<li>&mdash; Marsala pork tenderloin with roasted asparagus and sweet potato puree</li>
									<li>&mdash; Beef tenderloin with café paris butter, homemade fries, roasted tomatoes and portobella mushroom </li>
									<li>&mdash; Mahi mahi fillet with saffron risotto and a mango cilantro sauce</li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a href="" class="image featured"><img src="images/Experience/Appetizer.jpg" alt="" /></a>
								<header>
									<h3>Appetizers</h3>
								</header>
								<ul>
									<li>&mdash; Tomato and burrata bruschetta</li>
									<li>&mdash; Oven baked brie with sautéed cinnamon walnuts</li>
									<li>&mdash; Asian infused tuna on toasted bread</li>
									<li>&mdash; Charcuterie platter with an assortment of international cheeses, crackers and olives </li>
									<li>&mdash; Conch fritters with a chilli lime dipping sauce</li>
									<li>&mdash; Tuna salad puff pastry bites</li>
									<li>&mdash; Homemade falafel with cucumber yoghurt sauce</li>
								</ul>
							</article>
							</div>
							<hr />
							<div class="row">
							<article class="6u 12u(mobile) special">
								<a href="" class="image featured"><img src="images/Experience/Dessert.jpg" alt="" /></a>
								<header>
									<h3>Desserts</h3>
								</header>
								<ul>
									<li>&mdash; Ginger crème brulee</li>
									<li>&mdash; Panna cotta with orange baked and glazed figs served along side tuille biscuits </li>
									<li>&mdash; Chocolate fondant pudding with raspberry and champagne sorbet</li>
									<li>&mdash; Irish cream Tiramisu</li>
									<li>&mdash; Homemade profiteroles filled with crème diplomat and coated in dark chocolate sauce </li>
									<li>&mdash; Fluffy lemon pudding with limoncello cream</li>
									<li>&mdash; Bananas foster beignets with café brulot crème anglaise</li>
								</ul>
							</article>
							<article class="6u 12u(mobile) special">
								<a href="" class="image featured"><img src="images/Experience/Drinks.jpg" alt="" /></a>
								<header>
									<h3>Drinks</h3>
								</header>
								<ul>
									<li>&mdash; Passengers Recieve an Island Hoppin' Water Bottle for Filter Water</li>
									<li>&mdash; Painkillers (An Island Specialty)</li>
									<li>&mdash; An assortment of Beer</li>
									<li>&mdash; Select Wine</li>
									<li>&mdash; An assortment of Liquor (Rum is Popular)</li>
									<li>&mdash; Soda</li>
									<li>&mdash; Juice available on request</li>
									<li>&mdash; Requested Beverages (based on island availabity)</li>
								</ul>
							</article>
							</div>
							<hr />
							<div id="testimonials">
								<!-- Motion Photos -->
								<header style="text-align:center;">
									<h2 style="font-family:'Shadows Into Light', 'Source Sans Pro', sans-serif">Sailor Testimonials</h2>
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