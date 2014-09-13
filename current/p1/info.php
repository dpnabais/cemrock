<h1>Project Dome</h1>

<script>
$( document ).ready(function() {
  $("#current-gallery a").hide();
  $("#current-gallery a:first").show();
  $(".next").click(function(){
    $("#current-gallery a:first").detach().appendTo("#current-gallery");
    $("#current-gallery a").hide();
    $("#current-gallery a:first").show();
  });
  $(".prev").click(function(){
    $("#current-gallery a:last").detach().prependTo('#current-gallery');
    $("#current-gallery a").hide();
    $("#current-gallery a:first").show();
  });
});
</script>
<div id="current-div">
      <div id="current-gallery">
        <?php
          $dir = '/current/p1/img/';
          foreach(glob($_SERVER['DOCUMENT_ROOT'].$dir.'*') as $image){
            echo "<a href=\"".$dir.basename($image)."\" class=\"cboxElement\" rel=\"p1\" title=\"Project Uno - The Dome\"><img src=\"".$dir.basename($image)."\"/></a>";
          }
        ?>
      </div>
      <span class="prev icon-left"></span>
      &emsp;&emsp;&emsp;
      <span class="next icon-right" style="padding-right: 1em;"></span>
</div>
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
