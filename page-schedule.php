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

	$artistArgs = array(
		'post_type' => 'artists',
		'meta_query' => array(
			'relation' => 'OR',
			'friday' => array(
				'key' => 'friday_start',
				'compare' => 'EXISTS'
			),
			'saturday' => array( 
				'key' => 'saturday_start',
				'compare' => 'EXISTS',
			),
			'sunday' => array( 
				'key' => 'sunday_start',
				'compare' => 'EXISTS',
			),
		),
		'orderby' => 'friday saturday sunday',
		'order' => 'ASC',
		'posts_per_page' => -1,
	);

	$artistQuery = new WP_Query($artistArgs);

?>
<div id="schedule-background"></div>
<main class="site-content schedule" id="main-content">
	<h1 class="hidden">ARTISTS</h1>

	    <section class="artists">

			<?php if($artistQuery->have_posts()): ?>
				<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>
					<?php if (function_exists('get_field')): ?>

						<?php 
						$first_name			 = get_field('first_name');
						$last_name 			= get_field('last_name');
						$group_name 		= get_field('group_name');
						$additional_artists = get_field('group_artists');
						$project_title		= get_field('project_title');
						$friday_location 	= get_field('friday_location');
						$saturday_location 	= get_field('saturday_location');
						$sunday_location 	= get_field('sunday_location');
						$f_start 			= get_field('friday_start') ?: '12:00pm';
						$f_end 				= get_field('friday_end') ?: '7:00pm';
						$sat_start 			= get_field('saturday_start') ?: '12:00pm';
						$sat_end 			= get_field('saturday_end') ?: '7:00pm';
						$sun_start			= get_field('sunday_start') ?: '12:00pm';
						$sun_end 			= get_field('sunday_end') ?: '7:00pm';

						$sortable_name = $last_name ?: $group_name;

						$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);
						$fri_final = scheduleFormat($f_start, $f_end);
						$sat_final = scheduleFormat($sat_start, $sat_end);
						$sun_final = scheduleFormat($sun_start, $sun_end);

						endif
						?>


					<div class="day" id="friday">
						<h2>Friday</h2>

						<?php 
						$fridayArtistArgs = array(
						    'post_type' => 'artists',
						    'meta_key' => 'friday_start',
							'orderby' => 'meta_value',
						    'order'	=> 'ASC',
						    'posts_per_page' => 100
						);
						$fridayQuery = new WP_Query($fridayArtistArgs);
						?>

						<?php
						while($fridayQuery->have_posts()):
							$fridayQuery->the_post();
							if($friday_location): 
						?>
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
						<?php 
							endif;
						endwhile ?>

					</div>

					<div class="day" id="saturday">
						<h2>Saturday</h2>

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

					</div>

					<div class="day" id="sunday">
						<h2>Sunday</h2>

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
					</div>		
				<?php endwhile ?>
			<?php endif ?>
			
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>