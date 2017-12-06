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
			<div id="clouds">
				<img src="images/clouds-mobile.png" alt="Clouds from Super Mario"></div>
				<div id="about-text">
					<img class="img-circle flip" src="images/stephtran.jpg">
					<div id="about-details">
						<h3>I'm Stephanie.</h3><br/>
						<p><b>Toronto, ON</b></p><br/>
						<ul>
							<li>I enjoy building things.</li>
						</ul>
					</div>
				</div>
		</section>

<?php include( 'portfolio-section.php' ); ?>
		
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
						<a href="https://github.com/transteph" alt="Stephanie Tran's GitHub">
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
	<script>
	$(window).load(function(){
        $('main').transition({ x: '0px', delay:800 }, 2000, 'snap');
        $('#loader').setTimeout(() => {
           hide(); 
        }, 3000);
    });</script>
</body>
</html>