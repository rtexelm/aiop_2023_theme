<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-artist
 *
 * @package WordPress
 * @subpackage AiOP_2022
 * @copyright  AiOP, Laurie Waxman
 * @since 1.0.0
 * @version 1.0.0
 */

require 'utils.php';

get_header();
	
?>

<?php
    wp_reset_query();

   	$fridayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'friday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
	);
	$fridayQuery = new WP_Query($fridayArtistArgs);

	$saturdayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'saturday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
	);
	$saturdayQuery = new WP_Query($saturdayArtistArgs);

	$sundayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'sunday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
	);
	$sundayQuery = new WP_Query($sundayArtistArgs);

?>
<div id="schedule-background"></div>
<main class="site-content schedule" id="main-content">
	<h1 class="hidden">ARTISTS</h1>

	    <section class="artists">
			<div class="day" id="friday">
				<h2>Friday</h2>

				<?php if($fridayQuery->have_posts()): ?>
				<?php while($fridayQuery->have_posts()): 
					$fridayQuery->the_post() ?>
				<?php if (function_exists('get_field')): ?>
				<?php 
				$first_name			 = get_field('first_name');
				$last_name 			= get_field('last_name');
				$group_name 		= get_field('group_name');
				$additional_artists = get_field('group_artists');
				$project_title		= get_field('project_title');
				$friday_location 	= get_field('friday_location');
				$f_start 			= get_field('friday_start') ?: '12:00pm';
				$f_end 				= get_field('friday_end') ?: '7:00pm';

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$fri_final = scheduleFormat($f_start, $f_end);

				endif
				?>
				<?php if($friday_location): ?>

				<div class="artist-container">
					<p class="h4 artist-time">
						<?php echo $fri_final ?>	
					</p>
					<div class="project">
						<span class="h3 artist-title"><?php echo $displayName ?></span>
						<p class="artist-title"><?php echo $project_title ?></p>
					</div>
					<p class="location"><?php echo $friday_location ?></p>
					<a class="button secondary" title="view <?php echo $displayName ?>" href="<?php echo the_permalink(); ?>">View project</a>
				</div>
				<?php endif ?>
				
				<?php endwhile ?>
				<?php endif ?>
								
			</div>

			<div class="day" id="saturday">
				<h2>Saturday</h2>
				<?php if($saturdayQuery->have_posts()): ?>
				<?php while($saturdayQuery->have_posts()): 
					$saturdayQuery->the_post() ?>
				<?php if (function_exists('get_field')): ?>

				<?php 
				$first_name			 = get_field('first_name');
				$last_name 			= get_field('last_name');
				$group_name 		= get_field('group_name');
				$additional_artists = get_field('group_artists');
				$project_title		= get_field('project_title');
				$saturday_location 	= get_field('saturday_location');
				$sat_start 			= get_field('saturday_start') ?: '12:00pm';
				$sat_end 			= get_field('saturday_end') ?: '7:00pm';

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$sat_final = scheduleFormat($sat_start, $sat_end);

				endif
				?>

				<?php if($saturday_location): ?>
				<div class="artist-container">
					<p class="h4 artist-time">
						<?php echo $sat_final ?>	
					</p>
					<div class="project">
						<span class="h3 artist-title"><?php echo $displayName ?></span>
						<p class="artist-title"><?php echo $project_title ?></p>
					</div>
					<p class="location"><?php echo $saturday_location ?></p>
					<a class="button secondary" title="view <?php echo $displayName ?>" href="<?php echo the_permalink(); ?>">View project</a>
				</div>
				<?php endif ?>

				<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="day" id="sunday">
				<h2>Sunday</h2>
				<?php if($sundayQuery->have_posts()): ?>
				<?php while($sundayQuery->have_posts()): 
					$sundayQuery->the_post() ?>
				<?php if (function_exists('get_field')): ?>

				<?php 
				$first_name			 = get_field('first_name');
				$last_name 			= get_field('last_name');
				$group_name 		= get_field('group_name');
				$additional_artists = get_field('group_artists');
				$project_title		= get_field('project_title');
				$sunday_location 	= get_field('sunday_location');
				$sun_start			= get_field('sunday_start') ?: '12:00pm';
				$sun_end 			= get_field('sunday_end') ?: '7:00pm';

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$sun_final = scheduleFormat($sun_start, $sun_end);

				endif
				?>

				<?php if($sunday_location): ?>

				<div class="artist-container">
					<p class="h4 artist-time">
						<?php echo $sun_final ?>
					</p>
					<div class="project">
						<span class="h3 artist-title"><?php echo $displayName ?></span>
						<p class="artist-title"><?php echo $project_title ?></p>
					</div>
					<p class="location"><?php echo $sunday_location ?></p>
					<a class="button secondary" title="view <?php echo $displayName ?>" href="<?php echo the_permalink(); ?>">View project</a>
				</div>
				<?php endif ?>
				<?php endwhile ?>
				<?php endif ?>
			</div>		
			
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>