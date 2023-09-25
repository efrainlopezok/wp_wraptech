<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<?php
/* Start the Loop */
while ( have_posts() ) :
the_post(); ?>
<div class="innerpage-content main-content pt-md-120">
    <div class="single-post-cover pt-50 pb-100">
        <div class="container">
           <div class="d-flex flex-nowrap">
               <div class="post-left-content">
                    <div class="single-post-title">
                        <h1 class="h1"><?php the_title(); ?></h1>
                        <!-- <p>
                            <span>
                                <b>Post Author: </b><?php the_author(); ?><br>
                                <b>Post Date: </b><?php the_date(); ?>
                            </span>
                        </p> -->
                    </div>
                    <div class="body-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-button">
                       <div class="d-flex align-items-center justify-content-between">
                           <div class="prev-post"><h6><?php next_post_link('%link','Prev Post'); ?></h6></div>
                           <div class="next-post"><h6><?php previous_post_link('%link','Next Post'); ?></h6></div>
                       </div>
                    </div>
                </div>
                <div class="post-sidebar">
                    <?php echo do_shortcode('[contact-form-7 id="103257" title="Job"]'); ?>	
				</div>
           </div>
        </div>
    </div>
</div>
<?php endwhile; // End of the loop.
?>

<?php
get_footer(); ?>
