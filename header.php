<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');

$about = array("about", "aboutCincideutsh", "ourHistory", "cincinnatisHeritage", "EFscholarship", "supportCincideutsch");
$events = array("events", "cincideutschChristkindlmarkt2012", "regularsTable", "whiteSausageBreakfast", "bockfest", "mayFestival", "germanDay", "shootingFestival", "oktoberfest", "christmasMarket", "singingFestival", "cincinnatiCommunity");
?>

<!DOCTYPE html>
<!--[if IE 8]>		<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Cincideutsch</title>
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="icon" type="image/png" href="/images/favico.png" />
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
<?php include_once("analytics.php") ?>
	<div class="row">
		<div class="four columns smallCenter">
			<a href="./"><img class="logo" src="images/logo.jpg" ></a>
		</div>
		<div class="eight columns smallCenter">
			<ul class="navBar">
				<li class="nav navSpace">
					<img <?php if($page == 'index'){echo "class='selected'";}else{ }?> class="yellowArc" src="images/active-link.png" width="60px"></br>
					<a class="mainNav cushycms" href="./"><b>Welcome </b><i>Willkommen</i></a>
				</li>
				<li class="nav dropDown navSpace">
					<img <?php if(in_array($page, $about)){echo "class='selected'";}else{ }?> class="yellowArc" src="images/active-link.png" width="60px"></br>
					<a class="mainNav cushycms" href="aboutCincideutsh.php"><b>About </b><i>&Uuml;ber</i></a>
					 <ul class="subNav">
							<li class="cushycms"><a href="aboutCincideutsh.php"><b>About Cincideutsch&nbsp;</b><em>&Uuml;ber Cincideutsch</em></a></li>
							<li class="cushycms"><a href="ourHistory.php"><b>Our History&nbsp;</b><em>Unsere Geschichte</em></a></li>
							<li class="cushycms"><a href="cincinnatisHeritage.php"><b>Cincinnati&#39;s Heritage&nbsp;</b><em>Cincinnati&#39;s Kulturerbe</em></a></li>
							<li class="cushycms"><a href="supportCincideutsch.php"><b>Support Cincideutsch</b><em>&nbsp;Unterst&uuml;tzen Cincideutsch</em></a></li>
					 </ul>
				</li>
				<li class="nav dropDown navSpace">
					<img <?php if(in_array($page, $events)){echo "class='selected'";}else{ }?> class="yellowArc" src="images/active-link.png" width="60px"></br>
					<a class="mainNav cushycms" href="cincideutschChristkindlmarkt2012.php"><b>Events </b><i>Veranstaltungen</i></a>
					<ul class="subNav">
							<li class="cushycms"><a href="cincideutschChristkindlmarkt2012.php"><b>Cincideutsch Christkindlmarkt 2012</b></a></li>
							<li class="cushycms"><a href="regularsTable.php"><b>Regulars&rsquo; Table</b> <i>Stammtisch</i></a></li>
							<hr class="subNavHr">
							<li class="cushycms"><a href="whiteSausageBreakfast.php"><b>White Sausage Breakfast</b> <i>Wei&szlig;wurstfr&uuml;hst&uuml;ck</i></a></li>
							<li class="cushycms"><a href="bockfest.php"><b>Bockfest</b> <i>Bockfest</i></a></li>
							<li class="cushycms"><a href="beerFestivals.php"><b>Beer Festivals</b> <i>Bierfeste</i></a></li>
							<li class="cushycms"><a href="schwabenfest.php"><b>Schwabenfest</b> <i>Schwabenfest</i></a></li>
							<li class="cushycms"><a href="mayFestival.php"><b>May Festival</b> <i>Maifest</i></a></li>
							<li class="cushycms"><a href="germanDay.php"><b>German Day</b> <i>Deutschland Tag</i></a></li>
							<li class="cushycms"><a href="shootingFestival.php"><b>Shooting Festival</b> <i>Sch&uuml;tzenfest</i></a></li>
							<li class="cushycms"><a href="oktoberfest.php"><b>Oktoberfest</b> <i>Oktoberfest</i></a></li>
							<li class="cushycms"><a href="christmasMarket.php"><b>Christmas Markets</b> <i>Christkindlmarkt</i></a></li>
							<li class="cushycms"><a href="singingFestival.php"><b>Singing Festival</b> <i>S&auml;ngerfest</i></a></li>
							<li class="cushycms"><a href="cincinnatiCommunity.php"><b>Cincinnati Community </b><i>Cincinnati Gemeinde</i></a></li>
					</ul>
				</li>
				<li class="nav navSpace">
					<img <?php if($page == 'albums'){echo "class='selected'";}else{ }?> class="yellowArc" src="images/active-link.png" width="60px"></br>
					<a class="mainNav cushycms" href="albums.php"><b>Albums </b><i>Alben</i></a>
				</li>
				<li class="nav navEnd">
					<img <?php if($page == 'contact'){echo "class='selected'";}else{ }?> class="yellowArc" src="images/active-link.png" width="60px"></br>
					<a class="mainNav cushycms" href="contact.php"><b>Contact </b><i>Kontakt</i></a>
				</li>
			</ul>
		</div>
	</div>
