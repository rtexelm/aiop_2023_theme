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

get_header();
	
?>

<?php
    wp_reset_query();

   	$fridayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'friday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);
	$fridayQuery = new WP_Query($fridayArtistArgs);

	$saturdayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'saturday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);
	$saturdayQuery = new WP_Query($saturdayArtistArgs);

	$sundayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'sunday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
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
					<?php while($fridayQuery->have_posts()): $fridayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							$first_name			 = get_field('first_name');
							$last_name 			= get_field('last_name');
							$group_names 		= get_field('group_names');
							$project_title		= get_field('project_title');
							$friday_location 	= get_field('friday_location');

							$f_start = get_field('friday_start');
							$f_start_h = explode(":", $f_start)[0];
							$f_start_temp = explode(":", $f_start)[1] ?? null;
							$f_start_m = substr($f_start_temp,0,2);
							$f_start_ap = substr($f_start_temp, -2);

							$f_end = get_field('friday_end');
							$f_end_h = explode(":", $f_end)[0];
							$f_end_temp = explode(":", $f_end)[1] ?? null;
							$f_end_m = substr($f_end_temp,0,2);
							$f_end_ap = substr($f_end_temp, -2);

							$f_start_final;
							if($f_start_m == "00"){
								$f_start_final = $f_start_h.$f_start_ap;
							}else{
								$f_start_final = $f_start_h.':'.$f_start_m.$f_start_ap;
							}

							$f_end_final;
							if($f_end_m == "00"){
								$f_end_final = $f_end_h.$f_end_ap;
							}else{
								$f_end_final = $f_end_h.':'.$f_end_m.$f_end_ap;
							}

							?>

							<?php if($f_start): ?>
								<div class="artist-container">
									<p class="h4 artist-time">
										<?php echo $f_start_final."&ndash;".$f_end_final ?>	
									</p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $group_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $friday_location ?></p>
									<a class="button secondary" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $group_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
								</div>
							<?php endif ?>

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="day" id="saturday">
				<h2>Saturday</h2>
				<?php if($saturdayQuery->have_posts()): ?>
					<?php while($saturdayQuery->have_posts()): $saturdayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							$first_name			 = get_field('first_name');
							$last_name 			= get_field('last_name');
							$group_names 		= get_field('group_names');
							$project_title		= get_field('project_title');
							$saturday_location 	= get_field('saturday_location');

							$sat_start = get_field('saturday_start');
							$sat_start_h = explode(":", $sat_start)[0];
							$sat_start_temp = explode(":", $sat_start)[1] ?? null;
							$sat_start_m = substr($sat_start_temp,0,2);
							$sat_start_ap = substr($sat_start_temp, -2);

							$sat_end = get_field('saturday_end');
							$sat_end_h = explode(":", $sat_end)[0];
							$sat_end_temp = explode(":", $sat_end)[1] ?? null;
							$sat_end_m = substr($sat_end_temp,0,2);
							$sat_end_ap = substr($sat_end_temp, -2);

							$sat_start_final;
							if($sat_start_m == "00"){
								$sat_start_final = $sat_start_h.$sat_start_ap;
							}else{
								$sat_start_final = $sat_start_h.':'.$sat_start_m.$sat_start_ap;
							}

							$sat_end_final;
							if($sat_end_m == "00"){
								$sat_end_final = $sat_end_h.$sat_end_ap;
							}else{
								$sat_end_final = $sat_end_h.':'.$sat_end_m.$sat_end_ap;
							}
							?>

							<?php if($sat_start): ?>
								<div class="artist-container">
									<p class="h4 artist-time">
										<?php echo $sat_start_final."&ndash;".$sat_end_final ?>	
									</p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $group_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $saturday_location ?></p>
									<a class="button secondary" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $group_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
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
							$first_name			= get_field('first_name');
							$last_name 			= get_field('last_name');
							$additional_names 	= get_field('additional_names');
							$project_title		= get_field('project_title');
							$sunday_location 	= get_field('sunday_location');

							$sun_start = get_field('sunday_start');
							$sun_start_h = explode(":", $sun_start)[0];
							$sun_start_temp = explode(":", $sun_start)[1] ?? null;
							$sun_start_m = substr($sun_start_temp,0,2);
							$sun_start_ap = substr($sun_start_temp, -2);

							$sun_end = get_field('sunday_end');
							$sun_end_h = explode(":", $sun_end)[0];
							$sun_end_temp = explode(":", $sun_end)[1] ?? null;
							$sun_end_m = substr($sun_end_temp,0,2);
							$sun_end_ap = substr($sun_end_temp, -2);

							$sun_start_final;
							if($sun_start_m == "00"){
								$sun_start_final = $sun_start_h.$sun_start_ap;
							}else{
								$sun_start_final = $sun_start_h.':'.$sun_start_m.$sun_start_ap;
							}

							$sun_end_final;
							if($sun_end_m == "00"){
								$sun_end_final = $sun_end_h.$sun_end_ap;
							}else{
								$sun_end_final = $sun_end_h.':'.$sun_end_m.$sat_end_ap;
							}
							?>

							<?php if($sun_start): ?>
								<div class="artist-container">
									<p class="h4 artist-time">
										<?php echo $sun_start_final."&ndash;".$sun_end_final ?>	
									</p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $sunday_location ?></p>
									<a class="button secondary" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
								</div>
							<?php endif ?>

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>
			
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>