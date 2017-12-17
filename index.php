<?php 
    // set the page title
    $page_title = 'Home';
    include( 'includes/html-top.inc.php' );
    // create array for error messsages
		$errors = array();
	?>

<div id="loader">
	
</div>

<div class="container">
	<!--  M A I N -->
	<main>
		<!-- Nav bar -->
		<?php include ( 'includes/nav.inc.php' ); ?>

		<!-- Top Section -->
		<section id="intro">
			<div id="logo-container">
				<img id="home-logo" src="images/logo-small.png" alt="Stephanie Tran's logo"/>
			</div>
				<span id="hello-header" data-shadow="Hello!">Hello!</span>
		</section>

		<!-- About Section -->
		<section id="about">
			<div id="clouds">
				<img src="images/clouds-mobile.png" alt="Clouds from Super Mario"></div>
				<div id="about-text">
					<div id="profile-img-container"><img class="img-circle flip" src="images/stephtran.jpg" alt="A photo of my face."></div>
					<div id="about-details-container">
					<div id="about-details">
							<h1>I'm Stephanie.</h1><br/>
							<span id="city"><em>Toronto, ON</em></span>
							<ul>
									<li>
										I enjoy building things* 
											<span role="img" aria-label="Computer">
												<i class="em em-computer"></i>
											</span>
									</li> 
									<li>
										* Accessible things 
											<span role="img" aria-label="Globe">
											<i class="em em-globe_with_meridians"></i>
											</span>
								</li>
								<li>
										* Inclusive things
											<span role="img" aria-label="Open hands">
												<i class="em em-open_hands"></i>
											</span>
								</li>
								<li>
										* Things with not just good intentions <span role="img" aria-label="Two hearts"><i class="em em-two_hearts"></i></span> but with carefully and critically thought-out outcomes 
											<span role="img" aria-label="Magnifying glass">
												<i class="em em-mag"></i>
											</span>
								</li>
							</ul>
						</div>

					</div>
						
				</div>
		</section>

<?php include( 'portfolio-section.php' ); ?>
		
		<!-- Connect -->
		
		<section id="connect">
				<h3>Connect</h3>
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

		<?php include( 'includes/html-bottom.inc.php' ); ?>