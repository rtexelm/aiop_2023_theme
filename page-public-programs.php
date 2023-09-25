<?php
/**
 * The template for displaying public programs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#public-programs
 *
 * @package WordPress
 * @subpackage AiOP_2023
 * @copyright  AiOP, Laurie Waxman, Ross Mabbett
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
            <h3>Walk & Talk</h3>
            <p>Join us for an intimate runway presentation of six projects from Art in Odd Places (AiOP) 2023: DRESS
                festival curated by Gretchen Vitamvas. The selected artists will walk the runway and discuss their work.
            </p>
            <div class="date-time">
                <div class="date">
                    <h4>Date</h4>
                    <p>Friday, October 13th, 2023</p>
                </div>
                <div class="location">
                    <h4>Location</h4>
                    <p>Bureau of General Services: Queer Division / Room 210, LGBTQIA+ Center, 208 W 13th Street</p>
                </div>
                <div class="time">
                    <h4>Time</h4>
                    <p>6-7:30pm</p>
                </div>
            </div>
            <a href="https://www.eventbrite.com/e/art-in-odd-places-2023-dress-walk-and-talk-tickets-713001214827?aff=oddtdtcreator"
                target="_blank" title="RSVP for Walk & Talk" class="button neon-yellow">RSVP</a>
        </div>

        <div class="program-container" id="program-02">
            <h3>Sidewalk Runway</h3>
            <p>Sashay, strut, saunter, swagger, or slay your idea of DRESS on our pop-up public runway.
            </p>
            <div class="date-time">
                <div class="date">
                    <h4>Date</h4>
                    <p>Saturday, October 14, 2023</p>
                </div>
                <div class="location">
                    <h4>Location</h4>
                    <p>14th Street between Sixth and Seventh Avenue.</p>
                </div>
                <div class="time">
                    <h4>Time</h4>
                    <p>4-6pm</p>
                </div>
            </div>

        </div>

        <div class="program-container" id="program-03">
            <h3>Paper DRESS Ball</h3>
            <p>Please join us for an evening of paper fashion, dancing, and performance. Paper Dress Ball is a
                celebration of Art in Odd Places 2023: DRESS festival and participating artists with all proceeds going
                directly to the vital work of NYC Anti-Violence Project (AVP) serves lesbian, gay, bisexual,
                transgender, queer, and HIV-affected communities and allies to end all forms of violence through
                organizing and education, and supports survivors through counseling and advocacy.
            </p>
            <div class="date-time">
                <div class="date">
                    <h4>Date</h4>
                    <p>Saturday, October 14, 2023</p>
                </div>
                <div class="location">
                    <h4>Location</h4>
                    <p>LGBTQIA+ Center, 208 W 13th Street</p>
                </div>
                <div class="time">
                    <h4>Time</h4>
                    <p>7-10pm</p>
                </div>
            </div>
            <a href="https://www.eventbrite.com/e/paper-dress-ball-tickets-716624060857?aff=oddtdtcreator"
                target="_blank" title="Tickets for Paper Dress Ball" class="button neon-yellow">Tickets</a>
        </div>
    </section>
</main><!-- #primary -->

<?php get_footer(); ?>