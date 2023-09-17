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
    wp_reset_query();

?>

<div id="about-background"></div>
<!-- <img src="about-header" alt=""> -->
<main class="site-content about" id="main-content">

    <h1 class="hidden">ABOUT</h1>	
	<img src="<?php bloginfo('template_url'); ?>/assets/about-header.png" alt="" class="buffer about-header">	

    <?php while ( have_posts() ) : the_post(); ?>

    	<!-- <section class="header"> -->
    	<!-- </section> -->

    	<section class="about">

		    <section class="cs p2">
				<p class="p2r">
					<span class="p2"><?php the_field('about_cs_highlight'); ?></span>
					<?php the_field('about_cs_full'); ?>
				</p>
				<p class="p2r">—The curator, Curator</p>
		    </section>
		    <img src="<?php bloginfo('template_url'); ?>/assets/about-festival-buffer-00.png" alt="" class="image-buffer buffer">	
		    <section class="festival">
		    	<div class="mission">
		    		<h3>Mission</h3>
		    		<p><span class="italic">Art in Odd Places</span> aims to stretch the boundaries of communication in the public realm by presenting artworks in all disciplines outside the confines of traditional public space regulations. <span class="italic">AiOP</span> reminds us that public spaces function as the epicenter for diverse social interactions and the unfettered exchange of ideas.</p>
		    	</div>
		    	<div class="history">
		    		<h3>History</h3>
					<p><span class="italic">Art in Odd Places (AiOP)</span> began as an action by a group of artists led by Ed Woodham to encourage local participation in the Cultural Olympiad of the 1996 Olympics in Atlanta. In 2005, after moving back to New York City, he re imagined it as a response to the dwindling of public space and personal civil liberties – first in the Lower East Side and East Village, and since 2008, on 14th Street in Manhattan. <span class="italic">AiOP</span> has always been a grassroots project fueled by the goodwill and inventiveness of its participants.</p>
		    	</div>
		    </section>
			<img src="<?php bloginfo('template_url'); ?>/assets/about-festival-buffer-01.png" alt="" class="buffer image-buffer">	
		    <section class="people">
		    	<!-- <img src="<?php bloginfo('template_url'); ?>/assets/About_People-Blob-1.png" class="blob-person-1" role="presentation">
		    	<img src="<?php bloginfo('template_url'); ?>/assets/About_People-Blob-2.png" class="blob-person-2" role="presentation"> -->
		    	<h2 class="staff">People</h2>
	    		<div class="staff curator">
		    		<p class="p1 staff_name">Jessica Elaine Blinkhorn</p>
		    		<p class="staff_title h5">Curator</p>
		    		<div class="staff_links">
		    			<a target="_blank" href="https://jeblinkhorn.wixsite.com/mysite">jeblinkhorn.wixsite.com</a>
		    			<a target="_blank" href="https://instagram.com/wheelie_an_artist">@wheelie_an_artist</a>
		    		</div>
		    	</div>
		    	<div class="staff_col_1">
					<div class="staff">
						<p class="p1 staff_name">Abbie Argo</p>
						<p class="staff_title h5">Curatorial Assistant</p>
						<div class="staff_links">
							<a target="_blank" href="https://sedangogh.com">sedangogh.com</a>
							<a target="_blank" href="https://instagram.com/sedangogh">@sedangogh</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Clara Grusq</p>
						<p class="staff_title h5">Curatorial Assistant</p>
						<div class="staff_links">
							<a target="_blank" href="https://www.claragrusq.com/">claragrusq.com</a>
							<a target="_blank" href="https://instagram.com/claragrusq">@claragrusq</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Gretchen Vitamvas</p>
						<p class="staff_title h5">Curatorial Assistant</p>
						<div class="staff_links">
							<a target="_blank" href="http://gretchenvitamvas.com/">gretchenvitamvas.com</a>
							<a target="_blank" href="https://instagram.com/gvitamvas">@gvitamvas</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Furusho von Puttkammer</p>
						<p class="staff_title h5">Executive Director</p>
						<div class="staff_links">
							<a target="_blank" href="http://www.anchovyart.com">anchovyart.com</a>
							<a target="_blank" href="https://instagram.com/anchovyart">@anchovyart</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Ed Woodham</p>
						<p class="staff_title h5">Founder</p>
						<div class="staff_links">
							<a target="_blank" href="https://edwoodham.com/bio/">edwoodham.com</a>
							<a target="_blank" href="https://www.instagram.com/ed.woodham/">@ed.woodham</a>
						</div>
					</div>
		    	</div>
		    	<div class="staff_col_2">
		    		<div class="staff">
						<p class="p1 staff_name">Pierson Brown</p>
						<p class="staff_title h5">Volunteer Coordinator</p>
						<div class="staff_links">
							<a target="_blank" href="https://piersonbrownmpb.com/">piersonbrownmpb.com</a>
							<a target="_blank" href="https://www.instagram.com/piersonbrown/">@piersonbrown</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Camila Olander Echavarria</p>
						<p class="staff_title h5">Access Manager</p>
						<div class="staff_links">
							<!-- <a target="_blank" href="https://piersonbrownmpb.com/">piersonbrownmpb.com</a>
							<a target="_blank" href="https://www.instagram.com/piersonbrown/">@piersonbrown</a> -->
						</div>
					</div>
	    		 	<div class="staff">
						<p class="p1 staff_name">Natalie J. Ortiz</p>
						<p class="staff_title h5">Executive Assistant</p>
						<div class="staff_links">
							<a target="_blank" href="https://cargocollective.com/njo">cargocollective.com/njo</a>
							<a target="_blank" href="https://www.instagram.com/natalie.njo/">@natalie.njo</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Lorelle Pais</p>
						<p class="staff_title h5">Photography & Video Manager</p>
						<div class="staff_links">
							<a target="_blank" href="http://lorellepais.com">lorellepais.com</a>
							<a target="_blank" href="https://www.instagram.com/chunyamo/">@chunyamo</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">William Schweigert</p>
						<p class="staff_title h5">Curatorial Manager</p>
						<div class="staff_links">
							<a target="_blank" href="http://williamschweigert.com/">williamschweigert.com</a>
							<a target="_blank" href="https://www.instagram.com/william__tiger/">@william__tiger</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Laurie Waxman</p>
						<p class="staff_title h5">Graphic & Web Designer</p>
						<div class="staff_links">
							<a target="_blank" href="http://lauriewaxman.com/">lauriewaxman.com</a>
							<a target="_blank" href="https://www.instagram.com/waxles/">@waxles</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Amanda Wu</p>
						<p class="staff_title h5">PR & Social Media Manager</p>
						<div class="staff_links">
							<a target="_blank" href="http://www.awuart.com/">awuart.com</a>
							<a target="_blank" href="https://www.instagram.com/everythingamandapanda/">@everythingamandapanda</a>
						</div>
					</div>
					<div class="staff">
						<p class="p1 staff_name">Linnea Hult</p>
						<p class="staff_title h5">Intern</p>
						<div class="staff_links">
							<a target="_blank" href="https://www.instagram.com/linnea.hlt/">@linnea.hlt</a>
						</div>
					</div>
				</div>
				<h2 class="thinkers">Thinkers in Residence</h2>
				<div class="thinkers_col_1">
					<div class="staff">
						<p class="p1 staff_name">Roberta Degnore</p>
						<!-- <div class="staff_links">
							<a target="_blank" href="http://www.anchovyart.com">website</a>
						</div> -->
					</div>
					<div class="staff">
						<p class="p1 staff_name">Rich Garr</p>
					</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">Katya Grokhovsky</p>
	    			</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">LuLu LoLo</p>
	    			</div>
				</div>
				<div class="thinkers_col_2">
	    			<div class="staff">
			    		<p class="p1 staff_name">Matthew López-Jensen</p>
	    			</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">Eliza Luce</p>
	    			</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">Harley J. Spiller</p>
	    			</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">Max Williams</p>
	    			</div>
	    			<div class="staff">
			    		<p class="p1 staff_name">Martha Wilson</p>
	    			</div>
		    	</div>
		    	<!-- <div class="read-more">
			    	<a target="_blank" href="http://www.artinoddplaces.org/blog/" class="button primary">Read their work</a>
		    	</div> -->
		    </section>
		    <img src="<?php bloginfo('template_url'); ?>/assets/about-buffer-image.png" alt="" class="image-buffer buffer">	
		    <section class="partners">
		    
		    	<!-- <div class="partner_text"> -->
			    	<h2>Partners</h2>
			    	<img src="<?php bloginfo('template_url'); ?>/assets/about-partners-bureau-logo.png" alt="Bureau of General Services – Queer Division" class="partner-logo" id="partner-logo-bureau">
			    	<div class="partner bureau">
				    	<!-- <p class="h3">Bureau of General Services — Queer Division</p> -->
						<p class="partner-text"><?php the_field('about_bureau'); ?></p>
						<a target="_blank" href="https://bookshop.org/shop/bgsqd"  class="button secondary">BGSQD website</a>
			    	</div>
		    		<img src="<?php bloginfo('template_url'); ?>/assets/about-partners-pollinate-logo.svg" alt="Pollinate " class="partner-logo" id="partner-logo-pollinate">
			    	<div class="partner pollinate">
				    	<!-- <p class="h3">Pollinate</p> -->
						<p class="partner-text"><?php the_field('about_pollinate'); ?></p>
						<a target="_blank" href="https://www.pollinate.co/" class="button secondary">Pollinate website</a>
			    	</div>
			    	<!-- <div class="read-more">
						<a href="<?php echo get_home_url().'/partners'; ?>" class="button primary">Read more</a>
			    	</div> -->
		    	<!-- </div> -->
		    </section>

		    <section class="support">
		    	<h2>Support</h2>
		    	<div class="dedication">
		    		<p class="p2"><?php the_field('about_dedication'); ?></p>
		    	</div>
		    <!-- 	<div class="consultation">
		    		<h3>Consultation</h3>
		    		<p class="p2r"><?php the_field('about_consultants'); ?></p>
		    	</div> -->
		    	<div class="thanks">
		    		<h3>Thanks</h3>
		    		<p class="p2r"><?php the_field('about_thanks'); ?></p>
		    	</div>
		    </section>
    	</section>

	<?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer(); ?>