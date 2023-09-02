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

   	$artistsArgs = array(
	    'post_type' => 'artists',
		'meta_key' => 'sortable_name',
		// 'meta_query' => array(
		// 	'relation' => 'OR',
		// 	'groups' => array(
		// 		'key'     => 'group_name',
		// 		'compare' => 'EXISTS',
		// 	),
		// 	'last_names' => array(
		// 		'key'     => 'last_name',
		// 		'compare' => 'EXISTS',
		// 	),
		// ),
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
	);

	$artistQuery = new WP_Query($artistsArgs);

	$last_letter = ' ';

?>
<div id="artists-background"></div>
<main class="site-content artists artist-listing" id="main-content">
	    <h1 class="hidden">Artists</h1>


	    <section class="artists">
		    <!-- <span class="h5 page-title">ARTISTS</span> -->
		<?php 
		    if($artistQuery->have_posts()): ?>
				<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>

				    <?php if (function_exists('get_field')): ?>
					    <?php 
						
						$first_name			 = get_field('first_name');
						$last_name 			= get_field('last_name');
						$group_name			= get_field('group_name');
						$additional_names 	= get_field('additional_names');
						$project_title		= get_field('project_title');

						$sortable_name = $last_name ? $last_name : $group_name;

						?>
						<div class="artist-container">
							<?php 
							if( ($sortable_name[0] != $last_letter) ):
								echo "<span class='d1 artist-letter'>".$sortable_name[0]."</span>";
							endif;
							$last_letter = $sortable_name[0]; 
							?>
							<div class="artist-copy">
								<span class="artist-title">
									<?php echo $first_name . " " . $sortable_name . " " . $additional_names ?>
								</span>
								<p class="project-title">
									<?php echo $project_title ?>
								</p>
							</div>
							<a class="button secondary" title="view <?php echo $first_name . ' ' . $sortable_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
						</div>
					<?php endif ?>
				<?php endwhile ?>
			<?php endif ?>
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>