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

		<a id="blink" class="icon-share" href="formwork.php">back</a>

		<div id="current-content">
			<!-- leprechaun's droppings here  -->
		</div>
		<br><br>

		<div id="current-container">
			<div class="current-item" id="ci1"> <img src="./current/p1/thumb.jpg"/>Dome<br><br></div>
			<div class="current-item" id="ci2"> <img src="./current/p2/thumb.jpg"/>Mahogany<br><br></div>
			<div class="current-item" id="ci3"> <img src="./current/p3/thumb.jpg"/>Nuke Bomb<br><br></div>
			<div class="current-item" id="ci4"> <img src="./current/p4/thumb.jpg"/>Eifel Tower<br><br></div>
		</div>




	<!--#########  /CONTENT ######### -->
	<!--############################# -->
	</div>

	<div id="footer">
		<?php include 'includes/footer.inc' ?>
	</div>

</div>

</body>
</html>
