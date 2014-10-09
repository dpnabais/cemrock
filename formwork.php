<!doctype html>

<html lang="en">
<head>
	<?php include 'includes/head.inc' ?>
	<script>
		$( document ).ready(function() {
			$("#current-content").hide();
				$( ".current-item" ).click(function( event ) {
					if(this.id == "ci1"){
						$("#current-content").empty();
						$("#current-content").show();
						$("#current-content").load("./current/p1/info.php");
					}
					if(this.id == "ci2"){
						$("#current-content").empty();
						$("#current-content").show();
						$("#current-content").load("./current/p2/info.php");
					}
					if(this.id == "ci3"){
						$("#current-content").empty();
						$("#current-content").show();
						$("#current-content").load("./current/p3/info.php");
					}
					if(this.id == "ci4"){
						$("#current-content").empty();
						$("#current-content").show();
						$("#current-content").load("./current/p4/info.php");
					}
				});
				$( ".current-item").fadeTo("slow", 0.5);
				$( ".current-item").hover(
					function(){
						$(this).fadeTo( "fast", 1 );
					}, function(){
						$(this).fadeTo( "fast", 0.5);
					}
				);
		});
		</script>
		
</head>

<body class="formwork">

	<div id="container">
		<div id="header">
			<?php include 'includes/header.inc' ?>
		</div>

	<div id="content">
		<!--############################# -->
		<!--#########  CONTENT ########## -->


		<h1>Current Formwork Projects</h1>

		<!--<a id="slink" class="icon-share" href="current.php">Current Projects</a>-->
		<div id="current-content">
			<!-- leprechaun's droppings here  -->
		</div>
		<br><br>
		<div id="current-container">
			<div class="current-item" id="ci1"> <img src="./current/p1/thumb.jpg"/>11 Av.<br><br></div>
			<div class="current-item" id="ci2"> <img src="./current/p2/thumb.jpg"/>UofC/7<br><br></div>
			<div class="current-item" id="ci3"> <img src="./current/p3/thumb.jpg"/>UofC/8<br><br></div>
			<div class="current-item" id="ci4"> <img src="./current/p4/thumb.jpg"/>Mahogany<br><br></div>
		</div>
		<br><br>
		<p><strong>Cemrock Formwork Division</strong> has successfully completed a wide array of concrete projects including:</p>

		<p><u>Commercial Projects (including LEED projects)</u></p>
		<ul>
			<li>Multilevel office developments</li>
			<li>Parkades</li>
			<li>Warehouse / Retail Buildings</li>
			<li>Foundations</li>
			<li>Retaining Walls</li>
		</ul>
		<p><u>Institutional Projects</u></p>
		<ul>
			<li>Municipal Facilities</li>
			<li>College / University Facilities or Buildings</li>
			<li>Schools (K - 12)</li>
		</ul>
		<p><u>Multidwelling Residential Projects</u></p>
		<ul>
			<li> Multilevel condominium development</li>
		</ul>
		<p><u>Industrial Projects</u></p>
		<ul>
			<li>Calgary West LRT</li>
			<li>Water Treatment Plants</li>
			<li>City of Airdrie Northeast Reservoir & Pump Station</li>
		</ul>

	<!--#########  /CONTENT ######### -->
	<!--############################# -->
	</div>

	<div id="footer">
		<?php include 'includes/footer.inc' ?>
	</div>

</div>

</body>
</html>
