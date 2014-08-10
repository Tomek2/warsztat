<!DOCTYPE html>
<html>
<head>
	<META http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<META http-equiv="Content-Language" content="pl">
	<META NAME="Keywords" CONTENT="
		naprawa samochodowa, mechanik, mechanik samochodowy, ford,
		Volkswagen, Kraków, Cracovia, Krakow, Krakau, Polska, Poland, Polen, inventor,
		pod fortem,naprawa
	">
	<title>Viper Serwis</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" media="screen and (min-width: 321px) and (max-width: 640px)" href="css/mobile.css">
  <!-- slideshow -->
    <link rel="stylesheet" href="js/flexslider.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <!-- end slideshow -->
	<script src="http://skryptcookies.pl/cookie.js"></script>

</head>
<body>
<!--<EMBED SRC="tlomuzyka.mp3" AUTOSTART="true" HIDDEN="true"> -->
<div id="container">
<header>
<img src="images/logo.png" alt="logo"/>
<nav id="main">
<ul>
<li><a href="#">Glowna</a></li>
<li><a href="#">O nas</a></li>
<li><a href="#">Cennik</a></li>
<li><a href="#">Kontakt</a></li>
</ul>
</nav>
</header>
<div id="slajder">
<div class="shell">
				<div class="flexslider">
					<ul class="slides">
						<li>
						<a href="#">
							<img src="images/klimatyzacja.jpg" width="500" height="200"/></a>
							<div class="slide-entry">

								<div class="opis"><h2 class="bannerowe"><a href="#">SERWIS KLIMATYZACJI</a></h2>
								<p>Zapraszamy na profesjonalny serwis układów klimatyzacja. Oferujemy przeglądy, naprawy, napełnianie, ozonowanie, odgrzybianie oraz usuwanie nieprzyjemnych zapachów z systemu samochodowych klimatyzacji. </p></div>

							</div>
						</li>
						<li>
						<a href="#">
							<img src="images/opony.gif" width="500" height="200"/></a>
							<div class="slide-entry">

								<div class="opis"><h2 class="bannerowe"><a href="#">WYMIANA OPON</a></h2>

							<p>Szybka wymiana opon z wyważaniem</p></div>


							</div>
						</li>
						<li>
						<a href="#" >
							<img src="images/baner.png" width="500" height="200" /></a>
							<div class="slide-entry">

								<div class="opis"><h2 class="bannerowe"><a href="#">PRZEGLĄDY SAMOCHODOWE</a></h2>
								<p>Oferujemy promocyjne przeglądy samochodowe.</p></div>

							</div>
						</li>
					</ul>
				</div>
			</div>
</div>
<div id="oddzielacz">
</div>
<section>
	<!--
<aside id="lefft">
<ul>
<li><a href="#">Glowna</a></li>
<li><a href="#">Serwis Klimatyzacji</a></li>
<li><a href="#">Wymiana Opon</a></li>
<li><a href="#">Cennik</a></li>
</ul>
</aside>
	-->
<div id="content">
<h2 class="naglowek">Kontakt</h2>
<p>Zapraszamy pod adres:<br />ul. Pod Fortem 12 <br />12-345 Kraków</p>
<p>Czynne:<br />Od poniedziałku do piątku: 8:00 - 16:00<br />W soboty: 10:00 - 14:00</p>
<p>Kontakt telefoniczny:<br />535 285 541<br />792 800 381</p>
<?php
$cfg['file'] = "licznik.txt"; // ścieżka z plikiem
$cfg['read'] = file_get_contents($cfg['file']); // odczytuje plik

if(!isset($_COOKIE['licznik'])) {
    setcookie('licznik', 'licznik', time() + 7*24*3600); // wysyła ciasteczko do przeglądarki użytkownika
    $fp = fopen($cfg['file'], "w"); // otwiera plik
    flock($fp, 2); // blokuje plik 
    fwrite($fp, $cfg['read']+1); // zapis do pliku
    flock($fp,3); // blokuje plik
    fclose($fp); // zamyka plik
}
    echo $cfg['read']; // wyświetlenie liczby odwiedzin

?>

<h3>Mapa Dojazdu:</h3>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=krakow+pod+fortem+12&amp;aq=&amp;sll=20.673905,-103.297577&amp;sspn=0.556983,0.891953&amp;ie=UTF8&amp;hq=&amp;hnear=Pod+Fortem+12,+Krak%C3%B3w,+Wojew%C3%B3dztwo+ma%C5%82opolskie&amp;ll=50.082494,19.920545&amp;spn=0.005583,0.013937&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.pl/maps?f=q&amp;source=embed&amp;hl=pl&amp;geocode=&amp;q=krakow+pod+fortem+12&amp;aq=&amp;sll=20.673905,-103.297577&amp;sspn=0.556983,0.891953&amp;ie=UTF8&amp;hq=&amp;hnear=Pod+Fortem+12,+Krak%C3%B3w,+Wojew%C3%B3dztwo+ma%C5%82opolskie&amp;ll=50.082494,19.920545&amp;spn=0.005583,0.013937&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Wyświetl większą mapę</a></small>
<p>Jak do nas dotrzeć:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque.</p>
<img src="images/miejsce.jpg" alt="zdjecie miejsca firmy" width="425" height="350"/>
</div>
</section>
<footer>
&copy; Copyright 2014 ViperSerwis All Rights Reserved.
</footer>
</div>
</body>
</html>
