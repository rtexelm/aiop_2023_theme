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
				<figure id="title">
					<h1 class="title-left">Art in</h1>
					<h1 class="title-right">Odd Places</h1>
					<h1 class="title-right">2023</h1>
					<h1 class="title-center">DRESS</h1>
				</figure>
				<a href="#about" class="page-down">
					Next
				</a>
			</section>
			<section id="about">
				<div class="about">
					<p class="p1">Curated by Gretchen Vitamas, <span class="italic">Art in Odd Places 2023: Dress</span> features visual and performance artists on 14th Street from Avenue C to the Hudson River.</p>
					<a class="button primary" href="<?php bloginfo('template_url'); ?>/about">Read more</a>
				</div>
			</section>
			<section id="schedule">
				<div id="home-schedule-dates">
					<h2 id="dates">September 23-25</h2>
					<img class="number" src="<?php bloginfo('template_url'); ?>/assets/home-about-2022.png" alt="2022">
				</div>
				<img src="<?php bloginfo('template_url'); ?>/assets/home-calendar.png" alt="calendar" id="calendar">
			</section>
			<img src="<?php bloginfo('template_url'); ?>/assets/home-buffer.png" alt="" id="home-buffer">
			<section id="artists">
				<img src="<?php bloginfo('template_url'); ?>/assets/home-index-03.png" alt="index card" class="index-card" id="index-card-01">
				<div class="artists">
					<img class="number" src="<?php bloginfo('template_url'); ?>/assets/home_about_40.png" alt="40" >
					<h2>Participating </br>artists & groups</h2>
					<a class="button primary" href="<?php bloginfo('template_url'); ?>/artists">Explore projects</a>
					<a class="button secondary" href="<?php bloginfo('template_url'); ?>/public-programs">Public Programming</a>
				</div>
				<img src="<?php bloginfo('template_url'); ?>/assets/home-index-01.png" alt="index card" class="index-card" id="index-card-02">
				<img src="<?php bloginfo('template_url'); ?>/assets/home-index-02.png" alt="index card" class="index-card" id="index-card-03">
			</section>
			<section id="covid">
				<!-- <img src="<?php bloginfo('template_url'); ?>/assets/Blob-Social-Distance.png" alt="Two stylized red figures stand with space apart"> -->	
				<img src="<?php bloginfo('template_url'); ?>/assets/home-covid.png" alt="two hands reach towards each other not touching">
				<div class="text">
					<p class="p2">The festival will follow New York City COVID-19 guidelines.</p>
				</div>
			</section>
		</main>
		
<?php get_footer(); ?>


