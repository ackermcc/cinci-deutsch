
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
      <div title="eng title" class="eng cushycms">Cincinnati Community</div>
      <hr class="yellow">
      <div title="eng content" class="cushycms">
        <p>The influence of German culture in Cincinnati extends beyond the organizations that keep the history and traditions of German 
          immigrants alive into realms of the arts, cuisine, and community. Currently, Cincideutsch has several relationships that provide
           members with opportunites to enjoy the work of Cincinnati’s talented artists and musicians and to become involved in the city’s 
           latest developments.</p>
        <p><a class="pLink">Cincinnati Chamber Opera </a> </br>
          Founded by Cincideutsch member, Autumn West, and fellow CCM alum Shawn Mylnek, the organization aspires to bring high-quality,
           fully staged opera productions to the Cincinnati area in an intimate, chamber setting, as well as to give local young talent 
           an opportunity to showcase their voices and their work.</p>
        <p><a class="pLink">Music Hall </a> </br>
          Built in 1873 as a result of the May Festival, Music Hall is home to performances by Cincinnati’s Opera, Ballet, Symphony 
          Orchestra, Pops Orchestra, and May Festival Chorus. To partake in the modern musical culture of Cincinnati, contact 
          <a class="pLink">info@cincideutsch.com</a> for member rates. </p>
        <p><a class="pLink">Over-the-Rhine </a> </br>
          Also known as OTR, this neighborhood acquired its name due to the large population of German immigrants living north of the 
          Miami-Erie Canal during the mid-nineteenth century. This community is getting back in touch with its roots through renovation
           projects and community events, breathing life back into the streets of the city.</p>
      </div>
    </div>

    <div class="three columns">
      <div title="ger title" class="ger cushycms">Cincinnati Gemeinde</div>
      <hr class="red">
      <div title="ger content" class="ger cushycms">Demnächst</div>
    </div>

    <div class="two columns">
      <div class="links">
        <div title="links title" class="eng cushycms">Genealogical References</div>
        <div title="links" class="cushycms">
          <a href="">Historical Tours</a></br>
          <a href="">Int’l Relations</a></br>
          <a href="">Museum Collections</a></br>
          <a href="">Newspapers &amp Radio</a></br>
          <a href="">Organizations &amp Societies</a></br>
          <a href="">Religious Services</a></br>
          <a href="">Restaurants &amp Breweries</a></br>
          <a href="">Language Education</a>
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
