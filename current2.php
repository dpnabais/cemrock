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

		<h1>Current Formwork Projects</h1>

		<a id="blink" class="icon-share" href="formwork.php">back</a>

<ul class="tabs">
    <li>
        <input type="radio" checked name="tabs" id="tab1">
        <label for="tab1">tab 1</label>
        <div id="tab-content1" class="tab-content">
            <h3>Tab 1</h3>
            <!-- Your content goes here -->
						<h1>Project Dome</h1>
						<div id="current-div">
									<div id="current-gallery">
										<?php
											$dir = '/current/p1/img/';
											foreach(glob($_SERVER['DOCUMENT_ROOT'].$dir.'*') as $image){ // Magic. Do not touch!
												echo "<a href=\"".$dir.basename($image)."\" class=\"cboxElement\" rel=\"p1\" title=\"Project Uno - The Dome\"><img src=\"".$dir.basename($image)."\"/></a>";
												//This echo estatment is also governed by magic. Do not touch either!
											}
										?>
									</div>
									<span class="prev icon-left"></span>
									&emsp;&emsp;&emsp;
									<span class="next icon-right"></span>
						</div>
						<br>
						<table>
							<tr>
								<td><strong>Info: </strong></td>
								<td>One level underground parkade and 10 storey condominium tower</td>
							</tr>
							<tr>
								<td><strong>Address: </strong></td>
								<td>1234 32 St. SW, Calgary</td>
							</tr>
							<tr>
								<td><strong>Developer: </strong></td>
								<td>Rich Guy Jr.</td>
							</tr>
							<tr>
								<td><strong>Manager: </strong></td>
								<td>Someone</td>
							</tr>
							<tr>
								<td><strong>Start: </strong></td>
								<td>Jan 1st, 2012</td>
							</tr>
							<tr>
								<td><strong>End: </strong></td>
								<td>Aug 20th, 2015</td>
							</tr>
						</table>

        </div>
    </li>
    <li>
        <input type="radio" name="tabs" id="tab2">
        <label for="tab2">tab 2</label>
        <div id="tab-content2" class="tab-content">
            <h3>Tab 2</h3>
            <!-- Your content goes here -->
        </div>
    </li>
    <li>
        <input type="radio" name="tabs" id="tab3">
        <label for="tab3">tab 3</label>
        <div id="tab-content3" class="tab-content">
            <h3>Tab 3</h3>
            <!-- Your content goes here -->
        </div>
    </li>
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
