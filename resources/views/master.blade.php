<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> @yield('title') : Hiboux</title>
	<meta name="description" content="@yield('meta-description')">
	<meta name="keywords" content="post-rock, music, New Zealand, experimental rock">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic+SC|Lato:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body >

<div class="">
		<div class="background-pic"></div>
		 <header>
		 	<iframe class="bandcamp-iframe" style="border: 0; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/album=2627599969/size=small/bgcol=333333/linkcol=e99708/transparent=true/" seamless><a href="http://hibouxband.bandcamp.com/album/demo-ii">Demo II by Hiboux</a></iframe>

		 	<div class="boost"></div>
			
			<a href="/"> <div class="header-image" id="music-image"></div></a>
			<div class="sexy_line"></div>

			<div class="experiment content-back"></div>
		
		<input type="checkbox" id="nav-trigger" class="nav-trigger" />
		<label for="nav-trigger">Menu</label>
		
			<div class="navigation nav-content">
			 	<nav class="content-nav" >
					<ul>
						<li><a href="/music">Music</a></li>
						<li><a href="/media">media</a></li>
						<li><a href="/upcoming">Upcoming gigs</a></li>						
					</ul>
				<ul class="mobile-menu">
					<li><a href="https://www.facebook.com/hibouxband"><img src="img/etc/facebook.png" alt="facebook" height="30"> Find us on Facebook</a></li>
					<li><a href="https://hibouxband.bandcamp.com/album/demo-ii"><img src="img/etc/bandcamp.png" alt="bandcamp" height="30"> Listen to us on Bandcamp</a></li>
				</ul>
				</nav>
			</div>
		</header>
		<div class="container">

	@yield('content')
 
		<footer>
			<div class="sexy_line"></div>
			<ul>
				<li><a href="https://www.facebook.com/hibouxband"><img src="img/etc/facebook.png" alt="facebook" height="50"></a></li>
				<li><a href="https://hibouxband.bandcamp.com/album/demo-ii"><img src="img/etc/bandcamp.png" alt="bandcamp" height="50"></a></li>
			</ul>
			<p><sm>copyright 2015</sm></p>
		</footer>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/footer.js"></script>
	<script src="js/header.js"></script>
</body>
</html>
