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

	<?php
		#store folders in $pathX
		$path1 = "./img/big/formwork/com";
		$path2 = "./img/big/formwork/ins";
		$path3 = "./img/big/formwork/mul";
		$path4 = "./img/big/formwork/ind";
		#open folders to $dirX
		$dir1  = opendir($path1);
		$dir2  = opendir($path2);
		$dir3  = opendir($path3);
		$dir4  = opendir($path4);
		#read the folders and retrieve the files to $filesX[]
		while (($filename1 = readdir($dir1)) !==false) { $files1[] = $filename1; }
		while (($filename2 = readdir($dir2)) !==false) { $files2[] = $filename2; }
		while (($filename3 = readdir($dir3)) !==false) { $files3[] = $filename3; }
		while (($filename4 = readdir($dir4)) !==false) { $files4[] = $filename4; }
		#get only .jpg from $filesX[] and store them in $imagesX[]
		$images1 = preg_grep ('/\.jpg$/i', $files1);
		$images2 = preg_grep ('/\.jpg$/i', $files2);
		$images3 = preg_grep ('/\.jpg$/i', $files3);
		$images4 = preg_grep ('/\.jpg$/i', $files4);
		#re-index the $imagesX[] and store them iin $imagesXX[]
		$images11 = array_values($images1);
		$images22 = array_values($images2);
		$images33 = array_values($images3);
		$images44 = array_values($images4);
	?>

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

		<p><u>Commercial Projects (including LEED projects)</u>
			<?php
					#for the length of $imagesXX[], spit out <a href...>
					#for the first one, add class 'icon-camera' using ((condition)?'true':'false')
					for ($j = 0; $j < count($images11); $j++){
						echo "<a href=\"".$path1."/".$images11[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery desktop\" rel=\"comProj\" title=\"Commercial Projects\"></a>";
					}	?>
		</p>
		<ul>
			<li>Multilevel office developments</li>
			<li>Parkades</li>
			<li>Warehouse / Retail Buildings</li>
			<li>Foundations</li>
			<li>Retaining Walls</li>
		</ul>
		<p><u>Institutional Projects</u>
		<?php
				for ($j = 0; $j < count($images22); $j++){
					echo "<a href=\"".$path2."/".$images22[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery desktop\" rel=\"mulProj\" title=\"Institutional Projects\"></a>";
				}	?>
		</p>
		<ul>
			<li>Municipal Facilities</li>
			<li>College / University Facilities or Buildings</li>
			<li>Schools (K - 12)</li>
		</ul>
		<p><u>Multidwelling Residential Projects</u>
		<?php
				for ($j = 0; $j < count($images33); $j++){
					echo "<a href=\"".$path3."/".$images33[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery desktop\" rel=\"munProj\" title=\"Multidwelling Residential Projects\"></a>";
				}	?>
		</p>
		<ul>
			<li> Multilevel condominium development</li>
		</ul>
		<p><u>Industrial Projects</u>
		<?php
				for ($j = 0; $j < count($images44); $j++){
					echo "<a href=\"".$path4."/".$images44[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery desktop\" rel=\"indProj\" title=\"Industrial Projects\"></a>";
				}	?>
		</p>
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
