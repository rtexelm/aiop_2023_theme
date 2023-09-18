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

<main class="site-content about" id="main-content">

    <h1 class="hidden">ABOUT</h1>

    <section class="dress-mission">
        <div class="dress">
            <h2 class="f-weight-700">DRESS</h2>
            <p class="p1">
                What is a story? A story is an account of events in a person’s, object’s, and/or environment’s life.
                These events can be real or imaginary, told as entertainment or to communicate one’s history. But within
                a story, there are points of intersection that bind us together through an encounter, through an
                article, or through a setting. A story can be larger than our own existence. Some stories can be very
                long, some stories can be brief yet eventful, and others never shared by those who lived them.
            </p>
        </div>
        <div class="mission">
            <h2>Mission</h2>
            <p>
                <span class="italic">Art in Odd Places</span> aims to stretch the boundaries of communication in the
                public realm by presenting artworks in all disciplines outside the confines of traditional public
                space regulations. <span class="italic">AiOP</span> reminds us that public spaces function as the
                epicenter for diverse social interactions and the unfettered exchange of ideas.
            </p>
        </div>
    </section>
    <section class="history">
        <h2>History</h2>
        <p><span class="italic">Art in Odd Places (AiOP)</span> began as an action by a group of artists led by
            Ed Woodham to encourage local participation in the Cultural Olympiad of the 1996 Olympics in
            Atlanta. In 2005, after moving back to New York City, he re imagined it as a response to the
            dwindling of public space and personal civil liberties – first in the Lower East Side and East
            Village, and since 2008, on 14th Street in Manhattan. <span class="italic">AiOP</span> has always
            been a grassroots project fueled by the goodwill and inventiveness of its participants.</p>
    </section>
    <section class="people">
        <h2>People</h2>
        <div class="staff curator">
            <h3 class="staff_name">Gretchen Vitamvas</h3>
            <p class="staff_title">Curator</p>
            <div class="staff_links">
                <a target="_blank" href="#">Personal Site</a>
                <a target="_blank" href="#">Instagram</a>
            </div>
        </div>
        <div class="staff_col_1">
            <div class="staff">
                <h3 class="staff_name">Ed Woodham</h3>
                <p class="staff_title">Founder & Director</p>
                <div class="staff_links">
                    <a target="_blank" href="https://edwoodham.com/bio/">edwoodham.com</a>
                    <a target="_blank" href="https://www.instagram.com/ed.woodham/">@ed.woodham</a>
                </div>
            </div>
            <div class="staff">
                <h3 class="staff_name">Tasha Douge</h3>
                <p class="staff_title">Curatorial Assistant</p>
                <div class="staff_links">
                    <div class="staff_links">
                        <a target="_blank" href="#">Personal Site</a>
                        <a target="_blank" href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="staff">
                <h3 class="staff_name">Sarah Starpoli</h3>
                <p class="staff_title">Curatorial Manager</p>
                <div class="staff_links">
                    <a target="_blank" href="#">Personal Site</a>
                    <a target="_blank" href="#">Instagram</a>
                </div>
            </div>
            <div class="staff">
                <h3 class="staff_name">Flora Lin</h3>
                <p class="staff_title">Social Media Manager</p>
                <div class="staff_links">
                    <a target="_blank" href="#">Personal Site</a>
                    <a target="_blank" href="#">Instagram</a>
                </div>
            </div>
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
            <div class="staff">
                <h3 class="staff_name">Aga Sablinksa</h3>
                <p class="staff_title">Communications Consultant</p>
                <div class="staff_links">
                    <a target="_blank" href="#">Personal Site</a>
                    <a target="_blank" href="#">Instagram</a>
                </div>
            </div>
        </div>
        <h2 class="thinkers">Thinkers in Residence</h2>
        <div class="thinkers_col_1">
            <div class="staff">
                <h3 class="staff_name">Roberta Degnore</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Rich Garr</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Katya Grokhovsky</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">LuLu LoLo</h3>
            </div>
        </div>
        <div class="thinkers_col_2">
            <div class="staff">
                <h3 class="staff_name">Matthew López-Jensen</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Eliza Luce</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Harley J. Spiller</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Max Williams</h3>
            </div>
            <div class="staff">
                <h3 class="staff_name">Martha Wilson</h3>
            </div>
        </div>
    </section>

    <h2>Partners</h2>

    <img src="<?php bloginfo('template_url'); ?>/assets/dress/BGSQD-168w.png"
        alt="Bureau of General Services – Queer Division" class="partner-logo" id="partner-logo-bureau" />

    <div class="partner bureau">
        <!-- <p class="h3">Bureau of General Services — Queer Division</p> -->
        <p class="partner-text"><?php the_field('about_bureau'); ?></p>
        <a target="_blank" href="https://bookshop.org/shop/bgsqd" class="button secondary">BGSQD website</a>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/assets/about-partners-pollinate-logo.svg" alt="Pollinate "
        class="partner-logo" id="partner-logo-pollinate">
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

</main>

<?php get_footer(); ?>