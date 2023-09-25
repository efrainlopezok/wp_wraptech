<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<!-- banner area part -->
<section class="hero-section dark-bg">
    <div id="hero-animation"></div>
    <?php if(get_field('background_image')){ ?>
        <div class="hero-img">
              <img src="<?php the_field('background_image') ?>" alt="">
        </div>
    <?php } ?>
    <div class="hero-caption">
        <div class="container">
           <div class="hero-caption-inner">
            <?php if(get_field('background_title')){ ?><h1><?php the_field('background_title') ?></h1><?php } ?>
            <?php if(get_field('background_title_content')){ ?><p><?php the_field('background_title_content') ?></p><?php } ?>
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
</section>
<!-- content area part -->
<div class="main-content">
    <!-- content area part --> 
    <section class="video-slider">
        <div class="container">
           <div class="d-flex">
            <div class="video-left">
               <?php
                if( have_rows('video_content_repeater') ):
                    while ( have_rows('video_content_repeater') ) : the_row(); ?>
                        <div class="video-left-inner">
                            <?php if(get_sub_field('video_content')){ ?><h3><?php the_sub_field('video_content') ?></h3><?php } ?>
                            <?php if(get_sub_field('testimonial_author_name')){ ?><h6>- <?php the_sub_field('testimonial_author_name') ?></h6><?php } ?>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="video-right">
                <div class="video-right-inner">
                    <?php echo do_shortcode( '[embedyt] '. get_field('video_url') . ' [/embedyt]' ); ?>
                </div>
            </div> 
            </div>   
        </div>
    </section>
    <section class="product-cover">
        <div class="container">
          <div class="d-flex">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover">
                    <a href="javascript:;" id="product_left_image" class="target_img active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_2" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_3" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_4" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_5" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <?php 
                    $image = get_field('product_left_image');
                    if( !empty( $image ) ): ?>
                        <img class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="product-content">
                       <div class="product-content-item active" rel="product_left_image">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('product_left_content')){ ?><?php the_field('product_left_content') ?><?php } ?>
                              <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_2">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php the_field('product_left_content_5') ?>
                              <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_3">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php the_field('product_left_content_4') ?>
                              <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_4">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php the_field('product_left_content_2') ?>
                              <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_5">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php the_field('product_left_content_3') ?>
                              <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                   </div>
               </div>
               <div class="product-right product-main-inner">
                   <div class="top-product">
                       <div class="top-product-img active product-img-cover">
                            <a href="javascript:;" id="product_top_image"  class="target_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt=""></a>
                            <?php 
                            $image = get_field('product_top_image');
                            if( !empty( $image ) ): ?>
                                <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="xs_top_content mobile-only">
                           <div class="xs_top_svg">
                               <svg id="svg1">
                                  <line id="line" x1="0" y1="0" x2="0" y2="100%"></line>
                               </svg>
                           </div>
                           <?php if(get_field('product_top_content')){ ?><?php the_field('product_top_content') ?><?php } ?>
                           <?php 
                            $link = get_field('product_bottom_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                   </div>
                   <div class="product-content">                       
                       <div class="product-content-item active" rel="product_top_image">
                            <div class="product-top-svg">
                                <svg id="svg1">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                               <?php if(get_field('product_top_content')){ ?><?php the_field('product_top_content') ?><?php } ?>
                               <?php 
                                $link = get_field('product_bottom_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                       </div>
                       <?php if(get_field('product_bottom_content')){ ?>
                           <div class="product-content-item" rel="product_bottom_image">
                               <?php the_field('product_bottom_content') ?>
                           </div>
                       <?php } ?>                       
                   </div>
                   <?php if(get_field('product_bottom_video')){ ?>
                       <div class="product_bottom_img">
                           <img src="<?php the_field('product_bottom_video') ?>" alt="">
                       </div>
                   <?php } ?>  
                   <?php if(get_field('product_bottom_image')){ ?>
                   <div class="bottom-product">
                       <div class="bottom-product-img product-img-cover">
                        <a href="javascript:;" id="product_bottom_image"  class="target_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt=""></a>
                        <?php 
                        $image = get_field('product_bottom_image');
                        if( !empty( $image ) ): ?>
                            <img class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="xs_bottom_content">
                           <?php if(get_field('product_bottom_content')){ ?><?php the_field('product_bottom_content') ?><?php } ?>
                           <?php 
                            $link = get_field('product_bottom_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                   </div>
                   <?php } ?>
               </div>
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
    
    
    
    
    <section class="news-cover">
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
                       <div class="news-inner">
                            <?php
                              if( have_rows('recent_conent_repeater') ):
                                while ( have_rows('recent_conent_repeater') ) : the_row(); ?>
                                <?php if(get_sub_field('recentpost_title')){ ?>
                                    <p><a target="_blank" href="<?php the_sub_field('recentpost_url'); ?>"><?php the_sub_field('recentpost_title'); ?></a></p>
                                <?php } ?>
                                <?php endwhile; endif; ?>
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
    <section class="client-logo">
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
    </section>
    <section class="bolawrap-section" style="background-image: url('<?php the_field('bolawrap_mobile_background') ?>')">
        <div class="bolawrap-img">
            <?php if(get_field('bolawrap_background')){ ?><img src="<?php the_field('bolawrap_background') ?>" alt="" class="desktop-only"><?php } ?>
            <?php if(get_field('bolawrap_mobile_background')){ ?><img src="<?php the_field('bolawrap_mobile_background') ?>" alt="" class="mobile-only"><?php } ?>
        </div>
        <div class="bolawrap-content container">
            <div class="bolawrap-title section-title dark-bg">
               <?php if(get_field('bolawrap_title')){ ?>
               <div class="bolawrap-inner-title">
                   <h2><?php the_field('bolawrap_title') ?></h2>
               </div>
               <?php } ?>
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
    <section id="contact" class="form-cover">
        <div class="container">
           <!-- <div class="section-title text-center">
               <h3><b>Let's Connect!</b></h3>
           </div> -->
			<div class="typeform-widget" data-url="https://judahmeiteles.typeform.com/to/QrBE1v" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
        </div>
    </section>
</div> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie_light.min.js"></script>
<script>
    /* Video section - content slider */
    if($('.video-left').length){
        $('.video-left').slick({
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
</script>

<?php get_footer(); ?>