<h1>Mahogany Lakeside Homes</h1>

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
          $dir = '/current/p2/img/';
          foreach(glob($_SERVER['DOCUMENT_ROOT'].$dir.'*') as $image){ // Magic. Do not touch!
            echo "<a href=\"".$dir.basename($image)."\" class=\"cboxElement\" rel=\"p2\" title=\"Project UoF\"><img src=\"".$dir.basename($image)."\"/></a>";
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
    <td>Residential complex</td>
  </tr>
  <tr>
    <td><strong>Address: </strong></td>
    <td>Mahogany Blvd. SE, Calgary</td>
  </tr>
  <tr>
    <td><strong>Developer: </strong></td>
    <td>Dev guy</td>
  </tr>
  <tr>
    <td><strong>Manager: </strong></td>
    <td>Mr. Manager</td>
  </tr>
  <tr>
    <td><strong>Start: </strong></td>
    <td>Mar 4st, 2014</td>
  </tr>
  <tr>
    <td><strong>End: </strong></td>
    <td>Dec 25th, 2014</td>
  </tr>
</table>
