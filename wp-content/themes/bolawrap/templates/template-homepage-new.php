<?php /* Template Name: New Homepage Template */ ?>
<?php get_header(); ?>

<!-- banner area part -->
<section class="hero-section dark-bg hero-slide">
    <?php //<div id="hero-animation"></div> ?>
    <?php if(get_field('background_video')){ ?>
        <div class="hero-img" style="background-image: url('<?php the_field('background_image_hero') ?>')">
            <video autoplay loop muted preload playsinline>    
              <source src="<?php the_field('background_video') ?>" type="video/mp4">
            </video>

            <div class="hero-caption">
                <div class="container">
                   <div class="hero-caption-inner">
                    <?php if(get_field('background_title')){ ?><h1><?php the_field('background_title') ?></h1><?php } ?>
                    <?php if(get_field('background_title_content')){ ?><p><?php the_field('background_title_content') ?></p><?php } ?>
                       
                    <?php $gift_hero = get_field('gift_hero'); ?>
                    <?php if ($gift_hero['url']): ?>
                        <div class="mobile">
                            <video autoplay loop muted preload playsinline >
                                <source src="<?php echo $gift_hero['url']; ?>" type="video/mp4">
                            </video>
                        </div>
                    <?php endif ?>  
                       
                    <div class="btn-group">
                    <?php 
                    $link = get_field('hero_button_simple');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('hero_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn-play" data-fancybox href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>

            <?php $slids = (get_field( 'slides' )) ? get_field( 'slides' ) : '' ;?>
            <?php if (!empty($slids['slide'])): ?>
                <div class="landing-slider">
                    <div class="section-header text-center">
                        <h3 class="title">Body Cam Footage</h3>
                    </div>
                    <div class="wrap-slide-landing">
                        <?php foreach ($slids['slide'] as $slide): ?>
                            <div class="item">
                                <h5><?php echo $slide['title']; ?></h5>
                                <!--<p><?php //echo $slide['sub_title']; ?></p> -->
                                <div class="video-play">
                                    <img src="https://img.youtube.com/vi/<?php echo $slide['id_video']; ?>/hqdefault.jpg">
                                    <a class="btn-play" data-fancybox href="https://www.youtube.com/watch?v=<?php echo $slide['id_video']; ?>" target="_self"></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>

        </div>
    <?php } ?>
    

</section>
<!-- content area part -->
<div class="main-content">
    <!-- content area part --> 
    <section class="video-slider">
        <div class="container">
            <div class="inner-slider-title text-center">
                <h2>Chiefs Talk BolaWrap</h2>    
            </div>
            <?php if (get_field( 'home_testimonial_title' )): ?>
                <div class="text-center mobile">
                    <h3 class="title"><?php echo get_field( 'home_testimonial_title' ) ?></h3>
                </div>
            <?php endif ?>  
            
           <div class="d-flex">
            <div class="video-left">
               <?php
                if( have_rows('video_content_repeater') ):
                    while ( have_rows('video_content_repeater') ) : the_row(); ?>
                        <div class="video-left-inner">
                            <?php if(get_sub_field('video_content')){ ?><h3><?php the_sub_field('video_content') ?></h3><?php } ?>
                            <?php if(get_sub_field('testimonial_author_name')){ ?><h6>- <?php the_sub_field('testimonial_author_name') ?></h6><?php } ?>
                            <?php 
                            $link = get_sub_field('testimonial_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="video-right">
                <div class="text-center video-caption-top pb-20">
                    <?php if(get_field('video_poster_img')){ ?><img src="<?php the_field('video_poster_img'); ?>"/><?php } ?>
                    <?php if(get_field('video_url_home')){ ?>
                    <div class="video-right-inner">
                        <?php //echo do_shortcode( '[embedyt] '. get_field('video_url') . ' [/embedyt]' ); ?>
                        <a href="<?php the_field('video_url_home'); ?>" data-fancybox class="testimonial-play"></a>
                    </div>
                    <?php } ?>
                </div>                
            </div> 
            </div>   
        </div>
    </section>

    <section class="img-slider">
        <div class="container">
            <div class="inner-slider-title text-center">
                <?php the_field('slider_img_title') ?>
            </div>
            <div class="img-inner-slider">
               <?php
                if( have_rows('images_repeater') ):
                    while ( have_rows('images_repeater') ) : the_row(); ?>
                        <div class="imgslider-item">
                           <div class="imgslider-img">
                                <?php if (get_sub_field('slider_repeater_video')): ?>
                                    <video autoplay loop muted preload playsinline>
                                        <source src="<?php echo get_sub_field('slider_repeater_video') ?>" type="video/mp4">
                                    </video>
                                <?php else: ?>
                                    <?php 
                                    $image = get_sub_field('slider_repeater_image');
                                    if( !empty( $image ) ): ?>
                                        <img class="slider-poster-gif" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php 
                                    $image = get_sub_field('slider_repeater__poster_image');
                                    if( !empty( $image ) ): ?>
                                        <img class="slider-poster-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                <?php endif ?>
                           </div>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="img-inner-button text-center pb-50">
                <?php 
                $link = get_field('img_bottom_slider');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a data-fancybox class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="client-logo pt-50">
            <div class="container">
                <div class="client-logo-inner">
                   <?php
                    if( have_rows('client_logo_repeater') ):
                        while ( have_rows('client_logo_repeater') ) : the_row(); ?>
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
        </div>
    </section>

    <?php 
    $global_copy = get_field('global_copy');
    ?>
    <section class="global-section global-clone" style="background-image: url('<?php echo $global_copy['global_background_copy']; ?>')">
       <div class="d-flex container">
           <div class="global-img-cover cell-md-6">
               <div class="global-img-sliders-gl" dir="rtl">
                   <div class="mobile-show">
                    <h2><?php echo $global_copy['global_right_title'];?></h2>
                    <?php if ($global_copy['sub_title']): ?>
                        <p class="sub-title"><strong><?php echo $global_copy['sub_title'] ;?></strong></p>
                    <?php endif ?>
                    </div>
                <?php
                if( $global_copy ):?>
                    <div class="global-img-inner">
                        <div class="text-center">
                            <?php if($global_copy['global_background_copy']){ ?>
                            <div class="global-icon">
                                <img src="<?php echo $global_copy['image']['url']; ?>" alt="">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                endif;
                ?>
                </div>
            </div>
           <div class="global-content-cover-gl cell-md-6">
           <?php
            if(  $global_copy  ): ?>
                <div class="global-content-inner">
                    <h2><?php echo $global_copy['global_right_title'];?></h2>
                    <?php if ($global_copy['sub_title']): ?>
                        <p class="sub-title"><strong><?php echo $global_copy['sub_title'] ;?></strong></p>
                    <?php endif ?>
                    <?php echo $global_copy['global_right_content'];?>
                    <div class="btn-group">
                        <?php 
                        $link = $global_copy['global_right_button'];
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        <?php 
                        $link = $global_copy['global_right_link'];
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php 
            endif;
            ?>
        </div>
       </div>
    </section>
   
    <section class="case-study">
        <div class="container">
            <div class="case-study-wrapper row">
                <div class="case-study-text cell-lg-5 cell-md-6">
                    <?php if(get_field('case_title')){ ?><span class="sub-title"><?php the_field('case_title'); ?></span><?php } ?>
                    <?php if(get_field('case_main_title')){ ?><h2><?php the_field('case_main_title'); ?></h2><?php } ?>
                    <?php if(get_field('case_content')){ ?><p><?php the_field('case_content'); ?></p><?php } ?>
                    <?php 
                    $link = get_field('case_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <div class="btn-video">
                        <a href="<?php the_field('case_video_url'); ?>" class="btn" data-fancybox="">WATCH USE CASES</a>
                    </div>
                </div>
                <div class="case-study-video cell-md-6">
                    <div class="top-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap-min.png" alt="">
                    </div>
                    <div class="video-block">
                        <div class="video-block-inner">
                            <a href="<?php the_field('case_video_url'); ?>" data-fancybox="">
                                <img src="<?php the_field('case_video_poster_image'); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="bottom-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap2-min.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="global-section origin" style="background-image: url('<?php the_field('global_background'); ?>')">
       <div class="d-flex">
           <div class="global-img-cover cell-md-6">
               
                <div class="mobile-show">
                    <div class="global-content-cover cell-md-6">
                    <?php
                        if( have_rows('global_content_repeater') ):
                            while ( have_rows('global_content_repeater') ) : the_row(); ?>
                            <div class="global-content-inner">
                                <?php if(get_sub_field('global_right_title')){ ?><h2><?php the_sub_field('global_right_title');?></h2><?php } ?>
                                <?php if(get_sub_field('global_right_title_sub_title')){ ?><p class="sub-title"><strong><?php the_sub_field('global_right_title_sub_title');?></strong></p><?php } ?>
                            </div>
                        <?php endwhile;
                        endif;
                        ?>
                    </div>
                </div>
               <div class="global-img-slider" dir="rtl">
                <?php
                if( have_rows('global_content_repeater') ):
                    while ( have_rows('global_content_repeater') ) : the_row(); ?>
                       <div class="global-img-inner">
                           <div class="text-center">
                               <?php if(get_sub_field('global_icon')){ ?>
                               <div class="global-icon">
                                   <img src="<?php the_sub_field('global_icon');?>" alt="">
                               </div>
                               <?php } ?>
                               <?php if(get_sub_field('global_counter')){ ?>
                               <div class="global-number">
                                   <span><?php the_sub_field('global_counter');?></span>
                               </div>
                               <?php } ?>
                               <div class="global-img-title">
                                   <?php if(get_sub_field('global_image_title')){ ?><h4><?php the_sub_field('global_image_title');?></h4><?php } ?>
                                   <?php if(get_sub_field('global_image_content')){ ?><p><?php the_sub_field('global_image_content');?></p><?php } ?>
                               </div>
                           </div>
                       </div>
                    <?php endwhile;
                endif;
                ?>
                </div>
            </div>
           <div class="global-content-cover cell-md-6">
           <?php
            if( have_rows('global_content_repeater') ):
                while ( have_rows('global_content_repeater') ) : the_row(); ?>
                <div class="global-content-inner">
                    <?php if(get_sub_field('global_right_title')){ ?><h2><?php the_sub_field('global_right_title');?></h2><?php } ?>
                    <?php if(get_sub_field('global_right_title_sub_title')){ ?><p class="sub-title"><strong><?php the_sub_field('global_right_title_sub_title');?></strong></p><?php } ?>
                    <?php if(get_sub_field('global_right_content')){ ?><?php the_sub_field('global_right_content');?><?php } ?>
                    <div class="btn-group">
                        <?php 
                        $link = get_sub_field('global_right_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        <?php 
                        $link = get_sub_field('global_right_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
            endif;
            ?>
        </div>
       </div>
    </section>

    <section class="video-slider mobile-show">
        <div class="container">
            
            <?php if (get_field( 'home_testimonial_title' )): ?>
                <div class="text-center mobile">
                    <h3 class="title"><?php echo get_field( 'home_testimonial_title' ) ?></h3>
                </div>
            <?php endif ?>  
            
           <div class="d-flex">
            <div class="video-left">
               <?php
                if( have_rows('video_content_repeater') ):
                    while ( have_rows('video_content_repeater') ) : the_row(); ?>
                        <div class="video-left-inner">
                            <?php if(get_sub_field('video_content')){ ?><h3><?php the_sub_field('video_content') ?></h3><?php } ?>
                            <?php if(get_sub_field('testimonial_author_name')){ ?><h6>- <?php the_sub_field('testimonial_author_name') ?></h6><?php } ?>
                            <?php 
                            $link = get_sub_field('testimonial_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="video-right">
                <div class="text-center video-caption-top pb-20">
                    <?php if(get_field('video_poster_img')){ ?><img src="<?php the_field('video_poster_img'); ?>"/><?php } ?>
                    <?php if(get_field('video_url_home')){ ?>
                    <div class="video-right-inner">
                        <?php //echo do_shortcode( '[embedyt] '. get_field('video_url') . ' [/embedyt]' ); ?>
                        <a href="<?php the_field('video_url_home'); ?>" data-fancybox class="testimonial-play"></a>
                    </div>
                    <?php } ?>
                </div>                
            </div> 
            </div>   
        </div>
    </section>
    
    <section class="bolawrap-section" style="background-image: url('<?php the_field('bolawrap_mobile_background') ?>')">
        <div class="bolawrap-img">
            <?php if(get_field('bolawrap_background')){ ?><img src="<?php the_field('bolawrap_background') ?>" alt="" class="desktop-only"><?php } ?>
            <?php if(get_field('bolawrap_mobile_background')){ ?><img src="<?php the_field('bolawrap_mobile_background') ?>" alt="" class="mobile-only"><?php } ?>
        </div>
        <div class="bolawrap-content container">
            <div class="bolawrap-title section-title dark-bg">
               
               <div class="bolawrap-inner-title">
                   <?php if(get_field('bolawrap_title')){ ?>
                        <h2><?php the_field('bolawrap_title') ?></h2>
                   <?php } ?>
                   <div class="btn-group">
                       <?php 
                        $link = get_field('bolawrap_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                       
                       <?php 
                        $link = get_field('bolawrap_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                   </div>
               </div>
               
            </div>
            <div class="bolawrap-inner-content">
                <ol>
               <?php
                if( have_rows('bolawrap_content_repeater') ):
                    while ( have_rows('bolawrap_content_repeater') ) : the_row(); ?>
                        <li>
                            <?php if(get_sub_field('bolawrap_inner_title')){ ?><h4><?php the_sub_field('bolawrap_inner_title') ?></h4><?php } ?>
                            <?php if(get_sub_field('bolawrap_inner_content')){ ?><p><?php the_sub_field('bolawrap_inner_content') ?></p><?php } ?>
                        </li>
                    <?php endwhile;
                endif; ?>
                </ol>
            </div>
        </div>
    </section>
    
     <section class="news-cover" style="display: none;">
        <div class="container">
            <div class="section-title text-center">
               <h3><b>Recent Highlights</b></h3>
           </div>
           <div class="d-flex news-flex justify-content-center">
               <div class="news-item">
                   <div class="news-header">
                       <h4>
                           <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/news.png" alt=""></span>Recent News
                       </h4>
                   </div>
                   <div class="news-inner">
                      <?php
                       $categories = get_categories( array(
                           'orderby' => 'name',
                           'order'   => 'ASC',
                           'hide_empty'      => true,
                       ) );
                       //foreach( $categories as $category ) {
                       $post_list = get_posts(array(
                          'showposts' => 8,
                          'post_type' => 'post',
                          'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'news' //pass your term name here
                              )
                            ))
                           );
                        ?>
                         <?php //print_r($post_list); die;?>
                         <?php foreach ( $post_list as $category_name ) { ?>
                             <p><a href="<?php echo get_the_permalink($category_name->ID); ?>"><?php echo wp_trim_words($category_name->post_title,9,'[...]'); ?></a></p>
                         <?php } ?>
                       <div class="text-center">
                           <?php
                           $category_link = get_category_link(5);
                           ?>
                           <a href="<?php echo esc_url( $category_link ); ?>" class="btn">View All</a>
                       </div>
                       <?php //} ?>
                   </div>
                   <div class="news-footer">
                       <div class="text-right">
                           <p>Share latest news with friends</p>
                       </div>
                   </div>
               </div>
               <div class="news-item">
                   <div class="news-header">
                       <h4>
                           <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/press.png" alt=""></span>Press Releases
                       </h4>
                   </div>
                   <div class="news-inner">
                      <?php
                       $categories = get_categories( array(
                           'orderby' => 'name',
                           'order'   => 'ASC',
                           'hide_empty'      => true,
                       ) );
                       //foreach( $categories as $category ) {
                       $post_list = get_posts(array(
                          'showposts' => 8,
                          'post_type' => 'post',
                          'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'press-release' //pass your term name here
                              )
                            ))
                           );
                        ?>
                          <?php foreach ( $post_list as $category_name ) { ?>
                              <p><a href="<?php echo get_the_permalink($category_name->ID); ?>"><?php echo wp_trim_words($category_name->post_title,9,'[...]'); ?></a></p>
                          <?php } ?>
                       <?php //} ?>
                       <?php
                        $category_link = get_category_link(6);
                       ?>
                       <div class="text-center">
                           <a href="<?php echo esc_url( $category_link ); ?>" class="btn">View All</a>
                       </div>
                   </div>
               </div>
               <div class="news-item">
                   <div class="news-header">
                       <h4>
                           <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/force-news.png" alt=""></span>Use of Force News
                       </h4>
                   </div>
                   <div class="news-inner">
                      <?php
                       $categories = get_categories( array(
                           'orderby' => 'name',
                           'order'   => 'ASC',
                           'hide_empty'      => true,
                       ) );
                       //foreach( $categories as $category ) {
                       $post_list = get_posts(array(
                          'showposts' => 8,
                          'post_type' => 'post',
                          'tax_query' => array(
                          array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'force-news' //pass your term name here
                              )
                            ))
                           );
                        ?>
                          <?php foreach ( $post_list as $category_name ) { ?>
                              <p><a href="<?php echo get_the_permalink($category_name->ID); ?>"><?php echo wp_trim_words($category_name->post_title,9,'[...]'); ?></a></p>
                          <?php } ?>
                       <?php //} ?>
                       <?php
                        $category_link = get_category_link(7);
                       ?>
                       <div class="text-center">
                           <a href="<?php echo esc_url( $category_link ); ?>" class="btn">View All</a>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </section>
        
    <section class="news-cover sec-recent">
        <div class="container">
           <?php if(get_field('recent_title')){ ?>
               <div class="section-title text-center">
                   <h3><b><?php the_field('recent_title') ?></b></h3>
               </div>
           <?php } ?>
           <div class="d-flex news-flex justify-content-center">
              <?php
              if( have_rows('block_repeater') ):
                while ( have_rows('block_repeater') ) : the_row(); ?>
                   <div class="news-item">
                       <?php if(get_sub_field('recent_innertitle')){ ?>
                           <div class="news-header">
                               <h4>
                                   <span><img src="<?php the_sub_field('recent_icon') ?>" alt=""></span><?php the_sub_field('recent_innertitle') ?>
                               </h4>
                           </div>
                       <?php } ?>
                       <?php if(!get_sub_field('post_select_box')){ ?>
                           <div class="news-inner">
                               <div class="news-inner-scroll">
                                <?php
                                  if( have_rows('recent_conent_repeater') ):
                                    while ( have_rows('recent_conent_repeater') ) : the_row(); ?>

                                    <?php if(get_sub_field('recentpost_title')){ ?>
                                        <p><a target="_blank" href="<?php the_sub_field('recentpost_url'); ?>"><?php the_sub_field('recentpost_title'); ?></a></p>
                                    <?php } ?>
                                    <?php endwhile; endif; ?>
                               </div>
                               <div class="text-center">
                                   <?php 
                                    $link = get_sub_field('recent_button');
                                    if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                   ?>
                                   <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                   <?php endif; ?>
                               </div>
                           </div>
                       <?php }else{ ?>
                            <div class="news-inner">
                            <?php
                               $categories = get_categories( array(
                                   'orderby' => 'name',
                                   'order'   => 'ASC',
                                   'hide_empty'      => true,
                               ) );
                               //foreach( $categories as $category ) {
                               $post_list = get_posts(array(
                                  'showposts' => 3,
                                  'post_type' => 'post',
                                  'tax_query' => array(
                                  array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'press-releases' //pass your term name here
                                      )
                                    ))
                                   );
                                ?>
                                <div class="news-inner-scroll">
                                  <?php foreach ( $post_list as $category_name ) { ?>
                                      <p><a href="<?php echo get_the_permalink($category_name->ID); ?>"><?php echo wp_trim_words($category_name->post_title,9,'...'); ?></a></p>
                                  <?php } ?>
                                </div>
                               <?php
                                $category_link = get_category_link(6);
                               ?>
                               <div class="text-center">
                                   <a href="<?php echo esc_url( $category_link ); ?>" class="btn">View All</a>
                               </div>
                                </div>
                       <?php } ?>
                       <div class="news-footer">
                           <div class="text-right">
                               <div class="d-flex align-item-center justify-content-end">
                                   <p>Share latest news with friends</p>
                                   <?php $i = 0;
                                   if( have_rows('recent_conent_repeater') ):
                                    while ( have_rows('recent_conent_repeater') ) : the_row(); ?>
                                    <?php if($i == 0){ ?>
                                    <ul>
                                       <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_sub_field('recentpost_url'); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                       <li><a target="_blank" href="https://twitter.com/share?url=<?php the_sub_field('recentpost_url'); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <?php } $i++;?>
                                    <?php endwhile; endif; ?>
                               </div>                               
                           </div>
                       </div>
                   </div>               
               <?php endwhile; endif; ?>
           </div>
        </div>
    </section>
    
    <section class="bolawrap-cta force-margin-0">
        <div class="container">
            <div class="cta-wrapper">
                <h3><?php the_field('cta_title') ?></h3>
                <div class="btn-group">
                    <?php 
                    $link = get_field('cta_button');
                    if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('cta_button_link');
                    if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie_light.min.js"></script>
<script>
    jQuery( document ).ready(function() {
        document.querySelector('.hero-img video').defaultPlaybackRate = 1.0;
        document.querySelector('.hero-img video').play();

        /* now play three times as fast just for the heck of it */
        document.querySelector('.hero-img video').playbackRate = 1.5;
        
        /* Video section - content slider */
        if(jQuery('.video-left').length){
            jQuery('.video-left').slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              speed: 1000,
              pauseOnFocus: false,
              arrows: false,
              adaptiveHeight: false,
              autoplay: true,
              autoplaySpeed: 3000,
            })
        }
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('hero-animation'), // Required
            path: '<?= get_site_url(); ?>/wp-content/themes/bolawrap/assets/js/data.json', // Required
            renderer: 'svg', // Required
            loop: true, // Optional
            autoplay: true // Optional
        })
         
        if(jQuery('.global-img-slider').length){
            jQuery('.global-img-slider').slick({
              dots: true,
              arrows: false,
              speed: 500,
              slidesToShow: 2,
              slideToScroll: 1,
              rtl: true,
              focusOnSelect: true,
              autoplay: true,
              autoplaySpeed: 5000,
              asNavFor: '.global-content-cover',
                responsive: [
                {
                  breakpoint: 1199,
                  settings: {
                    arrows: false,
                    slidesToShow: 1,
                  }
                }
              ]
            });
        }
        
        if(jQuery('.global-content-cover').length){
            jQuery('.global-content-cover').slick({
              dots: false,
              arrows: false,
              fade: true,
              speed: 800,
              slidesToShow: 1,
              slideToScroll: 1,
              asNavFor: '.global-img-slider'
            });
        }
        jQuery(".global-content-cover").slick('slickGoTo', 0, true);
        
        
        if(jQuery('.img-inner-slider').length){
            jQuery('.img-inner-slider').slick({
              dots: false,
              arrows: false,
              speed: 1000,
              slidesToShow: 1,
              draggable: false,
              centerMode: true,
              infinite: true,
              focusOnSelect: true,
              slideToScroll: 1,
              responsive: [
                  {
                  breakpoint: 1439,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    draggable: true,
                    slidesToShow: 1,
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    draggable: true,
                    slidesToShow: 1,
                  }
                },
                {
                  breakpoint: 567,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    draggable: true,
                    slidesToShow: 1,
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    draggable: true,
                    slidesToShow: 1,
                  }
                }
              ]
            });
        }
        
    });
    
</script>

<?php get_footer(); ?>