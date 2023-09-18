<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-artist
 *
 * @package WordPress
 * @subpackage AiOP_2023
 * @copyright  AiOP, Laurie Waxman, Ross Mabbett
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
<main class="schedule">
    <h1 class="hidden">ARTISTS</h1>

    <section class="artists">

        <!-- Friday -->

        <div class="day" id="friday">

            <article class="day-header">
                <h2 class="h1">Friday</h2>
                <h3 class="f-weight-700 geo-area">[Section], 14th St</h3>
            </article>

            <article class="public-program">
                <h3 class="f-weight-700 pp-head">Public Programming</h3>
                <div class="pp-container">
                    <h4 class="pp-time">
                        6-7:30pm
                    </h4>
                    <div class="pp-title">
                        <h3>Walk & Talk</h3>
                        <h4>BGSQD Bookstore</h4>
                    </div>
                    <a class="button neon-yellow" title="Walk & Talk" href=#>RSVP</a>
                </div>
            </article>

            <h3 class="f-weight-700 fest-header">Festival</h3>

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
				$f_start 			= get_field('friday_start');
				$f_end 				= get_field('friday_end');

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$fri_final = scheduleFormat($f_start, $f_end);

				endif
				?>
            <?php if($friday_location): ?>

            <div class="artist-container">
                <h4 class="artist-time">
                    <?php echo $fri_final ?>
                </h4>
                <div class="project">
                    <h3 class="artist-title"><?php echo  $project_title ?></h3>
                    <h4 class="artist-title"><?php echo $displayName ?></h4>
                </div>
                <p class="location"><?php echo $friday_location ?></p>
                <a class="button pink" title="view <?php echo $displayName ?>"
                    href="<?php echo the_permalink(); ?>">View project</a>
            </div>
            <?php endif ?>

            <?php endwhile ?>
            <?php endif ?>

        </div>

        <!-- Saturday -->

        <div class="day" id="saturday">

            <article class="day-header">
                <h2 class="h1">Saturday</h2>
                <h3 class="f-weight-700 geo-area">[Section], 14th St</h3>
            </article>

            <article class="public-program">
                <h3 class="f-weight-700">Public Programming</h3>
                <div class="pp-container">
                    <h4 class="pp-time">
                        7-10pm
                    </h4>
                    <div class="pp-title">
                        <h3>Paper Dress Ball</h3>
                        <h4>BGSQD Bookstore</h4>
                    </div>
                    <a class="button neon-yellow" title="Paper Dress Ball" href=#>Tickets</a>
                </div>
            </article>

            <h3 class="f-weight-700 fest-header">Festival</h3>

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
				$sat_start 			= get_field('saturday_start');
				$sat_end 			= get_field('saturday_end');

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$sat_final = scheduleFormat($sat_start, $sat_end);

				endif
				?>

            <?php if($saturday_location): ?>
            <div class="artist-container">
                <h4 class="artist-time">
                    <?php echo $sat_final ?>
                </h4>
                <div class="project">
                    <h3 class="artist-title"><?php echo  $project_title ?></h3>
                    <h4 class="artist-title"><?php echo $displayName ?></h4>
                </div>
                <p class="location"><?php echo $saturday_location ?></p>
                <a class="button pink" title="view <?php echo $displayName ?>"
                    href="<?php echo the_permalink(); ?>">View project</a>
            </div>
            <?php endif ?>

            <?php endwhile ?>
            <?php endif ?>
        </div>

        <!-- Sunday -->

        <div class="day" id="sunday">

            <article class="day-header">
                <h2 class="h1">Sunday</h2>
                <h3 class="f-weight-700 geo-area">[Section], 14th St</h3>
            </article>

            <article class="public-program">
                <h3 class="f-weight-700">Public Programming</h3>
                <div class="pp-container">
                    <h4 class="pp-time">
                        1-2pm
                    </h4>
                    <div class="pp-title">
                        <h3>Runway</h3>
                        <h4>14th Street</h4>
                    </div>
                    <a class="button neon-yellow" title="Runway" href=#>RSVP</a>
                </div>
            </article>

            <h3 class="f-weight-700 fest-header">Festival</h3>

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
				$sun_start			= get_field('sunday_start');
				$sun_end 			= get_field('sunday_end');

				$sortable_name = $last_name ?: $group_name;

				$displayName = artistNameFormat($first_name, $sortable_name, $additional_artists);

				$sun_final = scheduleFormat($sun_start, $sun_end);

				endif
				?>

            <?php if($sunday_location): ?>

            <div class="artist-container">
                <h4 class="artist-time">
                    <?php echo $sun_final ?>
                </h4>
                <div class="project">
                    <h3 class="artist-title"><?php echo  $project_title ?></h3>
                    <h4 class="artist-title"><?php echo $displayName ?></h4>
                </div>
                <p class="location"><?php echo $sunday_location ?></p>
                <a class="button pink" title="view <?php echo $displayName ?>"
                    href="<?php echo the_permalink(); ?>">View project</a>
            </div>
            <?php endif ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>

    </section>
</main><!-- #primary -->

<?php get_footer(); ?>