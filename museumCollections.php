
  <? include_once('header.php'); ?>
  
  <div class="row mainContent">

    <div class="four columns ">
      <img class="imageSubPg" src="http://fpoimg.com/290x290?text=Preview">
      <div>...</div>
      <div class="ger secondP">...</div>
      
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
      <div class="eng">Museum Collections</div>
      <hr class="yellow">
      <div>
        <p>Freedom Center </br> 
          German Heritage Museum </br>
          Union Terminal</p>
      </div>
    </div>

    <div class="three columns">
      <div class="ger">Demnächst</div>
      <hr class="red">
      <div class="ger">Demnächst</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div class="eng"></div>
        <div>
          To add your local historical tour to our list, please email pr@cincideutsch.com.
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
