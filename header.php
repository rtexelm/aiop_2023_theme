<?php
/**
 * The Header template
 */
?>
<html>
	<head>
		<title>AiOP 2023 DRESS</title>
		<!-- meta data -->
		<meta charset="UTF-8">
		<meta name="description" content="Art in Odd Places 2023: Dress">
		<meta name="keywords" content="AiOP, Festival, Performance, New York City">
		<meta name="author" content="Laurie Waxman">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- fonts -->
		<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<!-- 		<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;600&family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,300;1,500&display=swap" rel="stylesheet"> -->
		<link rel="stylesheet" href="https://use.typekit.net/iom6knw.css">
		<!-- scripts & styles -->
		<?php wp_head(); ?>
		<!-- scripts -->

	</head>
	<body>
		<nav class="top">
			<a href="#main-content" id="skip-content">Skip to content</a>
			<a title="home" href="<?php echo get_home_url(); ?>" id="home">
				<img src="<?php bloginfo('template_url'); ?>/assets/AiOP_Logo_simple.png" id="aiopLogo" alt="AIOP" aria-hidden="true">
			</a>
			<div class="menuVisible">
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'top-navigation', 
					'container_class' => 'topNav' 
				) );
				?>
			</div>
			<a title="full menu" href="#menuFull" id="menuToggleAnchor">
				<img id="menuToggle" src="<?php bloginfo('template_url'); ?>/assets/menu_toggle.png" alt="view menu" aria-hidden="true">
			</a>
			<div class="menuFull" id="menuFull">
				<section class="left">
					</section>
					<section class="right">
						<a href="<?php echo get_home_url(); ?>" id="home">
							<img src="<?php bloginfo('template_url'); ?>/assets/AiOP_Logo_simple.png" id="aiopLogo" alt="Art in Odd Places">
						</a>
						<p id="toc">Table of Contents</p>
						<?php 
					wp_nav_menu( array( 
						'theme_location' => 'full-navigation', 
						'container_class' => 'fullNav' 
					) );
					wp_nav_menu( array( 
						'theme_location' => 'sub-navigation', 
						'container_class' => 'subNav' 
					) );
					?>
				</section>
			</div>
		</nav>