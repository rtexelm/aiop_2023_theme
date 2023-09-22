<?php
/**
 *
 * Template Post Type: artist, artists
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
	$thisId = $post->ID; 
	$args = array(
		'p'	=> $thisId,
	    'post_type' => 'artists',
	    'posts_per_page' => 1
	);
	$artistQuery = new WP_Query($args);

	$all_posts = new WP_Query(array(
	    'post_type' => 'artists',
		'meta_key' => 'sortable_name',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
    ));

    foreach($all_posts->posts as $key => $value) {
        if($value->ID == $post->ID){

			$nextID = $all_posts->posts[$key + 1]->ID ?? null;
			$prevID = $all_posts->posts[$key - 1]->ID ?? null; 
        }
    }
?>

<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>
<?php if (function_exists('get_field')): ?>
<?php 
			global $thisID;

			$is_group				= get_field('is_group', $thisID);
			$first_name				 = get_field('first_name', $thisID);
			$last_name 				= get_field('last_name', $thisID);
			$group_name 			= get_field('group_name', $thisID);
			$additional_names 		= get_field('group_artists', $thisID);
			$artist_1_bio			= get_field('artist_bio', $thisID);
			$artist_1_link			= get_field('artist_weblink', $thisID);
			$artist_2_bio			= get_field('artist_2_bio', $thisID);
			$artist_2_link			= get_field('artist_2_weblink', $thisID);
			$artist_3_bio			= get_field('artist_3_bio', $thisID);
			$artist_3_link			= get_field('artist_3_weblink', $thisID);
			$project_title			= get_field('project_title', $thisID);
			$project_description	= get_field('project_description', $thisID);
			$project_schedule		= get_field('project_schedule', $thisID);
			$project_location		= get_field('project_location', $thisID);
			$project_image			= get_field('project_image', $thisID);
			$project_link			= get_field('project_website', $thisID);
			$friday_start			= get_field('friday_start', $thisID);
			$friday_end				= get_field('friday_end', $thisID);
			$friday_location		= get_field('friday_location', $thisID);
			$saturday_start			= get_field('saturday_start', $thisID);
			$saturday_end			= get_field('saturday_end', $thisID);
			$saturday_location		= get_field('saturday_location', $thisID);
			$sunday_start			= get_field('sunday_start', $thisID);
			$sunday_end				= get_field('sunday_end', $thisID);
			$sunday_location		= get_field('sunday_location', $thisID);

			$sortable_name = $last_name ?: $group_name;
			$displayName = artistNameFormat($first_name, $sortable_name, $additional_names);

            $fri_final = scheduleFormat($friday_start, $friday_end);
            $sat_final = scheduleFormat($saturday_start, $saturday_end);
            $sun_final = scheduleFormat($sunday_start, $sunday_end);

		    ?>

<main class="artist-single">

    <h1 class="hidden"><?php echo $displayName ?></h1>

    <section class="project-img">

        <img src="<?php echo esc_url($project_image['url']); ?>" class="feature-img"
            alt="\<?php echo esc_attr($project_image['alt']); ?>" />

        <h2 class="project-title"><?php echo $project_title ?>
            <div class="overlay-gradient"></div>
        </h2>

    </section>

    <div class="project-info-grid">

        <h3 class="project-artists"><?php echo $displayName ?></h3>

        <section class="left info-area">

            <h2 class="h1 project-title"><?php echo $project_title ?></h2>

            <h3 class="h2 project-artists"><?php echo $displayName ?></h3>

            <?php if ($friday_location): ?>
            <div class="location">
                <h4>Friday</h4>
                <p class="p1"><?php echo $fri_final ?></p>
                <p class="p1"><?php echo $friday_location ?></p>
            </div>
            <?php endif ?>

            <?php if ($saturday_location): ?>
            <div class="location">
                <h4>Saturday</h4>
                <p class="p1"><?php echo $sat_final ?></p>
                <p class="p1"><?php echo $saturday_location ?></p>
            </div>
            <?php endif ?>

            <?php if ($sunday_location): ?>
            <div class="location">
                <h4>Sunday</h4>
                <p class="p1"><?php echo $sun_final ?></p>
                <p class="p1"><?php echo $sunday_location ?></p>
            </div>
            <?php endif ?>

        </section>

        <section class="right info-area">

            <div class="project">

                <?php echo "<p class='p1'>" . $project_description . "</p>"?>
                <?php 
				if($project_link){
					echo "<a class='button transparent' target='blank' href='" . esc_url($project_link['url']) . "'>" . esc_attr( $project_link['title'] ) . "</a>";
				}
				?>

            </div>

            <section class="bios p2">
                <?php 
								
					if($artist_1_bio){
						echo "<p class='bio'>" . $artist_1_bio . "</p>";
					}
					if($artist_1_link){
						echo "<a target='blank' class='button transparent' href='" . esc_url($artist_1_link['url']) . "'>" . esc_attr( $artist_1_link['title'] ) . "</a>";
					}
					if($artist_2_bio){
						echo "<p class='bio'>" . $artist_2_bio . "</p>";
					}
					if($artist_2_link){
						echo "<a target='blank' class='button transparent' href='" . esc_url($artist_2_link['url']) . "'>" . esc_attr( $artist_2_link['title'] ) . "</a>";
					}
					if($artist_3_bio){
						echo "<p class='bio'>" . $artist_3_bio . "</p>";
					}
					if($artist_3_link){
						echo "<a target='blank' class='button transparent' href='" . esc_url($artist_3_link['url']) . "'>" . esc_attr( $artist_3_link['title'] ) . "</a>";
					}
								
				?>
            </section>
        </section>
    </div>

</main>

<nav class="artist-nav">
    <div class="arrow prev">
        <?php if($prevID): ?>
        <a href="<?= get_the_permalink($prevID) ?>" rel="prev">
            <svg id="prev-artist" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.19 87.19" width="87.19"
                height="87.19">
                <defs>
                    <style>
                    .cls-prev-1 {
                        stroke: #dadb0d;
                        stroke-miterlimit: 10;
                    }

                    .cls-prev-1 {
                        fill: none;
                        stroke-linecap: round;
                        stroke-width: 2px;
                    }
                    </style>
                </defs>
                <g id="prev-page-arrow">
                    <line class="cls-prev-1" x1="48.3" y1="58.78" x2="19.68" y2="58.78" />
                    <polyline class="cls-prev-1" points="26.2 52.26 19.68 58.78 26.23 65.33" />
                </g>
            </svg>
        </a>
        <?php endif; ?>
    </div>
    <div class="arrow next">
        <?php if($nextID): ?>
        <a href="<?= get_the_permalink($nextID) ?>" rel="next">
            <svg id="next-artist" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 87.19 87.19" width="87.19" height="87.19">
                <defs>
                    <style>
                    .cls-next-3 {
                        stroke: #dadb0d;
                        stroke-miterlimit: 10;
                    }

                    .cls-next-3 {
                        fill: none;
                        stroke-linecap: round;
                        stroke-miterlimit: 10;
                        stroke-width: 2px;
                    }
                    </style>
                </defs>
                <g id="next-page-arrow">
                    <line class="cls-next-3" x1="38.89" y1="58.78" x2="67.51" y2="58.78" />
                    <polyline class="cls-next-3" points="60.99 52.26 67.51 58.78 60.96 65.33" />
                </g>
            </svg>
        </a>
        <?php endif; ?>
    </div>

</nav>

<?php endif ?>
<?php endwhile ?>


<?php get_footer(); ?>