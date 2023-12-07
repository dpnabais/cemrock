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

			
			<!-- HIGHRISE -->


				<section id="highrise" class="spotlight style2 right">
					<div id="highrisepics">

						<?php
						    $dirRes  = opendir("./images/formwork/highrise");
						    $dirtxtRes = "./images/formwork/highrise";
						    while (($filenameRes = readdir($dirRes)) !==false) {
						      $filesRes[] = $filenameRes;
						    }
						    $imagesRes = preg_grep ('/\.jpg$/i', $filesRes);
						    sort($imagesRes);
						    for ($i = 0; $i < count($imagesRes); $i++){
						      echo "<div style=\"background-image: url('".$dirtxtRes."/".$imagesRes[$i]."');\"></div>";
						    }
								$dirRes = closedir();
						?>

						</div>


						<div class="content">
						<header>
							<h2>Highrise Projects</h2>
						</header>
						<p class="list-heading">Vancouver</p>
						<ul>
							<li><a href="./oakridge.php">Oakridge Tower</a></li>
							<li><a href="./pacific.php">Pacific</a></li>
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
								$dirCom  = opendir("./images/formwork/midlowrise");
								$dirtxtCom = "./images/formwork/midlowrise";

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
								$dirIns  = opendir("./images/formwork/multifamily");
								$dirtxtIns = "./images/formwork/multifamily";

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
					<a href="#cores" class="goto-next scrolly">Next</a>
				</section>


				<!-- COMMERCIAL -->

					<section id="cores" class="spotlight style3 left">

						<div id="corespics">

							<!-- build the divs in random order -->
							<?php

									#open the working directory into $dir
									$dirCor  = opendir("./images/formwork/cores");
									$dirtxtCor = "./images/formwork/cores";

									#store ALL the files in $files[]
									while (($filenameCor = readdir($dirCor)) !==false) {
										$filesCor[] = $filenameCor;
									}
									#take only .jpg into $images[]
									$imagesCor=preg_grep ('/\.jpg$/i', $filesCor);
									#randomize!
									#shuffle($imagesCor);
									#spit out all the <div>s
									for ($i = 0; $i < count($imagesCor); $i++){
										echo "<div style=\"background-image: url('".$dirtxtCor."/".$imagesCor[$i]."');\"></div>";
									}
									$dirCor = closedir();
							?>
							</div>



						<div class="content">
							<header>
								<h2>Freestanding Cores</h2>
							</header>

							<p class="list-heading">Recent Projects</p>

							<ul>
								<li>All Seniors Care - Sage Hill</li>
								<li>All Seniors Care - Mactaggart</li>
								<li>Westbrook Office Building</li>
							</ul>

						</div>
						<a href="#architectural" class="goto-next scrolly">Next</a>
					</section>


					<!-- ARCHITECTURAL -->

						<section id="architectural" class="spotlight style3 right">

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
										#shuffle($imagesArc);
										#spit out all the <div>s
										for ($i = 0; $i < count($imagesArc); $i++){
											echo "<div style=\"background-image: url('".$dirtxtArc."/".$imagesArc[$i]."');\"></div>";
										}
										$dirArc = closedir();
								?>
								</div>



							<div class="content">
								<header>
									<h2>Architectural Exposed Concrete</h2>
								</header>
<!--
								<p>Recent Projects:</p>

								<ul>
									<li>All Seniors Care - Sage Hill</li>
									<li>All Seniors Care - Mactaggart</li>
									<li>Westbrook</li>
								</ul>
-->
							</div>
							<!-- <a href="#four" class="goto-next scrolly">Next</a>-->
						</section>

			<!-- Five -->
			<!--
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
-->
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
			  function slideSwitchRes() {
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

				function slideSwitchCom() {
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

				function slideSwitchIns() {
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

				function slideSwitchCor() {
			    var $active = $('#corespics div.main');
			    if ( $active.length == 0 ) $active = $('#corespics div:last');
			    var $next =  $active.next().length ? $active.next()
			      : $('#corespics div:first');
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
			    setInterval( "slideSwitchRes()", 4100 );
					setInterval( "slideSwitchCom()", 3800 );
					setInterval( "slideSwitchIns()", 3950 );
					setInterval( "slideSwitchCor()", 4000 );
					setInterval( "slideSwitchArc()", 3850 );
			  });
			</script>

	</body>
</html>
