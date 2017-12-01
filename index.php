<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Stephanie Tran's Portfolio
    </title>
    <meta name="author" content="Stephanie Tran" />
    <meta name="description" content="Toronto web developer Stephanie Tran's portfolio.">
    <meta name="keywords" content="Stephanie Tran, Stephanie, Tran, Toronto, web developer, portfolio, web design" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--FAVICON-->
    <link rel="icon" type="image/png" href="favicon.gif" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/gridhover.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css" />

    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
    <![endif]-->
    
	<!-- jQuery -->
	<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
</head>
<body>
<div id="loader">
	
</div>

<div class="container">
	<!--  M A I N -->
	<main>
	<div id="nav"><nav>
		<a class="icon-hamburger" id="show-button" href="#nav"><span>&nbsp;</span></a>
				<a class="icon-close" id="hide-button" href="#"><span>&nbsp;</span></a>
				<ul id="nav-menu">
				<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#connect">Connect</a></li>
				</ul>
		</nav>
	</div>
		<section id="intro">
		<h1 data-shadow="Hello!">Hello!</h1>
				<img id="home-logo" src="images/logo-small.png" alt="Stephanie Tran's logo"/>
		</section>
		<section id="about">
			<div id="about-text">
				<img class="img-circle" src="images/stephtran.jpg">
				<div id="about-details">
					<h3>I'm Stephanie.</h3>
					<p><b>Toronto, ON</b></p>
				</div>
			</div>
		</section>

		<section id="portfolio">
				<h1>Portfolio</h1>

				<div class="grid">
						<figure class="effect-julia">
							<img src="images/amnesty-international-canada-youth-stephanie-tran-website.png" alt="Screenshot of Amnesty International Canada's Youth website."/>
							<figcaption>
								<h2>AI Canada <span>Youth</span></h2>
								<div>
									<p>WordPress, PHP, jQuery, CSS3</p>
								</div>
								<!-- <a href="http://stephanietran.ca/modelportfolio/index.html">View more</a> -->
							</figcaption>			
						</figure>

						<figure class="effect-julia striped">
							<img src="images/refugee-champions-site-stephanie-tran-amnesty-international-canada.jpg" alt="Screenshot of Amnesty International Canada's Refugee Champions website."/>
							<figcaption>
								<h2>Refugee <span>Champions</span></h2>
								<div>
									<p>WordPress, PHP, jQuery, CSS3</p>
								</div>
								<a href="http://iwelcome.aito.ca/">View more</a>
							</figcaption>			
						</figure>

						<figure class="effect-julia striped">
							<img src="images/reel-awareness-aito-stephanie-tran.jpg" alt="Screenshot of Amnesty International Toronto Organization's Reel Awareness Film Festival and Film Series website."/>
							<figcaption>
								<h2>Reel <span>Awareness</span></h2>
								<div>
									<p>WordPress, PHP, jQuery, CSS3</p>
								</div>
								<a href="http://aito.ca/reelawareness/">View more</a>
							</figcaption>			
						</figure>


						<figure class="effect-julia striped">
							<img src="images/21-01.png" alt="img21"/>
							<figcaption>
								<h2>Model <span>Portfolio</span></h2>
								<div>
									<p>HTML &amp; CSS</p>
								</div>
								<a href="http://stephanietran.ca/modelportfolio/index.html">View more</a>
							</figcaption>			
						</figure>

						<figure class="effect-julia striped">
							<img src="images/madlibs.png" alt="img22"/>
							<figcaption>
								<h2>PHP<span>Mad Libs</span></h2>
								<div>
									<p>HTML, CSS &amp; PHP</p>
								</div>
								<a href="http://portfolio.stephanietran.ca/madlibs/">View more</a>
							</figcaption>			
						</figure>
						
						<figure class="effect-julia striped">
							<img src="images/calendar.png" alt="Stephanie Tran's Calendar site."/>
							<figcaption>
								<h2>HTML<span>Calendar</span></h2>
								<div>
									<p>HTML, CSS, JavaScript, jQuery</p>
									
								</div>
								<a href="http://stephanietran.ca/calendar-portfolio/index.html">View more</a>
							</figcaption>			
						</figure>


					</div>
		
		</section><!-- end portfolio div -->
		
		<!-- Connect -->
		
		<section id="connect">
				<h2>Connect</h2>
					<div id="social-media">
						<a href="https://twitter.com/ItsStephTran" alt="Stephanie Tran's Twitter">
							<span class="fa fa-twitter-square"></span> 
						</a>
						
						<a href="https://linkedin.com/in/transteph" alt="Stephanie Tran's Linkedin">
							<span class="fa  fa-linkedin-square "></span> 
						</a>
						<a href="https://github.com/transteph" alt="Stephanie Tran's Linkedin">
							<span class="fa fa-github-square"></span> 
						</a>
					</p>
		</section>
		<footer>
		<p id="footer">Stephanie Tran <?php  echo date("Y");  ?> &copy;</p>
		</footer>
	</main>
</div>
	<!-- scripts -->
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/jquery.transit.min.js" type="text/javascript"></script>
	<script src="https://use.fontawesome.com/b0dba73639.js"></script>
</body>
</html>