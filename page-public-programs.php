<?php
/**
 * The template for displaying public programs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#public-programs
 *
 * @package WordPress
 * @subpackage AiOP_2022
 * @copyright  AiOP, Laurie Waxman
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
	
?>

<div id="program-background"></div>
<main class="site-content public-programs" id="main-content">
    <h1 class="h1">Public Programs</h1>
    <section class="programs">
        <div class="program-container" id="program-01">
            <h3>Runway & Panel Discussion</h3>
            <p class="p3 date">Friday, October 13th, 2023</p>
            <p class="p2 location">Bureau of General Services, Queer Division at the LGBGQ Center on 13th Street.</p>
            <p class="p2 time">7-8:30pm</p>
            <p class="p4">Join us for a runway/panel presentation of some kind at the Bureau of General Services, Queer
                Division at the LGBGQ Center on 13th Street.
            </p>
            <a href="https://www.eventbrite.com/e/art-in-odd-places-2022story-video-virtual-evening-tickets-407219312927"
                class="button inline">RSVP here</a>
        </div>
        <div class="program-container" id="program-02">
            <h2>What&rsquo;s Your STORY?</h2>

            <p class="p2">Friday, September 23, 2022, 6–7:30pm, Bureau of General Services: Queer Division / Room 210,
                LGBTQIA+ Center, 208 W 13th Street</p>
            <p class="p3"> A selection of festival artists telling their stories. Featuring Nick Daniels, Jana Greiner,
                Juan Hernadez with Mai Tran, Vivek Sebastian, Heather Sincavage, and Yu-Ching Wang. Hosted by Jessica
                Elaine Blinkhorn.</p>
            <a href="https://www.eventbrite.com/e/art-in-odd-places-2022-story-presents-whats-your-story-tickets-408967050457"
                class="button inline">RSVP here</a>
        </div>
        <div class="program-container" id="program-03">
            <h2>Critical Mass</h2>
            <p class="p2"> Saturday, September 24, 2022, 3-5pm, 14th Street between Sixth and Eighth Avenues.</p>
            <p clas="p3">A selection of the artists' projects in a concentrated area to make the festival more
                accessible for festival goers.</p>
        </div>
    </section>
</main><!-- #primary -->

<?php get_footer(); ?>