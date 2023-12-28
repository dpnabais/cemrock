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
					<a href="#annex" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM RIGHT-->
			<section id="annex" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/annex/zoomlogo.jpeg">

					<header> 
						<h2>Annex</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Awesome building</li>
						<li>Plenty of space</li>
						<li>Two WCs</li>
					</ul>
				</div>
				<div id="zoompics05" class="zoompics">
					<?php
						$dir05  = opendir("./images/formwork/highrise/annex");
						$dirtxt05 = "./images/formwork/highrise/annex";
						while (($filename05 = readdir($dir05)) !==false) {
							$files05[] = $filename05;
						}
						$images05 = preg_grep ('/\.jpg$/i', $files05);
						sort($images05);
						for ($i = 0; $i < count($images05); $i++){
							echo "<div style=\"background-image: url('".$dirtxt05."/".$images05[$i]."');\"></div>";
						}
							$dir05 = closedir();
					?>
				</div>
				<a href="#jemm" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="jemm" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/jemm/zoomlogo.jpeg">
					<header>
						<h2>Jemm</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Plentiful parking</li>
						<li>Dual kitchen</li>
						<li>Two beds per visitor</li>
					</ul>
				</div>
				<div id="zoompics06" class="zoompics2">
					<?php
						$dir06  = opendir("./images/formwork/highrise/jemm");
						$dirtxt06 = "./images/formwork/highrise/jemm";
						while (($filename06 = readdir($dir06)) !==false) {
							$files06[] = $filename06;
						}
						$images06 = preg_grep ('/\.jpg$/i', $files06);
						sort($images06);
						for ($i = 0; $i < count($images06); $i++){
							echo "<div style=\"background-image: url('".$dirtxt06."/".$images06[$i]."');\"></div>";
						}
							$dir06 = closedir();
					?>
				</div>
				<a href="#smith" class="goto-next scrolly">Next</a>
			</section>
				

			<!-- PROJECT ZOOM RIGHT-->
			<section id="smith" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/smith/zoomlogo.jpeg">
					<header> 
						<h2>Smith</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Short for Mr. Smith</li>
						<li>Great views from basement</li>
						<li>Helipad in loby</li>
					</ul>
				</div>
				<div id="zoompics07" class="zoompics">
					<?php
						$dir07  = opendir("./images/formwork/highrise/smith");
						$dirtxt07 = "./images/formwork/highrise/smith";
						while (($filename07 = readdir($dir07)) !==false) {
						$files07[] = $filename07;
						}
						$images07 = preg_grep ('/\.jpg$/i', $files07);
						sort($images07);
						for ($i = 0; $i < count($images07); $i++){
						echo "<div style=\"background-image: url('".$dirtxt07."/".$images07[$i]."');\"></div>";
						}
							$dir07 = closedir();
					?>
				</div>
				<a href="#6and10" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="6and10" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/6and10/zoomlogo.jpeg">
					<header>
						<h2>6th & 10th</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>not 5th and 9th</li>
						<li>Chilled pool</li>
						<li>Impressive baseboards</li>
					</ul>
				</div>
				<div id="zoompics08" class="zoompics2">
					<?php
						$dir08  = opendir("./images/formwork/highrise/6and10");
						$dirtxt08 = "./images/formwork/highrise/6and10";
						while (($filename08 = readdir($dir08)) !==false) {
							$files08[] = $filename08;
						}
						$images08 = preg_grep ('/\.jpg$/i', $files08);
						sort($images08);
						for ($i = 0; $i < count($images08); $i++){
							echo "<div style=\"background-image: url('".$dirtxt08."/".$images08[$i]."');\"></div>";
						}
							$dir08 = closedir();
					?>
				</div>
					<a href="#cx" class="goto-next scrolly">Next</a>
			</section>













			<!-- PROJECT ZOOM RIGHT-->
			<section id="cx" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/cx/zoomlogo.jpeg">

					<header> 
						<h2>CX</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Top one</li>
						<li>Small name</li>
						<li>Big inside</li>
					</ul>
				</div>
				<div id="zoompics09" class="zoompics">
					<?php
						$dir09  = opendir("./images/formwork/highrise/cx");
						$dirtxt09 = "./images/formwork/highrise/cx";
						while (($filename09 = readdir($dir09)) !==false) {
							$files09[] = $filename09;
						}
						$images09 = preg_grep ('/\.jpg$/i', $files09);
						sort($images09);
						for ($i = 0; $i < count($images09); $i++){
							echo "<div style=\"background-image: url('".$dirtxt09."/".$images09[$i]."');\"></div>";
						}
							$dir09 = closedir();
					?>
				</div>
				<a href="#hendrix" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="hendrix" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/hendrix/zoomlogo.jpeg">
					<header>
						<h2>Hendrix</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Undeground pool</li>
						<li>Room service</li>
						<li>(not included)</li>
					</ul>
				</div>
				<div id="zoompics10" class="zoompics2">
					<?php
						$dir10  = opendir("./images/formwork/highrise/hendrix");
						$dirtxt10 = "./images/formwork/highrise/hendrix";
						while (($filename10 = readdir($dir10)) !==false) {
							$files10[] = $filename10;
						}
						$images10 = preg_grep ('/\.jpg$/i', $files10);
						sort($images10);
						for ($i = 0; $i < count($images10); $i++){
							echo "<div style=\"background-image: url('".$dirtxt10."/".$images10[$i]."');\"></div>";
						}
							$dir10 = closedir();
					?>
				</div>
				<a href="#mclaren" class="goto-next scrolly">Next</a>
			</section>
				

			<!-- PROJECT ZOOM RIGHT-->
			<section id="mclaren" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/mclaren/zoomlogo.jpeg">
					<header> 
						<h2>McLaren</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Not the car</li>
						<li>Just a building</li>
						<li>Free WiFi</li>
					</ul>
				</div>
				<div id="zoompics11" class="zoompics">
					<?php
						$dir11  = opendir("./images/formwork/highrise/mclaren");
						$dirtxt11 = "./images/formwork/highrise/mclaren";
						while (($filename11 = readdir($dir11)) !==false) {
						$files11[] = $filename11;
						}
						$images11 = preg_grep ('/\.jpg$/i', $files11);
						sort($images11);
						for ($i = 0; $i < count($images11); $i++){
						echo "<div style=\"background-image: url('".$dirtxt11."/".$images11[$i]."');\"></div>";
						}
							$dir11 = closedir();
					?>
				</div>
				<a href="#centurion" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM LEFT-->
			<section id="centurion" class="spotlight style3 left">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/centurion/zoomlogo.jpeg">
					<header>
						<h2>Centurion</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Roman style</li>
						<li>Chariots available</li>
						<li>No animals allowed</li>
					</ul>
				</div>
				<div id="zoompics12" class="zoompics2">
					<?php
						$dir12  = opendir("./images/formwork/highrise/centurion");
						$dirtxt12 = "./images/formwork/highrise/centurion";
						while (($filename12 = readdir($dir12)) !==false) {
							$files12[] = $filename12;
						}
						$images12 = preg_grep ('/\.jpg$/i', $files12);
						sort($images12);
						for ($i = 0; $i < count($images12); $i++){
							echo "<div style=\"background-image: url('".$dirtxt12."/".$images12[$i]."');\"></div>";
						}
							$dir12 = closedir();
					?>
				</div>
					<a href="#symphony" class="goto-next scrolly">Next</a>
			</section>


			<!-- PROJECT ZOOM RIGHT-->
			<section id="symphony" class="spotlight style2 right">
				<div class="content">
					<img id="zoomlogo" src="./images/formwork/highrise/symphony/zoomlogo.jpeg">
					<header> 
						<h2>Symphony</h2>
					</header>
					<p class="list-heading">Client | Contractor</p>
					<ul>
						<li>Last one</li>
						<li>But not least</li>
						<li>Free Bluetooth</li>
					</ul>
				</div>
				<div id="zoompics13" class="zoompics">
					<?php
						$dir13  = opendir("./images/formwork/highrise/symphony");
						$dirtxt13 = "./images/formwork/highrise/symphony";
						while (($filename13 = readdir($dir13)) !==false) {
						$files13[] = $filename13;
						}
						$images13 = preg_grep ('/\.jpg$/i', $files13);
						sort($images13);
						for ($i = 0; $i < count($images13); $i++){
						echo "<div style=\"background-image: url('".$dirtxt13."/".$images13[$i]."');\"></div>";
						}
							$dir13 = closedir();
					?>
				</div>
				<a href="#centurion" class="goto-next scrolly">Next</a>
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
				function slideSwitchZoompics05() {
			    	var $active = $('#zoompics05 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics05 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics05 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics06() {
			    	var $active = $('#zoompics06 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics06 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics06 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics07() {
			    	var $active = $('#zoompics07 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics07 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics07 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics08() {
			    	var $active = $('#zoompics08 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics08 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics08 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics09() {
			    	var $active = $('#zoompics09 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics09 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics09 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics10() {
			    	var $active = $('#zoompics10 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics10 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics10 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics11() {
			    	var $active = $('#zoompics11 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics11 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics11 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics12() {
			    	var $active = $('#zoompics12 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics12 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics12 div:first');
			    	$active.addClass('last-main');
			    	$next.css({opacity: 0.0})
			      		.addClass('main')
			      		.animate({opacity: 1.0}, 750, function() {
			        		$active.removeClass('main last-main');
			      		});
			  	}
				function slideSwitchZoompics13() {
			    	var $active = $('#zoompics13 div.main');
			    	if ( $active.length == 0 ) 
						$active = $('#zoompics13 div:last');
			    	var $next =  $active.next().length ? $active.next()
			      		: $('#zoompics13 div:first');
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
					setInterval( "slideSwitchZoompics05()", 1500 );
					setInterval( "slideSwitchZoompics06()", 1500 );
					setInterval( "slideSwitchZoompics07()", 1300 );
					setInterval( "slideSwitchZoompics08()", 1300 );
					setInterval( "slideSwitchZoompics09()", 1500 );
					setInterval( "slideSwitchZoompics10()", 1500 );
					setInterval( "slideSwitchZoompics11()", 1300 );
					setInterval( "slideSwitchZoompics12()", 1300 );
					setInterval( "slideSwitchZoompics13()", 1300 );
			  	});
			</script>

	</body>
</html>
