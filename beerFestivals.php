
  <? include_once('header.php'); ?>

  <div class="row mainContent">

    <div class="four columns ">
      <div><img title="image" class="imageSubPg cushycms" src="images/_DSC0128_290x290.png"></div>
      <div title="eng caption" class="cushycms">...</div>
      <div title="ger caption" class="ger secondP cushycms">...</div>
      
      <div class="social">
        <div class="eng">Connect <span class="ger">Anschließen</span></div>
        <a href=""><img class="smIcons" src="images/meetUp.png"></a>
        <a href=""><img class="smIcons" src="images/facebook.png"></a>
        <a href=""><img class="smIcons" src="images/twitter.png"></a>
        <a href=""><img class="smIcons" src="images/flickr.png"></a>
        <a href=""><img class="smIcons" src="images/linkedIn.png"></a>
        <a href=""><img class="smIcons" src="images/instagram.png"></a>
        <p class="meetUs">Meet us at Stammtisch, <br> every Monday at 6:00pm.</p>
      </div>
    </div>

    <div class="three columns">
      <div title="eng title" class="eng cushycms">Beer Festivals</div>
      <hr class="yellow">
      <div title="eng content" class="engContent cushycms">
        <p>During the 1800s, Cincinnati had a booming brewing industry. German beers and lagers dominated the scene. However, with the introduciton of Prohibition, the vast majority of the breweries shut down and local brewing was almost non-existent by the 1980s. </p>
        <p> Today, the brewing industry in Cincinnati is on the rebound. Its resurgence is celebrated throughout the year with festivals that inspire unique seasonal brews from talented brewers throughout the city.  </p>
</div>     
    </div>

    <div class="three columns">
      <div title="ger title" class="gerTitle cushycms">???</div>
      <hr class="red">
      <div title="ger content" class="ger cushycms"><p>Need Translation</p>
</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div title="links title" class="eng cushycms">Celebrations</div>
        <div title="links" class="cushycms"><ul class="linksUl">
        	<li><a href="">Beer Week</a></li>
        	<li><a href="">Bockfest</a></li>
        	<li><a href="">Starkbier Fest</a></li>
        	<li><a href="">Craft Beer Oktoberfest</a></li>
          </ul>
        </div>
        <div title="links title" class="eng cushycms secondP">Other Resources</div>
        <div title="links" class="cushycms"><ul class="linksUl">
          <li><a href="">Homebrewing Orgs</a></li>
          <li><a href="">Restaurants and Breweries</a></li>
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