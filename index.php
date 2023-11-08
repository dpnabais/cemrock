<!DOCTYPE HTML>
<html>
	<head>
		<title>Cemrock Concrete &amp; Construction</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<img id="logo" src="images/logo_cr_t2.png">
					<nav id="nav">
						<ul>
				      <!-- <li><a href="#banner"     class="scrolly"> Home</a></li> -->
				      <li><a href="#one"        class="scrolly" > Formwork</a></li>
				      <li><a href="#three"      class="scrolly" > Flatwork</a></li>
				      <!-- <li><a href="#two"      class="scrolly" > Paving</a></li> -->
				      <li><a href="safety.html"  class="scrolly"   > Safety</a></li>
				      <li><a href="careers.html" class="scrolly"  > Careers</a></li>
				      <li><a href="contact.html" class="scrolly"  > Contact</a></li>
    				</ul>
					</nav>
				</header>

			<!-- Banner -->

				<section id="banner">
					<div class="content">

					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>



			<!-- Formwork -->
				<section id="one" class="spotlight style2 right">
					<div id="formworkpics">

						<!-- build the divs in random order -->
						<?php

						    #open the working directory into $dir
						    $dirForm  = opendir("./images/front/form");
						    $dirFormtxt = "./images/front/form";

						    #store ALL the files in $files[]
						    while (($filename = readdir($dirForm)) !==false) {
						      $files[] = $filename;
						    }
						    #take only .jpg into $images[]
						    $images=preg_grep ('/\.jpg$/i', $files);
						    #randomize!
						    sort($images);
						    #spit out all the <div>s
						    for ($i = 0; $i < count($images); $i++){
						      echo "<div style=\"background-image: url('".$dirFormtxt."/".$images[$i]."');\"></div>";
						    }
								$dirForm = closedir();
						?>
						</div>


						<div class="content">
						<header>
							<h2>Formwork</h2>
						</header>
						<p>Cemrock is pleased to offer a variety of services to best suit your project requirements. Our packages vary from doing the formwork to providing the full concrete package. Below are some of the items we offer:</p>
						<ul>
							<li>Supply and install formwork</li>
							<li>Place & Finish all suspended slabs and slab on grade</li>
							<li>Place & Finish of cast-in-place or steel pan risers</li>
							<li>Place & Finish all topping slabs</li>
							<li>Shotcrete</li>
							<li>Sackrub Finishing </li>
						</ul>
						<ul class="actions">
							<li><a href="formwork.php" class="button">More...</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>





			<!-- Flatwork -->
				<section id="three" class="spotlight style3 left">

					<div id="flatworkpics">

						<!-- build the divs in random order -->
						<?php

								#open the working directory into $dir
								$dirFlat  = opendir("./images/front/flat");
								$dirFlattxt = "./images/front/flat";

								#store ALL the files in $files[]
								while (($filename = readdir($dirFlat)) !==false) {
									$filesF[] = $filename;
								}
								#take only .jpg into $images[]
								$images=preg_grep ('/\.jpg$/i', $filesF);
								#randomize!
								shuffle($images);
								#spit out all the <div>s
								for ($i = 0; $i < count($images); $i++){
									echo "<div style=\"background-image: url('".$dirFlattxt."/".$images[$i]."');\"></div>";
								}
								$dirFlat = closedir();
						?>
						</div>



					<div class="content">
						<header>
							<h2>Flatwork</h2>
						</header>


						<p>We are pleased to offer a variety of specialized concrete flatwork needs.
						</p>
						<p>We are one of the few to hold City Identification agreement which allows us to work on the City right of way.
						</p>

						<p>Our work includes:</p>
						<ul>
							<li>City Sidewalks and Driveways</li>
							<li>Parking lot repairs</li>
							<li>Stamped concrete</li>
							<li>Stairs</li>
							<li>Planter walls</li>
							<li>Curb walls</li>
							<li>Curb and Gutter</li>
							<li>Monolithic Sidewalks</li>
							<li>Entrance Aprons</li>
							<li>Medians</li>
						</ul>

						<ul class="actions">
							<li><a href="#" class="button" style='display:none;'>Learn More</a></li>
						</ul>
					</div>
					<a href="#five" class="goto-next scrolly">Next</a>
				</section>


			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>About Us</h2>
							<p>We look forward to working with you.</p>
						</header>

						<p><strong>Cemrock Concrete &amp; Construction Ltd.</strong> has been
							involved in the cast-in-place concrete construction business since our
							inception in 2003.</p>
						<p>During this time we have had the pleasure of developing successful
							relationships with Alberta's construction leaders. We conduct our
							business in a professional manner and have developed a reputation for
							providing exceptional concrete work.</p>
						<p>We continue to build on our reputation through our:<br>
						<ul>
							<li style="list-style:none;">COR certified safety program (Alberta Construction Safety Association)</li>
							<li style="list-style:none;">Experienced and Knowledgeable Field Personnel</li>
							<li style="list-style:none;">Quick Response Estimating (Budgets, Bidding, Revisions)</li>
							<li style="list-style:none;">Thorough Planning/Organization (Schedules, Submissions)</li>
						</ul>
						<br>
						<br>


					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<!--
					<ul class="icons">
						<li><a href="https://twitter.com/cemrockcc" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/Cemrock-Concrete-Construction-244353132603513/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.linkedin.com/company/cemrock-concrete-&-construction/" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
					</ul>
				-->
					<ul class="copyright">
						<li>&copy; Cemrock. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>



			<script>
			window.onscroll = function() {myFunction()};

			var header = document.getElementById("header");
			var sticky = 0; //header.offsetTop;
			//console.log(header.offsetTop);

			function myFunction() {
			  if (window.pageYOffset >= sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
			</script>

			<script>
			  function slideSwitchForm() {
			    var $active = $('#formworkpics div.main');
			    if ( $active.length == 0 ) $active = $('#formworkpics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#formworkpics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  }

				function slideSwitchFlat() {
			    var $active = $('#flatworkpics div.main');
			    if ( $active.length == 0 ) $active = $('#flatworkpics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#flatworkpics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  }

			  $(function() {
			    setInterval( "slideSwitchForm()", 4100 );
					setInterval( "slideSwitchFlat()", 3900 );
			  });
			</script>

	</body>
</html>
