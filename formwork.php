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
							<li><a href="formwork.php"        class="scrolly" id="formworkexpand"> Formwork</a>
							<ul>
								<li><a href="#highrise"   class="scrolly"> Highrise</a></li>
								<li><a href="#midlowrise"    class="scrolly"> Mid/Lowrise</a></li>
								<li><a href="#multifamily" class="scrolly"> Multifamily</a></li>
								<li><a href="#commercial"         class="scrolly"> Commercial</a></li>
								<li><a href="#institutional" class="scrolly"> Institutional</a></li>
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

			
			<!-- HIGHRISE -->


				<section id="highrise" class="spotlight style2 right">
					<div id="highrisepics">

						<?php
						    $dirHig  = opendir("./images/formwork/highrise");
						    $dirtxtHig = "./images/formwork/highrise";
						    while (($filenameHig = readdir($dirHig)) !==false) {
						      $filesHig[] = $filenameHig;
						    }
						    $imagesHig = preg_grep ('/\.jpg$/i', $filesHig);
						    sort($imagesHig);
						    for ($i = 0; $i < count($imagesHig); $i++){
						      echo "<div style=\"background-image: url('".$dirtxtHig."/".$imagesHig[$i]."');\"></div>";
						    }
								$dirHig = closedir();
						?>

						</div>


						<div class="content">
						<header>
							<h2>Highrise Projects</h2>
						</header>
						<p class="list-heading">Vancouver</p>
						<ul>
							<li><a href="./highrise.php#oakridge">Oakridge Tower</a></li>
							<li><a href="./highrise.php#pacific">Pacific</a></li>
							<li>Polaris</li>
						</ul>
						<p class="list-heading">Calgary</p>
						<ul>
							<li>Era</li>
							<li>Annex</li>
							<li>Jemm</li>
							<li>Smith</li>
							<li>6th & 10th</li>
						</ul>
						<p class="list-heading">Edmonton</p>
						<ul>
							<li>CX</li>
							<li>Hendrix</li>
							<li>McLaren</li>
							<li>Centurion</li>
							<li>Symphony</li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button" style='display:none;'>Learn More</a></li>
						</ul>
					</div>
					<a href="#midlowrise" class="goto-next scrolly">Next</a>
				</section>


			<!-- MIDRISE / LOWRISE -->


				<section id="midlowrise" class="spotlight style3 left">

					<div id="midlowrisepics">

						<!-- build the divs in random order -->
						<?php

								#open the working directory into $dir
								$dirMid  = opendir("./images/formwork/midlowrise");
								$dirtxtMid = "./images/formwork/midlowrise";

								#store ALL the files in $files[]
								while (($filenameMid = readdir($dirMid)) !==false) {
									$filesMid[] = $filenameMid;
								}
								#take only .jpg into $images[]
								$imagesMid=preg_grep ('/\.jpg$/i', $filesMid);
								#randomize!
								sort($imagesMid);
								#spit out all the <div>s
								for ($i = 0; $i < count($imagesMid); $i++){
									echo "<div style=\"background-image: url('".$dirtxtMid."/".$imagesMid[$i]."');\"></div>";
								}
								$dirMid = closedir();
						?>
						</div>



					<div class="content">
						<header>
							<h2>Mid/Lowrise Projects</h2>
						</header>

						<p class="list-heading">Vancouver</p>
						<ul>
							<li>17 West</li>
							<li>Ventus</li>
							<li>Chloe</li>
						</ul>
						<p class="list-heading">Calgary</p>
						<ul>
							<li>Ezra on Riley Park</li>
							<li>Gateway</li>
							<li>Children's Cottage</li>
							<li>Parkside</li>
						</ul>

						<ul class="actions">
							<li><a href="#" class="button" style='display:none;'>Learn More</a></li>
						</ul>
					</div>
					<a href="#multifamily" class="goto-next scrolly">Next</a>
				</section>


			<!-- MULTIFAMILY -->

				<section id="multifamily" class="spotlight style2 right">

					<div id="multifamilypics">

						<!-- build the divs in random order -->
						<?php

								#open the working directory into $dir
								$dirMul  = opendir("./images/formwork/multifamily");
								$dirtxtMul = "./images/formwork/multifamily";

								#store ALL the files in $files[]
								while (($filenameMul = readdir($dirMul)) !==false) {
									$filesMul[] = $filenameMul;
								}
								#take only .jpg into $images[]
								$imagesMul=preg_grep ('/\.jpg$/i', $filesMul);
								#randomize!
								sort($imagesMul);
								#spit out all the <div>s
								for ($i = 0; $i < count($imagesMul); $i++){
									echo "<div style=\"background-image: url('".$dirtxtMul."/".$imagesMul[$i]."');\"></div>";
								}
								$dirMul = closedir();
						?>
						</div>



					<div class="content">
						<header>
							<h2>Multifamily Projects</h2>
						</header>

						<p class="list-heading">Calgary</p>

						<ul>
							<li>Truman North</li>
							<li>Savanna</li>
							<li>Cavallos</li>
							<li>Mulberry</li>
							<li>Garneau</li>
							<li>1741</li>
							<li>Orchard Sky</li>
							<li>Skymills</li>
						</ul>

					</div>
					<a href="#commercial" class="goto-next scrolly">Next</a>
				</section>


				<!-- COMMERCIAL -->

					<section id="commercial" class="spotlight style3 left">

						<div id="commercialpics">

							<!-- build the divs in random order -->
							<?php

									#open the working directory into $dir
									$dirCom  = opendir("./images/formwork/commercial");
									$dirtxtCom = "./images/formwork/commercial";

									#store ALL the files in $files[]
									while (($filenameCom = readdir($dirCom)) !==false) {
										$filesCom[] = $filenameCom;
									}
									#take only .jpg into $images[]
									$imagesCom=preg_grep ('/\.jpg$/i', $filesCom);
									#randomize!
									sort($imagesCom);
									#spit out all the <div>s
									for ($i = 0; $i < count($imagesCom); $i++){
										echo "<div style=\"background-image: url('".$dirtxtCom."/".$imagesCom[$i]."');\"></div>";
									}
									$dirCom = closedir();
							?>
							</div>



						<div class="content">
							<header>
								<h2>Commercial</h2>
							</header>

							<p class="list-heading">Calgary</p>

							<ul>
								<li>Alt Hotel</li>
								<li>Riverwalk</li>
								<li>11 Ave Place</li>
								<li>Engineered Air Office Bldg.</li>
								<li>Harvest Hills Office Park</li>
								<li>Royal Canadian Legion</li>
								<li>Calgary Courts Center Ph2</li>
							</ul>

						</div>
						<a href="#institutional" class="goto-next scrolly">Next</a>
					</section>


					<!-- INSTITUTIONAL -->

						<section id="institutional" class="spotlight style3 right">

							<div id="institutionalpics">

								<!-- build the divs in random order -->
								<?php

										#open the working directory into $dir
										$dirIns  = opendir("./images/formwork/institutional");
										$dirtxtIns = "./images/formwork/institutional";

										#store ALL the files in $files[]
										while (($filenameIns = readdir($dirIns)) !==false) {
											$filesIns[] = $filenameIns;
										}
										#take only .jpg into $images[]
										$imagesIns=preg_grep ('/\.jpg$/i', $filesIns);
										#randomize!
										sort($imagesIns);
										#spit out all the <div>s
										for ($i = 0; $i < count($imagesIns); $i++){
											echo "<div style=\"background-image: url('".$dirtxtIns."/".$imagesIns[$i]."');\"></div>";
										}
										$dirIns = closedir();
								?>
								</div>



							<div class="content">
								<header>
									<h2>Institutional</h2>
								</header>

								<p class="list-heading">Calgary</p>

								<ul>
									<li>One 12</li>
									<li>University of Calgary - Student Residences</li>
									<li>Mount Royal University - Conservatory and Bella Concert Hall</li>
									<li>CCIT Office Expansion</li>
									<li>Taylor Family Digital Library JV</li>
								</ul>

							</div>
							<a href="#architectural" class="goto-next scrolly">Next</a>
						</section>

					<!-- ARCHITECTURAL -->

						<section id="architectural" class="spotlight style3 left">

						<div id="architecturalpics">

							<!-- build the divs in random order -->
							<?php

									#open the working directory into $dir
									$dirArc  = opendir("./images/formwork/architectural");
									$dirtxtArc = "./images/formwork/architectural";

									#store ALL the files in $files[]
									while (($filenameArc = readdir($dirArc)) !==false) {
										$filesArc[] = $filenameArc;
									}
									#take only .jpg into $images[]
									$imagesArc=preg_grep ('/\.jpg$/i', $filesArc);
									#randomize!
									sort($imagesArc);
									#spit out all the <div>s
									for ($i = 0; $i < count($imagesArc); $i++){
										echo "<div style=\"background-image: url('".$dirtxtArc."/".$imagesArc[$i]."');\"></div>";
									}
									$dirArc = closedir();
							?>
							</div>



						<div class="content">
							<header>
								<h2>Architectural</h2>
							</header>

							<p class="list-heading">Calgary</p>

							<ul>
								<li>Radio Park</li>
							</ul>

						</div>
						<!--<a href="#institutional" class="goto-next scrolly">Next</a>-->
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
			  function slideSwitchHig() {
			    var $active = $('#highrisepics div.main');
			    if ( $active.length == 0 ) $active = $('#highrisepics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#highrisepics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

				function slideSwitchMid() {
			    var $active = $('#midlowrisepics div.main');
			    if ( $active.length == 0 ) $active = $('#midlowrisepics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#midlowrisepics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

				function slideSwitchMul() {
			    var $active = $('#multifamilypics div.main');
			    if ( $active.length == 0 ) $active = $('#multifamilypics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#multifamilypics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

				function slideSwitchCom() {
			    var $active = $('#commercialpics div.main');
			    if ( $active.length == 0 ) $active = $('#commercialpics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#commercialpics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

				function slideSwitchIns() {
			    var $active = $('#institutionalpics div.main');
			    if ( $active.length == 0 ) $active = $('#institutionalpics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#institutionalpics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

				function slideSwitchArc() {
			    var $active = $('#architecturalpics div.main');
			    if ( $active.length == 0 ) $active = $('#architecturalpics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#architecturalpics div:first');
			    $active.addClass('last-main');
			    $next.css({opacity: 0.0})
			      .addClass('main')
			      .animate({opacity: 1.0}, 750, function() {
			        $active.removeClass('main last-main');
			      });
			  	}

			  $(function() {
			    	setInterval( "slideSwitchHig()", 4100 );
					setInterval( "slideSwitchMid()", 3800 );
					setInterval( "slideSwitchMul()", 3950 );
					setInterval( "slideSwitchCom()", 3000 );
					setInterval( "slideSwitchIns()", 3850 );
					setInterval( "slideSwitchArc()", 4150 );
			  });
			</script>

	</body>
</html>
