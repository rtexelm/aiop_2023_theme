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
				<article id="title">
					<h1 id="title-left">Art in</h1>
					<h1 id="title-right">Odd Places</h1>
					<h1 id="title-right">2023</h1>
					<h1 id="title-center">DRESS</h1>
				</article>
				<img src="<?php bloginfo('template_url'); ?>/assets/dress/scroll.png" alt="scroll down" class="page-down">
			</section>
			<div class="bg-wrapper">
				<section id="dates">
					<div class="dates">
						<h2 class="d1">October</h2>
						<h2 class="d1">13&ndash;15<span class="script"> 2023</span>
						</h2>
						<a class="button primary" href="<?php bloginfo('template_url'); ?>/schedule">Schedule</a>
						<a class="button secondary" href="<?php bloginfo('template_url'); ?>/public-programs">Public Programs</a>
					</div>
				</section>
				<section id="about">
					<div class="byline">
						<h2 class="d1">Curated</h2>
						<h2 class="d1">by Gretchen</h2>
						<h2 class="d1">Vitamvas</h2>
					</div>
					<div class="about">
						<p class="p1"><span class="italic">Art in Odd Places 2023: Dress</span> features visual and performance artists on 14th Street from Avenue C to the Hudson River.</p>
						<a class="button primary" href="<?php bloginfo('template_url'); ?>/about">About the festival</a>
					</div>
				</section>
				<!-- <section id="schedule">
					<div id="home-schedule-dates">
						<h2 id="dates">September 23-25</h2>
						<img class="number" src="<?php bloginfo('template_url'); ?>/assets/home-about-2022.png" alt="2022">
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/home-calendar.png" alt="calendar" id="calendar">
				</section> -->
				<!-- <img src="<?php bloginfo('template_url'); ?>/assets/home-buffer.png" alt="" id="home-buffer"> -->
				<section id="artists">
					<div class="artists">
						<h2><span class="script">40</span> Participating </br>artists & groups</h2>
						<a class="button primary" href="<?php bloginfo('template_url'); ?>/artists">Artists</a>
						<a class="button secondary" href="<?php bloginfo('template_url'); ?>/public-programs">Schedule</a>
					</div>
					<!-- <img src="<?php bloginfo('template_url'); ?>/assets/home-index-01.png" alt="index card" class="index-card" id="index-card-02">
					<img src="<?php bloginfo('template_url'); ?>/assets/home-index-02.png" alt="index card" class="index-card" id="index-card-03">
				</section> -->
				<!-- <section id="covid">
					<img src="<?php bloginfo('template_url'); ?>/assets/Blob-Social-Distance.png" alt="Two stylized red figures stand with space apart">	
					<img src="<?php bloginfo('template_url'); ?>/assets/home-covid.png" alt="two hands reach towards each other not touching">
					<div class="text">
						<p class="p2">The festival will follow New York City COVID-19 guidelines.</p>
					</div>
				</section> -->
			</div>
		</main>
		
<?php get_footer(); ?>


