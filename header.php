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
    <meta name="author" content="Laurie Waxman & Ross Mabbett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/hoe1avd.css">
    <!-- scripts & styles -->
    <?php wp_head(); ?>
    <!-- scripts -->

</head>

<body>
    <nav class="top">
        <a href="#main-content" id="skip-content">Skip to content</a>
        <section class="nav-bar-flex" id="navScroll">
            <a title="home" href="<?php echo get_home_url(); ?>" id="home">
                <img src="<?php bloginfo('template_url'); ?>/assets/AiOP_Logo_simple.png" id="aiopLogo" alt="AIOP"
                    aria-hidden="true">
            </a>
            <div class="flex-container just-flex-end align-items-center">
                <div class="menuVisible">
                    <?php 
						wp_nav_menu( array( 
                            'theme_location' => 'top-navigation', 
							'container_class' => 'topNav' 
                            ) );
                            ?>
                </div>
                <a title="full menu" href="#menuFull" id="menuToggleAnchor">
                    <img id="menuToggle" src="<?php bloginfo('template_url'); ?>/assets/dress/hamburger24.svg"
                        alt="view menu" aria-hidden="true">
                </a>
            </div>
        </section>
        <div class="menuFull" id="menuFull">

            <img src="<?php bloginfo('template_url'); ?>/assets/dress/textures/stitches-yellow-vert1440w.png" alt=""
                class="vert-stitch" />
            <?php 
					wp_nav_menu( array( 
						'theme_location' => 'full-navigation', 
						'container_class' => 'fullNav' 
					) );
					// wp_nav_menu( array( 
					// 'theme_location' => 'sub-navigation', 
					// 'container_class' => 'subNav' 
					// ) );
					?>
        </div>
    </nav>