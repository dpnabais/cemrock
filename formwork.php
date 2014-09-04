<!doctype html>

<html lang="en">
<head>
	<?php include 'includes/head.inc' ?>
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
		$path5 = "./img/big/formwork/leed";
		#open folders to $dirX
		$dir1  = opendir($path1);
		$dir2  = opendir($path2);
		$dir3  = opendir($path3);
		$dir4  = opendir($path4);
		$dir5  = opendir($path5);
		#read the folders and retrieve the files to $filesX[]
		while (($filename1 = readdir($dir1)) !==false) { $files1[] = $filename1; }
		while (($filename2 = readdir($dir2)) !==false) { $files2[] = $filename2; }
		while (($filename3 = readdir($dir3)) !==false) { $files3[] = $filename3; }
		while (($filename4 = readdir($dir4)) !==false) { $files4[] = $filename4; }
		while (($filename5 = readdir($dir5)) !==false) { $files5[] = $filename5; }
		#get only .jpg from $filesX[] and store them in $imagesX[]
		$images1 = preg_grep ('/\.jpg$/i', $files1);
		$images2 = preg_grep ('/\.jpg$/i', $files2);
		$images3 = preg_grep ('/\.jpg$/i', $files3);
		$images4 = preg_grep ('/\.jpg$/i', $files4);
		$images5 = preg_grep ('/\.jpg$/i', $files5);
		#re-index the $imagesX[] and store them iin $imagesXX[]
		$images11 = array_values($images1);
		$images22 = array_values($images2);
		$images33 = array_values($images3);
		$images44 = array_values($images4);
		$images55 = array_values($images5);
	?>

		<h1>Formwork Projects</h1>

		<p><strong>Cemrock Formwork Division</strong> has successfully completed a wide array of concrete projects including:</p>

		<p><u>Commercial Projects</u>
			<?php
					#for the length of $imagesXX[], spit out <a href...>
					#for the first one, add class 'icon-camera' using ((condition)?'true':'false')
					for ($j = 0; $j < count($images11); $j++){
						echo "<a href=\"".$path1."\/".$images11[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
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
					echo "<a href=\"".$path2."\/".$images22[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
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
					echo "<a href=\"".$path3."\/".$images33[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
				}	?>
		</p>
		<ul>
			<li> Multilevel condominium development</li>
		</ul>
		<p><u>Industrial Projects</u>
		<?php
				for ($j = 0; $j < count($images44); $j++){
					echo "<a href=\"".$path4."\/".$images44[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
				}	?>
		</p>
		<ul>
			<li>Calgary West LRT</li>
			<li>Water Treatment Plants</li>
			<li>City of Airdrie Northeast Reservoir & Pump Station</li>
		</ul>
		<p><u>LEED (Leadership in Energy and Environmental Design) certified Projects</u>
		<?php
				for ($j = 0; $j < count($images55); $j++){
					echo "<a href=\"".$path5."\/".$images55[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
				}	?>
		</p>
		<ul>
			<li>University of Calgary Veterinary Medicine Clinical Facility</li>
			<li>City of Calgary Firehall #33 </li>
			<li>Westmount Office Park Building #2</li>
			<li>City of Calgary Fire Dept. Apparatus Repair & Storage Facility</li>
			<li>Harvest Hills Office Park - Building A</li>
			<li>University of Calgary Taylor Family Digital Library</li>
			<li>Calgary West LRT</li>
			<li>City of Calgary Saddleridge Tri-services Building</li>
			<li>University of Calgary CCIT Building Expansion</li>
			<li>Calgary Courts Centre - Phase 2 Parkade</li>
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
