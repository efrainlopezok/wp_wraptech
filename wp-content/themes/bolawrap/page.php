<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @since 1.0.0
 */

get_header();
?>
    <div class="innerpage-content">
        <section id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="innerpages-cover body-content">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>

            </main>
        </section>
	</div>

<?php
get_footer();
