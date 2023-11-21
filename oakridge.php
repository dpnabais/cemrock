<!DOCTYPE HTML>
<html>
	<head>
		<title>Cemrock Concrete &amp; Construction - Formwork</title>
		<meta name="description" content="Cast-in-place concrete construction, formwork, operating in Calgary, Edmonton and Vancouver.">
		<meta name="keywords" content="concrete, formwork, calgary, vancouver, edmonton, construction, project, feature, highrise">
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
							<li><a href="index.php#banner"     class="scrolly"> Home</a></li>
							<li><a href="formwork.php"        class="scrolly" id="formworkexpand"> Formwork</a>
							<ul>
								<li><a href="#highrise"   class="scrolly"> Highrise</a></li>
								<li><a href="#commercial"    class="scrolly"> Commercial</a></li>
								<li><a href="#institutional" class="scrolly"> Institutional</a></li>
								<li><a href="#cores"         class="scrolly"> Cores</a></li>
								<li><a href="#architectural" class="scrolly"> Architectural</a></li>
							</ul>
							</li>
							<li><a href="index.php#three"      class="scrolly" > Flatwork</a></li>
							<!-- <li><a href="index.php#two"        class="scrolly" > Paving</a></li> -->
							<li><a href="safety.html"          class="scrolly"   > Safety</a></li>
							<li><a href="careers.html"         class="scrolly"  > Careers</a></li>
							<li><a href="contact.html"         class="scrolly"  > Contact</a></li>
						</ul>

						<!--
						<ul>
							<li><a href="#highrise"   class="scrolly"> Highrise</a></li>
							<li><a href="#commercial"    class="scrolly"> Commercial</a></li>
							<li><a href="#institutional" class="scrolly"> Institutional</a></li>
							<li><a href="#cores"         class="scrolly"> Cores</a></li>
							<li><a href="#architectural" class="scrolly"> Architectural</a></li>
						</ul>
						-->
					</nav>
				</header>

			
			<!-- PROJECT ZOOM -->


				<section id="projectzoom" class="spotlight style2 right">
					<div id="zoompics">

						<?php
						    $dirRes  = opendir("./images/formwork/highrise/oakridge");
						    $dirtxtRes = "./images/formwork/highrise/oakridge";
						    while (($filenameRes = readdir($dirRes)) !==false) {
						      $filesRes[] = $filenameRes;
						    }
						    $imagesRes = preg_grep ('/\.jpg$/i', $filesRes);
<<<<<<< HEAD
						    #shuffle($imagesRes);
=======
						    //shuffle($imagesRes);
>>>>>>> e1857c692e61f6f2b32860d71c8228d6d620e86a
						    for ($i = 0; $i < count($imagesRes); $i++){
						      echo "<div style=\"background-image: url('".$dirtxtRes."/".$imagesRes[$i]."');\"></div>";
						    }
								$dirRes = closedir();
						?>

						</div>


						<div class="content">
						
						<img id="zoomlogo" src="images/formwork/highrise/oakridge/4wpcs9b1.jpeg">

						<header>
							<h2>Oakridge Towers</h2>
						</header>
						<p class="list-heading">Client | Contractor</p>
						<ul>
							<li>Several floors</li>
							<li>More underground</li>
							<li>Dozens of WCs</li>
						</ul>
										
						<ul class="actions">
							<li><a href="#" class="button" style='display:none;'>Learn More</a></li>
						</ul>
					</div>
					<a href="#commercial" class="goto-next scrolly">Next</a>
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
			var sticky = header.offsetTop;
			//console.log(header.offsetTop);
			function myFunction() {
			    header.classList.add("sticky");
			}
			</script>

			<script>
			  function slideSwitchZoompics() {
			    var $active = $('#zoompics div.main');
			    if ( $active.length == 0 ) $active = $('#zoompics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#zoompics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  }

				$(function() {
					setInterval( "slideSwitchZoompics()", 4100 );
			  });
			</script>

	</body>
</html>
