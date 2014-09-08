<!doctype html>

<html lang="en">
<head>
	<?php include 'includes/head.inc' ?>
</head>

<body class="flatwork">

	<div id="container">
		<div id="header">
			<?php include 'includes/header.inc' ?>
		</div>

	<div id="content">
		<!--############################# -->
		<!--#########  CONTENT ########## -->

		<h1>Flatwork Projects</h1>

		<p>Cemrock Flatwork Division specializes in providing concrete sitework
			for industrial, commercial and multi-residential developments.</p>

		<?php
			#open $path into $dir
			$path = "./img/big/flatwork";
			$dir1  = opendir($path);
			#store ALL the files in $files[]
			while (($filename1 = readdir($dir1)) !==false) {
				$files1[] = $filename1;
			}
			#take only .jpg into $images[]
			$images1 = preg_grep ('/\.jpg$/i', $files1);
			$images2 = array_values($images1);
			#spit out all the pics
			echo "<p>This includes but is not limited to:";
			for ($j = 0; $j < count($images2); $j++){
				echo "<a href=\"".$path."/".$images2[$j]."\" class=\"".(($j==0)?'icon-camera ':'')."cboxElement gallery\" rel=\"flatProj\" title=\"Flatwork Projects\"></a>";
			}
			echo "</p>";
		?>
		<ul>
			<li>Suspended Slabs</li>
			<li>Slab on Grade / Structural Slabs</li>
			<li>Qdeck topping</li>
			<li>Architectural concrete (exposed, stamped, colored)</li>
			<li>Standard concrete (sidewalks, aprons, curbs, curb &amp; gutter, swales)</li>
			<li>Concrete barriers</li>
			<li>City concrete work (sidewalks, driveway crossings, curbs, curb &amp; gutters, medians)</li>
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
