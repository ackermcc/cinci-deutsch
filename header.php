<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Cincideutsch</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet" href="css/font-awesome.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  <script src="javascripts/app.js"></script>

  <script type="text/javascript">
    $(window).load(function(){

      $('.dropDown').hover(function(){
        $(this).find('.subNav').slideToggle("fast");
      });

    });
  </script> 
</head>
<body>


<div class="row">
    <div class="four columns">
      <a href="index.php"><img id="logo" src="images/logo.jpg" ></a>
    </div>
    <div class="eight columns">
      <!-- <ul class="yellow-arc">
        <li><img src="images/active-link.png" alt="" /></li>
        <li><img src="images/active-link.png" alt="" /></li>
        <li><img src="images/active-link.png" alt="" /></li>
        <li><img src="images/active-link.png" alt="" /></li>
        <li><img src="images/active-link.png" alt="" /></li>
      </ul> -->
      <ul class="navBar">
        <li class="navSpace"><a href="index.php"><b>Welcome </b><i>Willkommen</i></a></li>
        <li class="dropDown navSpace"><a href="about.php"><b>About </b><i>Über</i></a>
           <ul class="subNav">
              <li><a href="aboutCincideutsh.php">About Cincideutsch</a></li>
              <li><a href="ourHistory.php">Our History</a></li>
              <li><a href="cincinnatisHeritage.php">Cincinnati's Heritage</a></li>
              <li><a href="EFscholarship.php">EF Scholarship</a></li>
              <li><a href="supportCincideutsch.php">Support Cincideutschq</a></li>
           </ul>  
        </li>
        <li class="dropDown navSpace"><a href="events.php"><b>Events </b><i>Veranstaltungen</i></a>
          <ul class="subNav">
              <li><a href="">Cincideutsch Christkindlmarkt 2013</a></li>
              <li><a href="">Regulars’ Table <i>Stammtisch</i></a></li>
              <li><a href="">White Sausage Breakfast <i>Weißwurstfrühstück</i></a></li>
              <li><a href="">Bockfest <i>Bockfest</i></a></li>
              <li><a href="">May Festival <i>Maifest</i></a></li>
              <li><a href="">Shooting Festival <i>Schützenfest</i></a></li>
              <li><a href="">Oktoberfest <i>Bockfest</i></a></li>
              <li><a href="">Christmas Market <i>Christkindlmarkt</i></a></li>
              <li><a href="">Cincinnati Culture <i>Cincinnati Kultur</i></a></li>
          </ul>
        </li>   
        <li class="navSpace"><a href="albums.php"><b>Albums </b><i>Alben</i></a></li>
        <li><a href="contact.php"><b>Contact </b><i>Kontakt</i></a></li>
      </ul>

    </div>
  </div>