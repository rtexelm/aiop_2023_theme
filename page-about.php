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

    $bureau = get_field('about_bureau');
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
                What is a story? A story is an account of events in a person’s, object’s, and/or environment’s life.
                These events can be real or imaginary, told as entertainment or to communicate one’s history. But within
                a story, there are points of intersection that bind us together through an encounter, through an
                article, or through a setting. A story can be larger than our own existence. Some stories can be very
                long, some stories can be brief yet eventful, and others never shared by those who lived them.
            </p>
        </div>
    </section>
    <section class="festival">
        <div class="mission">
            <h2>Mission</h2>
            <p>
                <span class="italic">Art in Odd Places</span> aims to stretch the boundaries of communication in the
                public realm by presenting artworks in all disciplines outside the confines of traditional public
                space regulations. <span class="italic">AiOP</span> reminds us that public spaces function as the
                epicenter for diverse social interactions and the unfettered exchange of ideas.
            </p>
        </div>
        <div class="history">
            <h2>History</h2>
            <p><span class="italic">Art in Odd Places (AiOP)</span> began as an action by a group of artists led by
                Ed Woodham to encourage local participation in the Cultural Olympiad of the 1996 Olympics in
                Atlanta. In 2005, after moving back to New York City, he re imagined it as a response to the
                dwindling of public space and personal civil liberties – first in the Lower East Side and East
                Village, and since 2008, on 14th Street in Manhattan. <span class="italic">AiOP</span> has always
                been a grassroots project fueled by the goodwill and inventiveness of its participants.</p>
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
        <div class="staff">
            <h3 class="staff_name"><?php echo $full_name ?></h3>
            <p class="staff_title"><?php echo $title ?></p>
            <div class="staff_links">
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
        <?php endif ?>
        <div class="staff_col_1">
            <div class="staff">
                <h3 class="staff_name">Laurie Waxman</h3>
                <p class="staff_title">Graphic & Web Designer</p>
                <div class="staff_links">
                    <a target="_blank" href="http://lauriewaxman.com/">lauriewaxman.com</a>
                    <a target="_blank" href="https://www.instagram.com/waxles/">@waxles</a>
                </div>
            </div>
            <div class="staff">
                <h3 class="staff_name">Ross Mabbett</h3>
                <p class="staff_title">Software Developer</p>
                <div class="staff_links">
                    <a target="_blank" href="https://rossmabbett.com">rossmabbett.com</a>
                    <a target="_blank" href="https://github.com/rtexelm">@rtexelm</a>
                </div>
            </div>
    </section>
    <section class="partners">

        <h2>Partners</h2>

        <img src="<?php bloginfo('template_url'); ?>/assets/dress/BGSQD-168w.png"
            alt="Bureau of General Services – Queer Division" class="partner-logo" id="partner-logo-bureau" />

        <div class="partner bureau">
            <!-- <p class="h3">Bureau of General Services — Queer Division</p> -->
            <p class="partner-text"><?php echo $bureau; ?></p>
            <a target="_blank" href="https://bookshop.org/shop/bgsqd" class="button orange">BGSQD website</a>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/assets/dress/pollinate252w.jpg" alt="Pollinate "
            class="partner-logo" id="partner-logo-pollinate">
        <div class="partner pollinate">
            <!-- <p class="h3">Pollinate</p> -->
            <p class="partner-text"><?php echo $pollinate; ?></p>
            <a target="_blank" href="https://www.pollinate.co/" class="button orange">Pollinate website</a>
        </div>
        <!-- <div class="read-more">
						<a href="<?php echo get_home_url().'/partners'; ?>" class="button primary">Read more</a>
			    	</div> -->
        <!-- </div> -->
    </section>

    <section class="support">
        <h2>Support</h2>
        <div class="dedication">
            <p class="p1"><?php echo $dedication; ?></p>
        </div>
        <!-- 	<div class="consultation">
		    		<h3>Consultation</h3>
		    		<p class="p2r"><?php the_field('about_consultants'); ?></p>
		    	</div> -->
        <div class="thanks">
            <h3>Thanks</h3>
            <p><?php echo $thanks; ?></p>
        </div>
    </section>

</main>

<?php get_footer(); ?>