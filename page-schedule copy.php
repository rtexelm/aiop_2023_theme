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

   	// $fridayArtistArgs = array(
	//     'post_type' => 'artists',
	//     'meta_key' => 'friday_start',
	// 	'orderby' => 'meta_value',
	//     'order'	=> 'ASC',
	//     'posts_per_page' => 100
	// );
	// $fridayQuery = new WP_Query($fridayArtistArgs);

	// $saturdayArtistArgs = array(
	//     'post_type' => 'artists',
	//     'meta_key' => 'saturday_start',
	// 	'orderby' => 'meta_value',
	//     'order'	=> 'ASC',
	//     'posts_per_page' => 100
	// );
	// $saturdayQuery = new WP_Query($saturdayArtistArgs);

	// $sundayArtistArgs = array(
	//     'post_type' => 'artists',
	//     'meta_key' => 'sunday_start',
	// 	'orderby' => 'meta_value',
	//     'order'	=> 'ASC',
	//     'posts_per_page' => 100
	// );
	// $sundayQuery = new WP_Query($sundayArtistArgs);

	// $isFriday = get_post_meta( get_the_ID(), 'friday_start', true);
	// $isSaturday = get_post_meta( get_the_ID(), 'saturday_start', true);
	// $isSunday = get_post_meta( get_the_ID(), 'sunday_start', true);

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

						$displayName = artistNameFormat($first_name, $sortable_name, $additional_names);
						$fri_final = scheduleFormat($f_start, $f_end);
						$sat_final = scheduleFormat($sat_start, $sat_end);
						$sun_final = scheduleFormat($sun_start, $sun_end);

						// $f_start = get_field('friday_start') ?: '12:00pm';
						// $f_start_h = explode(":", $f_start)[0];
						// $f_start_temp = explode(":", $f_start)[1] ?? null;
						// $f_start_m = substr($f_start_temp,0,2);
						// $f_start_ap = substr($f_start_temp, -2);

						// $f_end = get_field('friday_end') ?: '7:00pm';
						// $f_end_h = explode(":", $f_end)[0];
						// $f_end_temp = explode(":", $f_end)[1] ?? null;
						// $f_end_m = substr($f_end_temp,0,2);
						// $f_end_ap = substr($f_end_temp, -2);

						// $f_start_final;
						// if($f_start_m == "00"){
						// 	$f_start_final = $f_start_h.$f_start_ap;
						// }else{
						// 	$f_start_final = $f_start_h.':'.$f_start_m.$f_start_ap;
						// }

						// $f_end_final;
						// if($f_end_m == "00"){
						// 	$f_end_final = $f_end_h.$f_end_ap;
						// }else{
						// 	$f_end_final = $f_end_h.':'.$f_end_m.$f_end_ap;
						// }

						?>
					<?php endif ?>


					<div class="day" id="friday">
						<h2>Friday</h2>


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

					</div>

			<div class="day" id="saturday">
				<h2>Saturday</h2>
				<?php if($saturdayQuery->have_posts()): ?>
					<?php while($saturdayQuery->have_posts()): $saturdayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							// $first_name			 = get_field('first_name');
							// $last_name 			= get_field('last_name');
							// $group_name 		= get_field('group_name');
							// $additional_artists = get_field('group_artists');
							// $project_title		= get_field('project_title');
							// $saturday_location 	= get_field('saturday_location');

							// $sortable_name = $last_name ?: $group_name;

							// $sat_start = get_field('saturday_start') ?: '12:00pm';
							// $sat_start_h = explode(":", $sat_start)[0];
							// $sat_start_temp = explode(":", $sat_start)[1] ?? null;
							// $sat_start_m = substr($sat_start_temp,0,2);
							// $sat_start_ap = substr($sat_start_temp, -2);

							// $sat_end = get_field('saturday_end') ?: '7:00pm';
							// $sat_end_h = explode(":", $sat_end)[0];
							// $sat_end_temp = explode(":", $sat_end)[1] ?? null;
							// $sat_end_m = substr($sat_end_temp,0,2);
							// $sat_end_ap = substr($sat_end_temp, -2);

							// $sat_start_final;
							// if($sat_start_m == "00"){
							// 	$sat_start_final = $sat_start_h.$sat_start_ap;
							// }else{
							// 	$sat_start_final = $sat_start_h.':'.$sat_start_m.$sat_start_ap;
							// }

							// $sat_end_final;
							// if($sat_end_m == "00"){
							// 	$sat_end_final = $sat_end_h.$sat_end_ap;
							// }else{
							// 	$sat_end_final = $sat_end_h.':'.$sat_end_m.$sat_end_ap;
							// }
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

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="day" id="sunday">
				<h2>Sunday</h2>
				<?php if($sundayQuery->have_posts()): ?>
					<?php while($sundayQuery->have_posts()): $sundayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							// $first_name			 = get_field('first_name');
							// $last_name 			= get_field('last_name');
							// $group_name 		= get_field('group_name');
							// $additional_artists = get_field('group_artists');
							// $project_title		= get_field('project_title');
							// $sunday_location 	= get_field('sunday_location');

							// $sortable_name = $last_name ?: $group_name;

							// $sun_start = get_field('sunday_start') ?: '12:00pm';
							// $sun_start_h = explode(":", $sun_start)[0];
							// $sun_start_temp = explode(":", $sun_start)[1] ?? null;
							// $sun_start_m = substr($sun_start_temp,0,2);
							// $sun_start_ap = substr($sun_start_temp, -2);


							// $sun_end = get_field('sunday_end') ?: '7:00pm';
							// $sun_end_h = explode(":", $sun_end)[0];
							// $sun_end_temp = explode(":", $sun_end)[1] ?? null;
							// $sun_end_m = substr($sun_end_temp,0,2);
							// $sun_end_ap = substr($sun_end_temp, -2);

							// $sun_start_final;
							// if($sun_start_m == "00"){
							// 	$sun_start_final = $sun_start_h.$sun_start_ap;
							// }else{
							// 	$sun_start_final = $sun_start_h.':'.$sun_start_m.$sun_start_ap;
							// }

							// $sun_end_final;
							// if($sun_end_m == "00"){
							// 	$sun_end_final = $sun_end_h.$sun_end_ap;
							// }else{
							// 	$sun_end_final = $sun_end_h.':'.$sun_end_m.$sat_end_ap;
							// }
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

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>
			
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>