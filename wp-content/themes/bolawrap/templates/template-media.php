<?php /* Template Name: Media Page Template */ ?>
<?php get_header(); ?>
<?php 
    $arg =  array('post_type' =>'post');
    $posts = new WP_Query( $arg );
    $args=query_posts($arg);
    $post_type = 'post';
    $count_posts =$posts->found_posts;
    $per_page_post = get_option( 'posts_per_page' );
?>

<script type="text/javascript">
// jQuery(document).ready(function(){
//     var post_offset, increment,loading=0;
//     var post_type = '<?php echo $post_type; ?>';
//     var total_post = '<?php echo $count_posts?>';
//     var number_of_post = '<?php echo $per_page_post;?>';

//     function ajax_load(){
//         if(loading) return true;

//         if(!loading) {
//             loading=1;

//             var params = {"offset":post_offset,"post_type":post_type,"number_of_post":number_of_post,"total_post":total_post,action:"get_articles"}

//             jQuery.post("<?php echo home_url(); ?>/wp-admin/admin-ajax.php",params,function(data){
//                 post_offset += increment;
//                 // console.log(post_offset);
//                 loading=0;

//                 var mydata = data.split('||');
//                     if(mydata[0]){
//                         var $boxes = jQuery(mydata[0].trim());
//                         jQuery('.post-load').append(mydata[0]);

//                     if(mydata[1] == 0){
//                         jQuery('#announcements .load-more').hide();
//                     }

//                     } else {
//                         jQuery('#announcements .load-more').hide();
//                     }
//             });
//         }
//     }
// // });
// // jQuery(document).ready(function(){
//     jQuery("#announcements .load-more .btn-primary").click(function(){
//         ajax_load();
//         return false;
//     });
//     jQuery("a[href="+window.location.hash+"]").click();
    
// });

</script>
<div class="inner-banner dark-bg" style="background-image: url('<?php the_field('media_background_image') ?>');background-size: cover;">
    <div class="container text-center">
        <?php if(get_field('media_page_title')){ ?><h1><?php the_field('media_page_title'); ?><a data-fancybox href="<?php the_field('media_video_url'); ?>" class="btn-play"></a></h1><?php } ?>
        <div class="media-top-post mobileview">
            <?php           
            $link = get_field('top_bar_button');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <div class="media-posttop-cnt">
                <p><?php the_field('Top__email_label'); ?></p>
                <a href="mailto:<?php the_field('label__email_id'); ?>"><?php the_field('label__email_id'); ?></a>
            </div>
        </div>
        <?php
        if( have_rows('media_category') ):?>
           <ul class="mediapage-category tabs-nav">
            <?php while ( have_rows('media_category') ) : the_row(); ?>
                <?php  
                $link = get_sub_field('media_category_name');
                if ($link) {
                    $class_url = $link['url'];
                } 
                ?>
              <li class="<?php echo str_replace('#', '', $class_url); ?>">
               <?php 
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="noUtm" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                </li>
            <?php endwhile; ?>
           </ul>
        <?php endif;
        ?>
        
    </div>
</div>
<div class="media-content-cover">
    <div class="container">
       <div class="media-top-flex">
        <div class="d-flex flex-nowrap ">
            <div class="media-post-left tabs-stage">
                <div id="" class="coverage tab-content">
                    <div class="media-post-left-inner">
                       <?php if( have_rows('add_coverage_articles') ):
                            $totalcoverage = count(get_field('add_coverage_articles'));  ?>
                            <div class="coverage-post-load">

                                <?php 
                                $number = 4;
                                $counttotal = 0;
                                while( have_rows('add_coverage_articles') ): the_row(); 

                                $carticleimg = get_sub_field('article_image');
                                $carticlename = get_sub_field('article_name');
                                $carticledate = get_sub_field('article_date');
                                $carticlelink = get_sub_field('article_link');
                                $carticlepub = get_sub_field('publication');

                                if($carticlename && $carticlelink){ ?>

                                <div class="media-postitem">
                                    <div class="d-flex">
                                        <div class="md-item-logo">
                                            <?php if( !empty( $carticleimg ) ): ?>
                                            <img src="<?php echo esc_url($carticleimg['url']); ?>" alt="<?php echo esc_attr($carticleimg['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="md-item-content">
                                            <?php if( !empty( $carticledate ) ): ?><span class="md-date"><strong><?php echo $carticledate; ?></strong></span><?php endif; ?>
                                            <p><?php echo $carticlepub; ?></p>
                                            <h4><span><?php echo $carticlename; ?></span><a href="<?php echo $carticlelink; ?>" target="_blank">Read Article ></a></h4>
                                        </div>
                                    </div>
                                </div> 

                                <?php } 
                                $counttotal++;
                                if ($counttotal == $number) {
                                    // we've shown the number, break out of loop
                                    break;
                                }
                                endwhile; ?>

                            </div>

                        <?php endif; ?>
                    </div>
                    <div class="load-more read-more cf">
                        <a id="coverage-show-more-link" class="btn btn-primary noUtm" href="javascript: coverage_show_more();"<?php if ($totalcoverage < $counttotal) { ?> style="display: none;"<?php } ?>>Show More</a>
                    </div>
                </div>
                <div id="" class="announcements tab-content">
                    <div class="announcements-inner">
                    <div class="media-post-left-inner">
                        <div class="post-load">
                           <?php

                            wp_reset_postdata();
                            if ( have_posts() ) {
                            // Load posts loop.
                            while ( have_posts() ) { the_post();
                            ?>
                            <div class="media-postitem">
                                <div class="d-flex">
                                    <div class="md-item-content">
                                        <span class="md-date"><strong><?php echo get_the_date(); ?></strong></span>
                                        <h4><span><?php echo wp_trim_words(get_the_title(),9,'...'); ?></span><a href="<?php the_permalink(); ?>">Read Press Release ></a></h4>
                                    </div>
                                </div>
                            </div> 
                            <?php } } ?>
                        </div>
                    </div>
                    </div>
                    <div class="load-more read-more cf">
                        <a id="cta-link" class="btn btn-primary noUtm" href="javascript: ajax_load();" <?php if ($totalforcenews < $forcenewscount) { ?> style="display: none;"<?php } ?>>Load More...</a>
                    </div>
                </div>
                <div id="" class="heroes tab-content">
                    <div class="media-post-left-inner">
                       <?php wp_reset_query(); 
                            if( have_rows('add_force_news_articles') ): 
                            $totalforcenews = count(get_field('add_force_news_articles')); ?>
                            <div class="forcenews-post-load">

                                <?php 
                                $forcenewsnumber = 4;
                                $forcenewscount = 0;
                                while( have_rows('add_force_news_articles') ): the_row(); 

                                $farticleimg = get_sub_field('fnarticle_image');
                                $farticlename = get_sub_field('fnarticle_name');
                                $farticledate = get_sub_field('fnarticle_date');
                                $farticlelink = get_sub_field('fnarticle_link');
                                $farticlepub = get_sub_field('publication');

                                if($farticlename) { ?>

                                <div class="media-postitem">
                                    <div class="d-flex">
                                        <div class="md-item-logo">
                                            <?php if( !empty( $farticleimg ) ): ?>
                                            <img src="<?php echo esc_url($farticleimg['url']); ?>" alt="<?php echo esc_attr($farticleimg['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="md-item-content">
                                            <?php if( !empty( $farticledate ) ): ?><span class="md-date"><strong><?php echo $farticledate; ?></strong></span><?php endif; ?>
                                            <p><?php echo $farticlepub; ?></p>
                                            <h4><span><?php echo $farticlename; ?></span><?php if($farticlelink) { ?><a href="<?php echo $farticlelink; ?>" target="_blank">Read Article ></a><?php }?></h4>
                                        </div>
                                    </div>
                                </div> 

                                <?php }
                                $forcenewscount++;
                                if ($forcenewscount == $forcenewsnumber) {
                                    // we've shown the number, break out of loop
                                    break;
                                }
                                endwhile; ?>

                            </div>

                        <?php endif; ?>
                    </div>
                    <div class="load-more read-more cf">
                        <a id="forcenews-show-more-link" class="btn btn-primary noUtm" href="javascript: forcenews_show_more();" <?php if ($totalforcenews < $forcenewscount) { ?> style="display: none;"<?php } ?>>Show More</a>
                    </div>
                </div>
               
            </div>
            <div class="media-post-right">
                <div class="media-top-post mobilenone">
                   <?php 
                    wp_reset_query();
                    $link = get_field('top_bar_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <div class="media-posttop-cnt">
                        <p><?php the_field('Top__email_label'); ?></p>
                        <a href="mailto:<?php the_field('label__email_id'); ?>"><?php the_field('label__email_id'); ?></a>
                    </div>
                </div>
                <div class="media-post-video">
                   <?php
                    if( have_rows('videos_repeater_top') ):
                        while ( have_rows('videos_repeater_top') ) : the_row(); ?>
                            <div class="media-post-item">
                                <a class="play-btn" href="<?php the_sub_field('video_url_top');?>" data-fancybox>
                                    <img src="<?php the_sub_field('video_poster_image_top');?>" alt="">
                                </a> 
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>    
        </div>    
    </div>
</div>
<section class="client-logo">
        <div class="container">
            <div class="client-logo-inner">
               <?php
                if( have_rows('client_logo_repeater',5027) ):
                    while ( have_rows('client_logo_repeater',5027) ) : the_row(); ?>
                        <div class="client-item grayscale">
                         <?php
                            $lightbox_checkbox = get_sub_field('lightbox_checkbox');
                            if( !$lightbox_checkbox ){ ?>
                              <?php if(get_sub_field('client_logo_url')){ ?>
                               <a href="<?php the_sub_field('client_logo_url') ?>" target="_blank">
                                   <?php } ?> 
                                          <?php 
                                            $image = get_sub_field('client_image');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?> 
                                   <?php if(get_sub_field('client_logo_url')){ ?>
                               </a>
                               <?php } ?>
                           <?php }else{ ?>
                               <?php if(get_sub_field('lightbox_video_url')){ ?>
                                   <a data-fancybox href="<?php the_sub_field('lightbox_video_url') ?>">
                                       <?php } ?> 
                                              <?php 
                                                $image = get_sub_field('client_image');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?> 
                                       <?php if(get_sub_field('lightbox_video_url')){ ?>
                                   </a>
                               <?php } ?>
                           <?php } ?>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="logo-footer-text text-center">
                <p><em>Click any source above for full story!</em></p>
            </div>
        </div>
    </section>
<script type="text/javascript">
    jQuery( document ).ready(function() {
        post_offset = increment = <?php echo $per_page_post; ?>;
    });
</script>

<script type="text/javascript">
    //jQuery( document ).ready(function() {
        var coverage_field_post_id = <?php echo $post->ID; ?>;
        var coverage_field_offset = <?php echo $number; ?>;
        var coverage_field_nonce = '<?php echo wp_create_nonce('coverage_field_nonce'); ?>';
        var coverage_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
        var coverage_more = true;
        function coverage_show_more() {
            $.post(
                coverage_ajax_url, {
                    // this is the AJAX action we set up in PHP
                    'action': 'coverage_show_more',
                    'post_id': coverage_field_post_id,
                    'coverageoffset': coverage_field_offset,
                    'nonce': coverage_field_nonce
                },
                function (json) {
                    // add content to container
                    // this ID must match the containter
                    // you want to append content to
                    jQuery('.coverage-post-load').append(json['content']);
                    jQuery(window).scrollTop(jQuery('html').attr('data-pos'));
                    // update offset
                    coverage_field_offset = json['coverageoffset'];
                    // see if there is more, if not then hide the more link
                    if (!json['more']) {
                        // this ID must match the id of the show more link
                        jQuery('#coverage-show-more-link').css('display', 'none');
                        //console.log(json);
                    }

                    setTimeout(function() {
						jQuery('.media-postitem.animate .d-flex').css({
							top: '0',
							opacity: '1'
						});
					}, 700);
                },
                'json'
            );
        }
    //});
</script>
<script type="text/javascript">
    //jQuery( document ).ready(function() {
        var forcenews_field_post_id = <?php echo $post->ID; ?>;
        var forcenews_field_offset = <?php echo $forcenewsnumber; ?>;
        var forcenews_field_nonce = '<?php echo wp_create_nonce('forcenews_field_nonce'); ?>';
        var forcenews_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
        var forcenews_more = true;
        function forcenews_show_more() {
            $.post(
                coverage_ajax_url, {
                    // this is the AJAX action we set up in PHP
                    'action': 'forcenews_show_more',
                    'post_id': forcenews_field_post_id,
                    'forcenewsoffset': forcenews_field_offset,
                    'nonce': forcenews_field_nonce
                },
                function (json) {
                    // add content to container
                    // this ID must match the containter
                    // you want to append content to
                    jQuery('.forcenews-post-load').append(json['content']);
                    jQuery(window).scrollTop(jQuery('html').attr('data-pos'));
                    // update offset
                    forcenews_field_offset = json['forcenewsoffset'];
                    // see if there is more, if not then hide the more link
                    if (!json['more']) {
                        // this ID must match the id of the show more link
                        jQuery('#forcenews-show-more-link').css('display', 'none');
                    }

                    setTimeout(function() {
						jQuery('.media-postitem.animate .d-flex').css({
							top: '0',
							opacity: '1'
						});
					}, 700);
                },
                'json'
            );
        }
    //});
</script>
<script type="text/javascript">
// jQuery(document).ready(function(){
    var post_offset, increment,loading=0;
    var post_type = '<?php echo $post_type; ?>';
    var total_post = '<?php echo $count_posts?>';
    var number_of_post = '<?php echo $per_page_post;?>';

    var count_page = 2;
    function ajax_load(){
        if(loading) return true;
        if(!loading) {
            loading=1;
            var params = {
                "offset":post_offset,
                "post_type":post_type,
                "number_of_post":number_of_post,
                "total_post":total_post,
                'count_page':count_page,
                action:"get_articles"
            }
            jQuery.post("<?php echo home_url(); ?>/wp-admin/admin-ajax.php",params,function(data){
                post_offset += increment;
                // console.log(post_offset);
                loading=0;
                var mydata = data.split('||');
                    if(mydata[0]){
                        var $boxes = jQuery(mydata[0].trim());
                        jQuery('.post-load').append(mydata[0]);
                        jQuery(window).scrollTop(jQuery('html').attr('data-pos'));


                        count_page++;
                    if(mydata[1] == 0){
                        jQuery('#announcements .load-more').hide();
                    }
                    } else {
                        jQuery('#announcements .load-more').hide();
                    }
                
                setTimeout(function() {
                    jQuery('.media-postitem.animate .d-flex').css({
                        top: '0',
                        opacity: '1'
                    });
                }, 700);

            });
        }
    }
// });
// jQuery(document).ready(function(){
    // jQuery("#announcements #cta-link").click(function(){
    //     ajax_load();
    //     return false;
    // });
    jQuery("a[href="+window.location.hash+"]").click();
    
// });
</script>
<?php get_footer(); ?>