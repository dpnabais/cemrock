

<h1>Project Uno</h1>

<div id="current-gallery">
  <img src="./current/p1/img/indProj01.jpg"/>
  <img src="./current/p1/img/indProj02.jpg"/>
  <img src="./current/p1/img/indProj03.jpg"/>
</div>
<span class="prev">&lt</span>
<span class="next">&gt</span>

<script>
$( document ).ready(function() {
  $("#current-gallery img").hide();
  $("#current-gallery img:first").show();
  $(".next").click(function(){
    $("#current-gallery img:first").detach().appendTo("#current-gallery");
    $("#current-gallery img").hide();
    $("#current-gallery img:first").show();
  });
  $(".prev").click(function(){
    $("#current-gallery img:last").detach().prependTo('#current-gallery');
    $("#current-gallery img").hide();
    $("#current-gallery img:first").show();
  });
});

</script>

<p><strong>Info: </strong>One level underground parkade and 10 storey condominium tower</p>
<p><strong>Address: </strong>1234 32 St. SW, Calgary</p>
<p><strong>Developer: </strong>Rich Guy Jr.</p>
<p><strong>Manager: </strong>Someone</p>
<p><strong>Start: </strong>Jan 1st, 2012</p>
<p><strong>End: </strong>Aug 20th, 2015</p>
