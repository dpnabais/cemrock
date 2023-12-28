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
				<img id="logo" src="images/CemrockLogo_800_trans.png">
				<nav id="nav">

					<ul>
						<li><a href="index.php#banner"     class="scrolly"> Home</a></li>
						<li><a href="formwork.php"         class="scrolly"> Formwork</a>
						<!--
						<ul>
							<li><a href="#highrise"   class="scrolly"> Highrise</a></li>
							<li><a href="#commercial"    class="scrolly"> Commercial</a></li>
							<li><a href="#institutional" class="scrolly"> Institutional</a></li>
							<li><a href="#cores"         class="scrolly"> Cores</a></li>
							<li><a href="#architectural" class="scrolly"> Architectural</a></li>
						</ul>
						-->
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

			

			<!-- PROJECT ZOOM RIGHT-->
			<section id="oskridge" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/oakridge/4wpcs9b1.jpeg">

					<header> 
						<h2>Oakridge Towers</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Several floors</li>
						<li>More underground</li>
						<li>Dozens of WCs</li>
					</ul>
				</div>
				<div id="zoompics01" class="zoompics">
					<?php
						$dir01  = opendir("./images/formwork/highrise/oakridge");
						$dirtxt01 = "./images/formwork/highrise/oakridge";
						while (($filename01 = readdir($dir01)) !==false) {
							$files01[] = $filename01;
						}
						$images01 = preg_grep ('/\.jpg$/i', $files01);
						sort($images01);
						for ($i = 0; $i < count($images01); $i++){
							echo "<div style=\"background-image: url('".$dirtxt01."/".$images01[$i]."');\"></div>";
						}
							$dir01 = closedir();
					?>
				</div>
				<a href="#pacific" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="pacific" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/pacific/pacific.jpeg">
					<header>
						<h2>Pacific</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Lean tower</li>
						<li>Great build quality</li>
						<li>Recycled materials only</li>
					</ul>
				</div>
				<div id="zoompics02" class="zoompics2">
					<?php
						$dir02  = opendir("./images/formwork/highrise/pacific");
						$dirtxt02 = "./images/formwork/highrise/pacific";
						while (($filename02 = readdir($dir02)) !==false) {
							$files02[] = $filename02;
						}
						$images02 = preg_grep ('/\.jpg$/i', $files02);
						sort($images02);
						for ($i = 0; $i < count($images02); $i++){
							echo "<div style=\"background-image: url('".$dirtxt02."/".$images02[$i]."');\"></div>";
						}
							$dir02 = closedir();
					?>
				</div>
				<a href="#polaris" class="goto-next scrolly">Next</a>
			</section>
				

			<!-- PROJECT ZOOM RIGHT-->
			<section id="polaris" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/polaris/zoomlogo.jpeg">
					<header> 
						<h2>Polaris</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Tall building</li>
						<li>Not small</li>
						<li>Best in class</li>
					</ul>
				</div>
				<div id="zoompics03" class="zoompics">
					<?php
						$dir03  = opendir("./images/formwork/highrise/polaris");
						$dirtxt03 = "./images/formwork/highrise/polaris";
						while (($filename03 = readdir($dir03)) !==false) {
						$files03[] = $filename03;
						}
						$images03 = preg_grep ('/\.jpg$/i', $files03);
						sort($images03);
						for ($i = 0; $i < count($images03); $i++){
						echo "<div style=\"background-image: url('".$dirtxt03."/".$images03[$i]."');\"></div>";
						}
							$dir03 = closedir();
					?>
				</div>
				<a href="#era" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="era" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/era/zoomlogo.jpeg">
					<header>
						<h2>Era</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Super Cool</li>
						<li>Best in class</li>
						<li>Local favourite</li>
					</ul>
				</div>
				<div id="zoompics04" class="zoompics2">
					<?php
						$dir04  = opendir("./images/formwork/highrise/era");
						$dirtxt04 = "./images/formwork/highrise/era";
						while (($filename04 = readdir($dir04)) !==false) {
							$files04[] = $filename04;
						}
						$images04 = preg_grep ('/\.jpg$/i', $files04);
						sort($images04);
						for ($i = 0; $i < count($images04); $i++){
							echo "<div style=\"background-image: url('".$dirtxt04."/".$images04[$i]."');\"></div>";
						}
							$dir04 = closedir();
					?>
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
				function slideSwitchZoompics01() {
			    	var $active = $('#zoompics01 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics01 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics01 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics02() {
			    	var $active = $('#zoompics02 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics02 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics02 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics03() {
			    	var $active = $('#zoompics03 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics03 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics03 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics04() {
			    	var $active = $('#zoompics04 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics04 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics04 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				$(function() {
					setInterval( "slideSwitchZoompics01()", 1500 );
					setInterval( "slideSwitchZoompics02()", 1500 );
					setInterval( "slideSwitchZoompics03()", 1300 );
					setInterval( "slideSwitchZoompics04()", 1300 );
			  	});
			</script>

	</body>
</html>
