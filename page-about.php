<?php
/**
 * The template for about page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#about
 * @package WordPress
 * @subpackage AiOP_2023
 * @copyright  AiOP, Laurie Waxman, Ross Mabbett
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
	
?>
<?php 

    $statement = get_field('about_cs_full');
    $mission = get_field('about_aiop_mission');
    $history = get_field('about_aiop_history');
    $bureau = get_field('about_bureau');
    $center = get_field('about_the_center');
    $pollinate = get_field('about_pollinate');
    $dedication = get_field('about_dedication');
    $thanks = get_field('about_thanks');

?>

<main class="site-content about" id="main-content">

    <h1 class="hidden">ABOUT</h1>

    <section class="dress">
        <div class="c-statement">
            <h2 class="f-weight-700">DRESS</h2>
            <p class="p1">
                <?php echo $statement ?>
            </p>
        </div>
    </section>
    <section class="festival">
        <div class="mission">
            <h2>Mission</h2>
            <p>
                <?php echo $mission ?>
            </p>
        </div>
        <div class="history">
            <h2>History</h2>
            <p>
                <?php echo $history ?>
            </p>
        </div>
    </section>


    <section class="people">

        <h2>People</h2>

        <?php
            wp_reset_query();

            $peopleArgs = array(
                'post_type' => 'staff-credit',
                'meta_key' => 'order',
                'orderby' => 'meta_value_num',
                'order'	=> 'ASC',
                'posts_per_page' => -1
            );

            $staffQuery = new WP_Query($peopleArgs);
        
            ?>
        <?php if($staffQuery->have_posts()): ?>
        <?php while($staffQuery->have_posts()): $staffQuery->the_post(); ?>
        <?php if (function_exists('get_field')): 
                    
                    $full_name			= get_field('full_name');
                    $title 			    = get_field('title');
                    $link1			    = get_field('web_link_1');
                    $link2 	            = get_field('web_link_2');
                    $link3		        = get_field('web_link_3');

                    $comma1 = $link2 ? "," : "";
                    $comma2 = $link3 ? "," : "";
                ?>
        <div class="staff-item">

            <h3 class="staff-name"><?php echo $full_name ?></h3>

            <p class="staff-title"><?php echo $title ?></p>

            <div class="staff-links">
                <?php 
				if($link1){
					echo "<a target='blank' href='" . esc_url($link1['url']) . "'>" . esc_attr( $link1['title'] ) . "</a>" . $comma1;
				}
				?>
                <?php 
				if($link2){
					echo "<a target='blank' href='" . esc_url($link2['url']) . "'>" . esc_attr( $link2['title'] ) . "</a>" . $comma2;
				}
				?>
                <?php 
				if($link3){
					echo "<a target='blank' href='" . esc_url($link3['url']) . "'>" . esc_attr( $link3['title'] ) . "</a>";
				}
				?>
            </div>
        </div>
        <?php endif ?>
        <?php endwhile ?>
        <?php wp_reset_postdata(); ?>
        <?php endif ?>

    </section>


    <section class="partners">

        <h2>Partners</h2>

        <div class="partner-container">

            <img src="<?php bloginfo('template_url'); ?>/assets/dress/BGSQD-168w.png"
                alt="Bureau of General Services – Queer Division" class="partner-logo" id="partner-logo-bureau" />

            <div class="partner bureau">
                <p class="partner-text"><?php echo $bureau; ?></p>
                <a target="_blank" href="https://bookshop.org/shop/bgsqd" class="button neon-yellow">bgsqd.com</a>
            </div>
        </div>

        <div class="partner-container">

            <img src="<?php bloginfo('template_url'); ?>/assets/dress/The Center_White.PNG" alt="The Center"
                class="partner-logo" id="partner-logo-center" />

            <div class="partner the-center">
                <p class="partner-text"><?php echo $center; ?></p>
                <a target="_blank" href="https://gaycenter.org/" class="button neon-yellow">gaycenter.org</a>
            </div>
        </div>

        <div class="partner-container">

            <img src="<?php bloginfo('template_url'); ?>/assets/dress/pollinate252w.png" alt="Pollinate"
                class="partner-logo" id="partner-logo-pollinate" />

            <div class="partner pollinate">
                <p class="partner-text"><?php echo $pollinate; ?></p>
                <a target="_blank" href="https://www.pollinate.co/" class="button neon-yellow">pollinate.co</a>
            </div>
        </div>

    </section>

    <section class="support">
        <h2>Support</h2>
        <div class="dedication">
            <p class="p1"><?php echo $dedication; ?></p>
        </div>
        <div class="thanks">
            <h3>Thanks</h3>
            <p class="p2r"><?php echo $thanks; ?></p>
        </div>
    </section>

</main>

<?php get_footer(); ?>