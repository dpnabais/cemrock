<!-- <header> content                              -->
<!-- contains the Menu, logo and animated banner   -->
<!-- to be included in every page                  -->


<!-- make the menu fixed on the top of the page -->
<div id="menufixer">

<!-- toggle for mobile menu -->
<input type="checkbox" id="toggle" name="toggle" tabindex="0"/>
<label for="toggle"></label>

<!-- menu - options for all! -->
<div id="menu">
  <div class="helper">
    <ul>
      <li><a href="index.php" id="home" class="icon-home"> Home</a></li>
      <li><a href="formwork.php" id="formwork" class="icon-formwork"> Formwork</a></li>
      <li><a href="flatwork.php" id="flatwork" class="icon-flatwork"> Flatwork</a></li>
      <li><a href="safety.php" id="safety" class="icon-safety"> Safety</a></li>
      <li><a href="careers.php" id="careers" class="icon-careers"> Careers</a></li>
      <li><a href="contact.php" id="contact" class="icon-contact"> Contact</a></li>
    </ul>
  </div>
</div>

<!-- logo and small info -->
<div id="logo">
  <div class="logohelper">
  <img src="img/logo_cr_t2.png" width="500px" alt="Cemrock logo">
</div></div>
<p id="info"><a href="http://www.maps.google.com/?q=121,%202432,%2048%20Street%20SE,%20Calgary" target="_blank">#121, 2432 - 48 Street SE, Calgary, AB T2B 1M4</a> - (403) 263-7168</p>

</div>

<!-- big header pic -->
<div id="headerbg">

<!-- build the divs in random order -->
<?php
    #open the working directory into $dir
    $dir  = opendir("./img/headers");
    #store ALL the files in $files[]
    while (($filename = readdir($dir)) !==false) {
      $files[] = $filename;
    }
    #take only .jpg into $images[]
    $images=preg_grep ('/\.jpg$/i', $files);
    #randomize!
    shuffle($images);
    #spit out all the <div>s
    for ($i = 0; $i < count($images); $i++){
      echo "<div style=\"background-image: url('.\/img\/headers\/".$images[$i]."');\"></div>";
    }
?>
</div>

<!-- Call Merlin to renew magic subscription -->
<script>
  function slideSwitch() {
    var $active = $('#headerbg div.active');
    if ( $active.length == 0 ) $active = $('#headerbg div:last');
    var $next =  $active.next().length ? $active.next()
      : $('#headerbg div:first');
    $active.addClass('last-active');
    $next.css({opacity: 0.0})
      .addClass('active')
      .animate({opacity: 1.0}, 750, function() {
        $active.removeClass('active last-active');
      });
  }

  $(function() {
    setInterval( "slideSwitch()", 4000 );
  });
</script>
