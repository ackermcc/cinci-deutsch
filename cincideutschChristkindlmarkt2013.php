
  <? include_once('header.php'); ?>
  
  <div class="row mainContent">

    <div class="four columns ">
      <div><img title="image" class="imageSubPg cushycms" src="images/_DSC0108_290x290.png" /></div>
      <div title="eng caption" class="engCap cushycms"></div>
      <div title="ger caption" class="gerCap secondP cushycms"></div>
      
      <? include_once('socialMedia.php'); ?>
    </div>

    <div class="three columns">
      <div title="eng title" class="eng cushycms">Cincideutsch Christkindlmarkt 2013</div>
      <hr class="yellow">
      <div title="eng content" class="engContent cushycms">Cincideutsch will continue the tradition of Christkindlmarkt on Fountain Square in 2013. Stay tuned for more news!</div>
    </div>

    <div class="three columns">
      <div title="ger title" class="gerTitle cushycms">Cincideutsch Christkindlmarkt 2013</div>
      <hr class="red">
      <div title="ger content" class="ger cushycms">Cincideutsch wird die Tradition des Christkindlmarktes am Fountain Square in 2013 fortsetzen. Neuigkeiten zum Christkindlmarkt folgen in K&uuml;rze.</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div title="links title" class="eng cushycms">Directions</div>
        <div title="links" class="cushycms"><ul class="linksUl">
	<li><a href="">Fountain Square</a></li>
	<li><a href="">Parking</a></li>
</ul>
</div>

        <div title="links title" class="eng secondP cushycms">Sponsors 2013</div>
        <div title="links" class="cushycms"><ul class="linksUl">
	<li><a href="">Become a Sponsor</a></li>
</ul>
</div>

        <div title="links title" class="eng secondP cushycms">Past Christkindlmarkts</div>
        <div title="links" class="cushycms"><ul class="linksUl">
	<li><a href="cincideutschChristkindlmarkt2012.php">2012</a></li>
</ul>
</div>
      </div>
    </div>    

  </div>

  <? include_once('footer.php'); ?>
  
  
  
  <!-- Included JS Files (Compressed) -->
  <script src="../javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
  
</body>
</html>