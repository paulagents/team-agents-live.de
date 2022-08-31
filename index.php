<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Agent-Schnecke</title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="css/normalize.css">        
        <link rel="stylesheet" href="css/pageloader.css">
        <link rel="stylesheet" href="fonts/opensans/stylesheet.css">
        <link rel="stylesheet" href="fonts/asap/stylesheet.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="js/vendor/jquery.fullPage.css">
        <link rel="stylesheet" href="js/vegas/vegas.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/main_responsive.css">
        <link rel="stylesheet" href="css/style-font1.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
		<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
</style>
    </head>
    <body id="menu" class="alt-bg">
       <!--  <div class="page-loader" id="page-loader">
            <div><i class="ion ion-loading-d"></i><p>Wartungsarbeiten</p></div>
        </div> -->
		<nav class="quick-link count-6 nav-left">
			<ul id="qmenu">
				<li data-menuanchor="home">
					<a href="#home" class=""><i class="icon ion ion-home"></i>
					</a>
					<span class="title">Home</span>
				</li>
				<li data-menuanchor="when">
					<a href="#when" class=""><i class="icon ion ion-android-alarm"></i>
					</a>
					<span class="title">Erscheinungstag</span>
				</li>
				<!-- <li data-menuanchor="about-us">
					<a href="#about-us"><i class="icon ion ion-android-information"></i>
					</a>
					<span class="title">About us</span>
				</li> -->
			</ul>
		</nav>
        <div class="page-cover" id="home">
            <div class="cover-bg pos-abs full-size bg-img" data-image-src="img/bg-slide1.jpg"></div>
            <div class="cover-bg pos-abs full-size slide-show">
			<!-- The video -->
  <!-- <video autoplay muted loop id="myVideo">
<source src="./WarThunder/video/promo.webm" type="video/webm">
  <source src="./WarThunder/video/Neon - 85828.mp4" type="video/mp4">
<source src="./WarThunder/video/background__HD.webm" type="video/webm"> -->

<video autoplay muted loop id="myVideo">
  <source src="./WarThunder/video/background__HD.webm" type="video/webm">
  Your browser does not support HTML5 video.
</video>



				<!-- <i class='img' data-src='./img/bg-slide2.jpg'></i>
				<i class='img' data-src='./img/bg-slide3.jpg'></i>
				<i class='img' data-src='./img/bg-slide4.jpg'></i> -->
			</div></video>
            <div class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(51, 2, 48, 0.12)"></div>
        </div>
        <main class="page-main" id="mainpage">             
			<div class="section page-home page page-cent" id="s-home">
				<!-- <div class="logo-container">
					<img class="h-logo" src="img/logo.png" alt="Logo">
				</div> -->
				<section class="content">
					<header class="header">
						<!--<div class="h-left">
							<h2><img class="h-logo" src="img/logo.png" alt="Logo"></h2>
						</div>-->
						<div class="h-right">
							<h3>WartungsarbeitenDie </h3>
							
						
<div class="content">
  <h2 style="color:White;">Neue Team Twitch live</h2>
<h1><a href="https://www.team-agents-live.de" target="_blank"><p style="color:Blue;">www.team-agents-live.de</p></a></h1>
  

</div></div>
					</header>
				</section>
                <footer class="p-footer p-scrolldown">
                    <a href="#when">
                        <div class="arrow-d">
							<div class="before">Date</div>
							<div class="after">Home</div>
							<div class="circle"></div>
						</div>
                    </a>                        
                </footer>
			</div>
            <div class="section page-when page page-cent" id="s-when">
                <section class="content">
                    <div class="clock clock-countdown">
						<div class="site-config"
							 data-date="09/05/2022 23:00:00" 
							 data-date-timezone="+1"
							 ></div>
						<header class="header">
							 <strong>Erscheinungstag</strong>
						</header>
						                        <div class="elem-left">
							<!-- <span class="text top"><img class="img" alt="Logo" src="img/logo.png"></span> -->
                            <div class="digit days">000</div>
                            <div class="text">Tage</div>
                        </div>
                        <div class="elem-center">
                            <div class="digit hours">00</div>
                            <div class="text">Stunde</div>
                        </div>						

                        <div class=" elem-right">
                            <div class="digit minutes">00</div>
                            <div class="text">Minuten</div>
                        </div>
						<div class="second">
							<input class="knob container" 
								   id="second-knob"
								  	data-width="400"
								  	data-height="400"
								 data-displayInput=false
									data-fgColor="#fff"
									data-bgColor="rgba(255,255,255,0)"
									data-thickness=".07"
								 	value="0"
									data-displayPrevious=true
								   data-max="6000"
								   />
						</div>
                    </div>                   
                </section>                
                <footer class="p-footer p-scrolldown">
                    <a href="#register">
                        <div class="arrow-d">
							<!-- <div class="before">About</div> -->
							<div class="after">Date</div>
							<div class="circle"></div>
						</div>
                    </a>                        
                </footer>
            </div>
            <!-- <div class="section page-about page page-cent" id="s-about-us">
                <section class="content">
                    <header class="p-title">
                        <h3>About us<i class="ion ion-android-information">
                            </i>
                        </h3>
						<h2>Main <span class="bold">Title</span></h2>
                    </header>
                    <article class="text">
                        <p>Beschreibung 1 <strong>Beschreibung 2 </strong> Beschreibung 3</p>
                        <p>Beschreibung 4</p>
                    </article>
                </section>
            </div>
        </main> -->
		<footer class="page-footer">
			<span>Finden Sie uns auf 
				<a href="https://www.twitch.tv/paulagents" target="_blank"><i class="iconify" data-icon="ion:logo-twitch"></i></a>
				<a href="https://www.youtube.com/paulagents" target="_blank"><i class="ion icon ion-social-youtube"></i></a>
				<a href="https://discord.gg/5DSbspA" target="_blank"><i class="iconify" data-icon="ion:logo-discord"></i></a>
				
			</span>
		</footer>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/all.js"></script>
        <script src="js/jquery.downCount.js"></script>
        <script src="js/form_script.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
