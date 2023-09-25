<?php /* Template Name: Purchase Template */ ?>
<?php get_header(); ?>
<div class="purchase-page-cover">
    <section class="purchase-banner" style="background-image: url('<?php the_field('purchase_background_image'); ?>')">
		<div id="hero-animation"></div> 
        <div class="container">
            <?php if(get_field('purchase_banner_title')){ ?>
            <div class="purchase-banner-content"> 
                <h1><?php the_field('purchase_banner_title'); ?></h1>
            </div>
            <?php } ?>
        </div>
    </section>

    <section class="purchase-steps">
        <div class="container">
            <div class="purchase-steps-wrapper row">
               <?php
                if( have_rows('three_blocks_repeater') ):
                while ( have_rows('three_blocks_repeater') ) : the_row(); ?>
                <div class="steps-block cell-md-4 text-center">
                    <div class="text-block">
                        <?php if(get_sub_field('three_block_icon')){ ?>
                            <div class="purchase-icon">
                                <img src="<?php the_sub_field('three_block_icon') ?>" alt="">
                            </div>
                        <?php } ?>
                        <?php if(get_sub_field('three_block_title')){ ?><h3><?php the_sub_field('three_block_title') ?></h3><?php } ?>
                        <?php if(get_sub_field('three_block_content')){ ?><p><?php the_sub_field('three_block_content') ?></p><?php } ?>
                    </div>
                    <?php 
                    $link = get_sub_field('three_block_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="product-cover">
        <div class="container">
		  <div class="section-header text-center">
                <h3 class="title">Our Products</h3>
          </div>
          <div class="d-flex">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover">
                    <a href="javascript:;" id="product_left_image" class="target_img">
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
					<a href="javascript:;" id="product_left_image_6" class="target_img active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <?php 
                    $image = get_field('product_left_image');
                    if( !empty( $image ) ): ?>
                        <img class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="product-content">
                       <div class="product-content-item" rel="product_left_image">
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
						<div class="product-content-item active" rel="product_left_image_6">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php the_field('product_left_content_6') ?>
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
                       <div class="product-content-item" rel="product_top_image">
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
                            <video autoplay loop muted playsinline>
                                <source src="<?php the_field('product_bottom_video') ?>" type="video/mp4">
                            </video>
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

    <section class="accessories">
        <div class="container">
            <?php if(get_field('accessories_title')){ ?>
            <div class="section-header text-center">
                <h3 class="title"><?php the_field('accessories_title') ?></h3>
            </div>
            <?php } ?>
            <div class="accessories-wrapper row">
               <?php
                if( have_rows('accessories_block_repeater') ):
                while ( have_rows('accessories_block_repeater') ) : the_row(); ?>
                <div class="accessories-block cell-md-4">
                    <div class="accessories-img">
						<?php 
						$image = get_sub_field('accessories_block_image');
						if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                    </div>
                    <h3><?php the_sub_field('accessories_block_title') ?></h3>
                    <p><?php the_sub_field('accessories_block_content') ?></p>
                </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="video-slider inner-video-slider">
        <div class="container">
			<?php if (get_field( 'testimonial_title' )): ?>
                <div class="section-header text-center">
                    <h3 class="title"><?php echo get_field( 'testimonial_title' ) ?></h3>
                </div>
            <?php endif ?>
           <div class="d-flex align-items-center">
            <div class="video-left">
               <?php
                if( have_rows('purchase_video_content_repeater') ):
                    while ( have_rows('purchase_video_content_repeater') ) : the_row(); ?>
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
					<?php if(get_field('video_poster_image_t')){ ?><img src="<?php the_field('video_poster_image_t'); ?>"/><?php } ?>
					<?php if(get_field('video_url_purchase')){ ?>
					<div class="video-right-inner">
						<?php //echo do_shortcode( '[embedyt] '. get_field('video_url') . ' [/embedyt]' ); ?>
						<a href="<?php the_field('video_url_purchase'); ?>" data-fancybox class="testimonial-play"></a>
					</div>
					<?php } ?>
				</div>                
            </div> 
            </div>   
        </div>
    </section>

    <section class="bolawrap-cta purchase-cta">
        <div class="container">
            <div class="cta-wrapper">
                <h3><?php the_field('cta_title',get_option('page_on_front')); ?></h3>
                <div class="btn-group">
					<?php 
					$link = get_field('cta_button',get_option('page_on_front'));
					if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					<?php 
					$link = get_field('cta_button_link',get_option('page_on_front'));
					if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn-link" href="https://wraptechnologies.com/training" target="">Get Trained</a>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="client-logo client-logo-padding">
        <div class="container">
            <div class="client-logo-inner">
               <?php
                if( have_rows('client_logo_repeater',get_option('page_on_front')) ):
                    while ( have_rows('client_logo_repeater',get_option('page_on_front')) ) : the_row(); ?>
                        <div class="client-item grayscale">
                         <?php
                            $lightbox_checkbox = get_sub_field('lightbox_checkbox',get_option('page_on_front'));
                            if( !$lightbox_checkbox ){ ?>
                              <?php if(get_sub_field('client_logo_url',get_option('page_on_front'))){ ?>
                               <a href="<?php the_sub_field('client_logo_url',get_option('page_on_front')) ?>" target="_blank">
                                   <?php } ?> 
                                          <?php 
                                            $image = get_sub_field('client_image',get_option('page_on_front'));
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?> 
                                   <?php if(get_sub_field('client_logo_url',get_option('page_on_front'))){ ?>
                               </a>
                               <?php } ?>
                           <?php }else{ ?>
                               <?php if(get_sub_field('lightbox_video_url',get_option('page_on_front'))){ ?>
                                   <a data-fancybox href="<?php the_sub_field('lightbox_video_url',get_option('page_on_front')) ?>">
                                       <?php } ?> 
                                              <?php 
                                                $image = get_sub_field('client_image',get_option('page_on_front'));
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?> 
                                       <?php if(get_sub_field('lightbox_video_url',get_option('page_on_front'))){ ?>
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
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie_light.min.js"></script>
<script>
    jQuery( document ).ready(function() {
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
    });

</script>
<?php get_footer(); ?>