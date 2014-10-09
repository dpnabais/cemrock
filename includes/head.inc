<!-- <head> content, to be included in every page -->
<!-- contains font link, css link,                -->
<!-- author + description, favicon, colorbox link -->
<!-- and init                                     -->

<meta charset="utf-8"/>
<!-- font -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<title>Cemrock - Concrete & Construction</title>
<meta name="description" content="Cemrock - Concrete & Construction">
<meta name="author" content="Daniel" >
<!-- styles w/ Mobile_Detect -->
<?php
  require_once "Mobile_Detect.php";
  $detect = new Mobile_Detect;
  if ( $detect->isMobile() ) {
    echo "<link rel='stylesheet' href='css/mstyle.css?v=1.0'>";
  } else {
    echo "<link rel='stylesheet' href='css/style.css?v=1.0'>";
  }
?>
<!-- favIcon for the picky-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- jQuery lib now comes from google. they say its fresher -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
<!--<script src="./colorbox/jquery-1.11.0.min.js"></script>-->
<!-- crapBox -->
<link href="./colorbox/colorbox.css" rel="stylesheet" />
<script src="./colorbox/jquery.colorbox-min.js"></script>
<script>
  $(document).ready(function(){ // ready. set. go!
    $(".gallery").colorbox({transition:"elastic", maxWidth:"90%", maxHeight:"90%", scalePhotos:true}); //colorBox piece of crap... why doesn't it come with this set already?
  });
</script>
