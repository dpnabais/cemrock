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
<script>
  $(document).ready(function(){ // ready. set. go!
    $(".gallery").colorbox({transition:"elastic", maxWidth:"90%", maxHeight:"90%", scalePhotos:true}); //colorBox piece of crap... why doesn't it come with this set already?
  });
</script>
<h1>11th Avenue</h1>
<div id="current-div">
      <div id="current-gallery">
        <?php
          $dir = '/current/p1/img/';
          foreach(glob($_SERVER['DOCUMENT_ROOT'].$dir.'*') as $image){ // Magic. Do not touch!
            echo "<a href=\"".$dir.basename($image)."\" class=\"cboxElement gallery\" rel=\"p1\" title=\"11 Av.\"><img src=\"".$dir.basename($image)."\"/></a>";
            //This echo estatment is also governed by magic. Do not touch either!
          }
        ?>
      </div>
      <span class="prev icon-left"></span>
      &emsp;&emsp;&emsp;
      <span class="next icon-right"></span>
</div>
<br>
<p>Big project with lots of sunshine, most of the days anyway. This worksite is
  better than the others as it is on the 11th Av. This description is already too
  big. I can write two more lines just to see how it looks like after all. This
  description will be the biggest ever.</p>
