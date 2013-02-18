
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
      <div class="eng">Singing Festival</div>
      <hr class="yellow">
      <div>
        <p>Prior to the founding of the May Festival, the greatest singing events in the city were the German singing festivals. Begun 
          by choirs known as Saengerbunds in 1849, these choral events drew thousands of singers to the city of Cincinnati. Almost 100 
          years since its founding, enthusiasm for the festival eventually died down due to the increased popularity of the May Festival 
          and the event ceased to be held as of the 1950s. After the success of the World Choir Games in 2012, Saengerfest was revived 
          that same year, perpetuating the tradition and reaffirming Cincinnati’s well deserved title of “The City that Sings.” </p>
      </div>
    </div>

    <div class="three columns">
      <div class="ger">Saengerfest</div>
      <hr class="red">
      <div class="ger">Demnächst</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div class="eng">Celebrations</div>
        <div>
          <a href="">Christmas Saengerfest</a>
        </div>
        <div class="eng secondP">Resources</div>
        <div>
          <a href="">Singing Societies</a>
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
