
  <? include_once('header.php'); ?>
  
  <div class="row mainContent">

    <div class="four columns ">
      <img title="image" class="imageSubPg cushycms" src="http://fpoimg.com/290x290?text=Preview">
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
      </div>
    </div>

    <div class="three columns">
      <div title="eng title" class="eng cushycms">Int’l Relations</div>
      <hr class="yellow">
      <div title="eng content" class="cushycms">
        <p>European American Chamber of Commerce Munich Sister City Association Greater Cincinnati World Affairs Council (GCWAC)</p>
      </div>
    </div>

    <div class="three columns">
      <div title="ger title" class="gerTitle cushycms">Demnächst</div>
      <hr class="red">
      <div title="ger content" class="ger cushycms">Demnächst</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div title="links title" class="eng cushycms"></div>
        <div title="links" class="cushycms"></div>
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