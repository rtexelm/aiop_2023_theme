<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 *
 * @package WordPress
 * @subpackage AiOP_2022
 * @copyright  AiOP, Laurie Waxman
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

?>

		<main class="home" id="main-content">
			<section class="header">
				<div class="positioner">
				<img id="pattern-r-top" src="<?php bloginfo('template_url'); ?>/assets/dress/pattern-02-top-m.png" alt="">
				</div>
				<article id="title">
					<h1 class="flex-container flex-col-nw">
						<span class="flex-col-left">Art in</span>
						<span class="flex-col-right">Odd Places</span>
						<span class="flex-col-right">2023</span>
						<span class="flex-col-center">DRESS</span>
					</h1>
				</article>
				<div class="positioner">
				<img id="pattern-l-top" src="<?php bloginfo('template_url'); ?>/assets/dress/pattern-01-top-m.png" alt="">
				</div>
				<img src="<?php bloginfo('template_url'); ?>/assets/dress/scroll.png" alt="scroll down" class="page-down">
			</section>
			<div class="bg-wrapper">
				<section id="dates">
					<div class="flex-container flex-col-nw">

						<h2 class="flex-container date-text">
							<span class="flex-col-center">October</span>
							<span class="flex-col-left">13&ndash;15<span class="script"> 2023</span></span>
						</h2>
						
						<a class="button neon-yellow" href="<?php bloginfo('template_url'); ?>/schedule">Schedule</a>
						<a class="button lavender" href="<?php bloginfo('template_url'); ?>/public-programs">Public Programs</a>
					</div>
				</section>
				<div class="positioner">
					<img id="pattern-r-mid" src="<?php bloginfo('template_url'); ?>/assets/dress/pattern-03-top-m.png" alt="">
				</div>
				<div class="positioner">
					<img id="pattern-l-mid" src="<?php bloginfo('template_url'); ?>/assets/dress/pattern-04-curve-m.png" alt="">
				</div>
				<section id="about">
					<h2 class="flex-container flex-col-nw byline">
						<span class="flex-col-left">Curated</span>
						<span class="flex-col-right">by Gretchen</span>
						<span class="flex-col-center">Vitamvas</span>
					</h2>
					<div class="about">
						<p class="p1"><span class="italic">Art in Odd Places 2023: Dress</span> features visual and performance artists on 14th Street from Avenue C to the Hudson River.</p>
						<a class="button neon-yellow orange" href="<?php bloginfo('template_url'); ?>/about">About the festival</a>
					</div>
				</section>
				<section id="artists">
					<div class="artists">
						<h2 class="flex-container flex-col-nw move-right">
							<span class="script flex-col-center" >40</span>
							<span class="flex-col-right">Participating</span>
							<span class="flex-col-left"> Artists &</span>
							<span class="flex-col-center">Groups</span>
						</h2>
						<a class="button neon-yellow" href="<?php bloginfo('template_url'); ?>/artists">Artists</a>
						<a class="button lavender" href="<?php bloginfo('template_url'); ?>/public-programs">Schedule</a>
					</div>
			</div>
		</main>
		
<?php get_footer(); ?>


