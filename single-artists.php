<?php
/**
 *
 * Template Post Type: artist, artists
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
	$thisId = $post->ID; 
	$args = array(
		'p'	=> $thisId,
	    'post_type' => 'artists',
	    'posts_per_page' => 1
	);
	$artistQuery = new WP_Query($args);

	$all_posts = new WP_Query(array(
	    'post_type' => 'artists',
		'meta_query' => array(
			'relation' => 'OR',
			'groups' => array(
				'key'     => 'group_name',
				'compare' => 'EXISTS',
			),
			'last_names' => array(
				'key'     => 'last_name',
				'compare' => 'EXISTS',
			),
		),
		'orderby' => 'meta_query',
	    'order'	=> 'ASC',
	    'posts_per_page' => -1
    ));

    foreach($all_posts->posts as $key => $value) {
        if($value->ID == $post->ID){
			
            $nextID = $all_posts->posts[$key + 1]->ID;
            $prevID = $all_posts->posts[$key - 1]->ID;
            break;
        }
    }
?>

<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>
    <?php if (function_exists('get_field')): ?>
		    <?php 
			
			$is_group				= get_field('is_group', $thisID);
			$first_name				 = get_field('first_name', $thisID);
			$last_name 				= get_field('last_name', $thisID);
			$group_name 			= get_field('group_name', $thisID);
			$group_artists 			= get_field('group_artists', $thisID);
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
			// $digital_true			= get_field('digital_true', $thisID);
			/* 
			if ($digital_true) {
				$digital_link		= get_field('digital_link', $thisID);
				$digital_gallery	= get_field('digital_gallery', $thisID);
				$digital_image_01	= get_field('digital_artist_image_01', $thisID);
				$digital_image_02	= get_field('digital_artist_image_02', $thisID);
				$digital_image_03	= get_field('digital_artist_image_03', $thisID);
				$digital_image_04	= get_field('digital_artist_image_04', $thisID);
				$digital_image_05	= get_field('digital_artist_image_05', $thisID);
			}
			*/

			if(str_contains($project_schedule,"(CM)")){
				// $critical_mass = "/assets/critical-mass.png";
				$critical_mass = get_template_directory_uri()."/assets/critical-mass.png";
				// echo "<h1>".$critical_mass."</h1>";
				$project_schedule = str_replace('(CM)', '<img src="'.$critical_mass.'" alt="Critical Mass">', $project_schedule);
			}


		    ?> 
		    <main class="artist-single">	
				<div class="artist-textures">
					<div id="left-page"></div><div id="right-page"></div>
				</div>
			    <h1 class="hidden"><?php echo $first_name . " " . $last_name . " " . $group_artists ?></h1>
			   
			    <section class="left">
			    	<!-- <p class="chapter">No. 12</p> -->
					<h2 class="h1 project-artists"><?php echo $first_name . " " . $last_name . " " . $group_artists ?></h2>
					<h3 class="h2 project-title"><?php echo $project_title ?></h3>
					<div class="date">
				    	<h5>DATE & TIME</h5>
						<p class="p1"><?php echo $friday_start ?></p>
					</div>
					<div class="location">
						<h5>LOCATION</h5>
						<p class="p1"><?php echo $friday_location ?></p>
					</div>
				</section>
				<section class="right">
					<img src="<?php echo esc_url($project_image['url']); ?>" class="feature-img" alt="\<?php echo esc_attr($project_image['alt']); ?>" />
					<div class="project p1">
						<?php echo $project_description ?>
						<?php 
							if($project_link){
								echo "<a class='button primary' target='blank' href='" . esc_url($project_link['url']) . "'>" . esc_attr( $project_link['title'] ) . "</a>";
							}
						?>
					</div>
					<section class="bios">
						<?php 
							
							if($artist_1_bio){
								echo "<p>" . $artist_1_bio . "</p>";
							}
							if($artist_1_link){
								echo "<a target='blank' class='test' href='" . esc_url($artist_1_link['url']) . "'>" . esc_attr( $artist_1_link['title'] ) . "</a>";
							}
							if($artist_2_bio){
								echo "<p>" . $artist_2_bio . "</p>";
							}
							if($artist_2_link){
								echo "<a target='blank' class='test' href='" . esc_url($artist_2_link['url']) . "'>" . esc_attr( $artist_2_link['title'] ) . "</a>";
							}
							if($artist_3_bio){
								echo "<p>" . $artist_3_bio . "</p>";
							}
							if($artist_3_link){
								echo "<a target='blank' class='test' href='" . esc_url($artist_3_link['url']) . "'>" . esc_attr( $artist_3_link['title'] ) . "</a>";
							}
						?>
					</section>
			    </section>
		    </main>
		    <nav class="artist-nav">
			    <div class="arrow prev">
			    	<?php if($prevID): ?>
		    	        <a href="<?= get_the_permalink($prevID) ?>" rel="prev">
		    	        	<svg id="prev-artist" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.19 87.19">
								<defs>
									<style>
										.cls-prev-1{
											stroke:#285561;
											stroke-miterlimit:10;
										}
										.cls-prev-1,.cls-prev-2{
											fill:none;
											stroke-linecap:round;
											stroke-width:2px;
										}
										.cls-prev-2{
											stroke:#285562;
										}
									</style>
								</defs>
								<g id="prev-page-arrow">
									<line class="cls-prev-1" x1="48.3" y1="58.78" x2="19.68" y2="58.78"/>
									<polyline class="cls-prev-1" points="26.2 52.26 19.68 58.78 26.23 65.33"/>
								</g>
							</svg>
		    	        </a>
			    	<?php endif; ?>
			    </div>
	    		<div class="arrow next">
			    	<?php if($nextID): ?>
					    <a href="<?= get_the_permalink($nextID) ?>" rel="next">
					    	<svg id="next-artist" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 87.19 87.19">
					    		<defs>
					    			<style>
					    			.cls-next-1{
					    				fill:url(#linear-gradient);
					    			}
						    		.cls-next-2{
						    			fill:#d5c5bd;
						    		}
							    	.cls-next-3{
							    		stroke:#285561;
							    		stroke-miterlimit:10;
							    	}
							    	.cls-next-3,.cls-next-4{
							    		fill:none;
							    		stroke-linecap:round;
							    		stroke-miterlimit:10;
							    		stroke-width:2px;
							    	}
									.cls-next-4{
										stroke:#285562;									
									}
								</style>
									<linearGradient id="linear-gradient" x1="23.87" y1="23.87" x2="51.38" y2="51.38" gradientUnits="userSpaceOnUse">
										<stop offset="0" stop-color="#ffffff"/>
										<!-- <stop offset=".19" stop-color="#f1ead8"/> -->
										<!-- <stop offset=".46" stop-color="#e6d8c6"/> -->
										<!-- <stop offset=".77" stop-color="#d2bba9"/> -->
										<stop offset="1" stop-color="#c1a18e"/>
									</linearGradient>
								</defs>
								<g id="next-page-base">
									<polygon class="cls-next-2" points="41.17 40.95 87.19 0 87.19 87.19 0 87.19 41.17 40.95"/>
								</g>
								<g id="next-page-arrow">
									<line class="cls-next-3" x1="38.89" y1="58.78" x2="67.51" y2="58.78"/>
									<polyline class="cls-next-3" points="60.99 52.26 67.51 58.78 60.96 65.33"/>
								</g>
								<g id="next-page-flip">
									<path class="cls-next-1" d="M0,87.19L26.69,13.69,87.19,0s-17.39,33.14-37.21,52.18C29.83,71.67,0,87.19,0,87.19Z">
										<animate begin="mouseover" attributeName="d" to="M0,87.19L12.55,10.35,87.19,0s-20.48,28.18-40.29,47.23C26.75,66.72,0,87.19,0,87.19Z" dur="0.3s" fill="freeze"/>
										<animate begin="mouseout" attributeName="d" to="M0,87.19L26.69,13.69,87.19,0s-17.39,33.14-37.21,52.18C29.83,71.67,0,87.19,0,87.19Z" dur="0.3s" fill="freeze"/>
									</path>
								</g>
							</svg>
							<!-- <img src="<?php bloginfo('template_url'); ?>/assets/artists-next-page-A.svg"> -->
						</a>
			    	<?php endif; ?>
    	    	</div>
		    </nav>
		     <!-- <?php if($digital_true): ?>
			 	<section class="digital">
			 		<h2>Digital Content</h2>
			 		<?php if($digital_link): ?>
			 			<iframe src="<?php echo esc_url($digital_link['url']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 		<?php endif; ?>
			 		<?php if($digital_gallery): ?>
			 			<div class="gallery">
				 			<?php if($digital_image_01): ?>
					 			<img src="<?php echo esc_url($digital_image_01['url']); ?>" class="" alt="\<?php echo esc_attr($digital_image_01['alt']); ?>" />
					 		<?php endif; ?>
					 		<?php if($digital_image_02): ?>
					 			<img src="<?php echo esc_url($digital_image_02['url']); ?>" class="" alt="\<?php echo esc_attr($digital_image_02['alt']); ?>" />
					 		<?php endif; ?>
					 		<?php if($digital_image_03): ?>
					 			<img src="<?php echo esc_url($digital_image_03['url']); ?>" class="" alt="\<?php echo esc_attr($digital_image_03['alt']); ?>" />
					 		<?php endif; ?>
					 		<?php if($digital_image_04): ?>
					 			<img src="<?php echo esc_url($digital_image_04['url']); ?>" class="" alt="\<?php echo esc_attr($digital_image_04['alt']); ?>" />
					 		<?php endif; ?>
					 		<?php if($digital_image_05): ?>
					 			<img src="<?php echo esc_url($digital_image_05['url']); ?>" class="" alt="\<?php echo esc_attr($digital_image_05['alt']); ?>" />
					 		<?php endif; ?>
			 			</div>
			 		<?php endif; ?>
			 	</section>
		    <?php endif; ?> -->

	<?php endif ?>
<?php endwhile ?>


<?php get_footer(); ?>