<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 *
 * @package WordPress
 * @subpackage AiOP_2023
 * @copyright  AiOP, Laurie Waxman, Ross Mabbett
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

?>

<main class="home" id="main-content">

    <section class="header">


        <!-- Right pattern image -->
        <div class="positioner">

            <picture>
                <source media="(max-width: 719px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/pattern-02-top-m.png" />

                <source media="(min-width: 720px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-02-1276w.png" />

                <img id="pattern-r-top"
                    src="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-02-1276w.png" alt="" />
            </picture>
        </div>

        <!-- Title text -->
        <article id="title">
            <h1>
                <span id="title-1">Art in</span>
                <span id="title-2">Odd Places</span>
                <span id="title-3">2023</span>
                <span id="title-4">DRESS</span>
            </h1>
        </article>

        <!-- Left pattern image -->
        <div class="positioner">
            <picture>
                <source media="(max-width: 719px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/pattern-01-top-m.png" />

                <source media="(min-width: 720px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-01-1264w.png" />

                <img id="pattern-l-top"
                    src="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-01-1264w.png" alt="" />
            </picture>
        </div>

        <!-- Dashed line with arrow -->
        <picture>
            <source media="(max-width: 719px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/dress/scroll-780w.png" />

            <source media="(min-width: 720px)"
                srcset="<?php bloginfo('template_url'); ?>/assets/dress/tablet/scroll-2880w.png" />

            <img src="<?php bloginfo('template_url'); ?>/assets/dress/			scroll-780w.png" alt="scroll down"
                class="page-down" />
        </picture>
    </section>

    <div class="bg-wrapper">

        <section id="dates">

            <h2 class="d1 f-weight-400 date-text">

                <span class="month">October</span>
                <span class="days">13&ndash;15</span><span class="year highlight"> 2023</span>

            </h2>

            <a class="button neon-yellow" href="<?php bloginfo('template_url'); ?>/schedule">Schedule</a>
            <a class="button lavender" href="<?php bloginfo('template_url'); ?>/public-programs">Public
                Programs</a>
        </section>

        <div class="positioner">

            <picture>
                <source media="(max-width: 719px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/pattern-03-top-m.png" />

                <source media="(min-width: 720px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-03-1282w.png" />
                <img id="pattern-r-mid"
                    src="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-03-1282w.png" alt="">
            </picture>
        </div>

        <div class="positioner">

            <picture>
                <source media="(max-width: 719px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/pattern-04-curve-m.png" />

                <source media="(min-width: 720px)"
                    srcset="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-04-1216w.png" />
                <img id="pattern-l-mid"
                    src="<?php bloginfo('template_url'); ?>/assets/dress/tablet/pattern-04-1216w.png" alt="">
            </picture>
        </div>

        <section id="about">

            <h2 class="flex-container flex-col-nw byline">
                <span id="byline-1" class="flex-col-left">Curated</span>
                <span id="byline-2" class="flex-col-right">by Gretchen</span>
                <span id="byline-3" class="flex-col-center">Vitamvas</span>
            </h2>

            <div class="about">
                <p class="p1"><span class="italic">Art in Odd Places 2023: DRESS</span> features visual and performance
                    artists on 14th Street from Avenue C to the Hudson River, October 13-15, 2023.</p>
                <a class="button neon-yellow" href="<?php bloginfo('template_url'); ?>/about">About the
                    festival</a>
            </div>
        </section>

        <section id="artists">

            <div class="artists">

                <h2 class="flex-container flex-col-nw move-right">
                    <span id="artists-40" class="script flex-col-center">40</span>
                    <span id="artists-part" class="flex-col-right">Participating</span>
                    <span id="artists-art" class="flex-col-left"> Artists &</span>
                    <span id="artists-groups" class="flex-col-center">Groups</span>
                </h2>

                <a class="button neon-yellow" href="<?php bloginfo('template_url'); ?>/artists">Artists</a>
                <a class="button lavender" href="<?php bloginfo('template_url'); ?>/public-programs">Schedule</a>

            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>