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
    <div class="single-post-cover pt-50 pb-50">
        <div class="container">
           <div class="d-flex flex-nowrap">
               <div class="post-left-content">
                    <div class="single-post-title">
                        <h1 class="h2"><?php the_title(); ?></h1>
                        <p>
                            <span>
                                <b>Post Author: </b><?php the_author(); ?><br>
                                <b>Post Date: </b><?php the_date(); ?>
                            </span>
                        </p>
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
               		<?php //dynamic_sidebar( 'postsidebar' ); ?>
				   <?php $post_count = get_field('posts_per_page','options');
						$cta_link = get_field('cta_link','options'); ?>

						<div class="widget widget_recent_entries"><div class="widget-content">		
							<h4 class="widget-title subheading heading-size-3">Recent Posts</h4>
							<ul>
								
								<?php $the_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => $post_count)); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

								<li>
									<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
									<span class="post-date"><?php echo get_the_date(); ?></span>
								</li>
								<?php 
								endwhile;
								wp_reset_postdata();
								?>
							</ul>
							<div class="text-center btn-area">
								<a class="btn" href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>"><?php echo $cta_link['title']; ?></a>
							</div>
						</div>
						</div>
               </div>
           </div>
        </div>
    </div>
</div>
<?php endwhile; // End of the loop.
?>

<?php
get_footer(); ?>
