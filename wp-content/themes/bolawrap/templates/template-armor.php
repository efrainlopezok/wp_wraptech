<?php 
/* 
    Template Name: Armor Template 
*/ 
?>
<style>
    .page-template-template-armor section.hero-section.dark-bg.armor:before{
        background-color: rgb(2 30 46 / 62%) !important;
    }
    .hero-section.armor .hero-caption .btn-group{
        margin-top: 55px;
    }
    .btn-goup-big .btn-big:first-child a{
        border-radius: 0px 0px 0px 5px;
    }
    .btn-goup-big .btn-big:last-child a{
        border-radius: 0px 0px 5px 0px;
    }
    .product_bottom_img iframe {
        border: 15px solid #f0f6f7;
        border-radius: 15px;
        box-shadow: 0 11px 32px 0 rgba(89,89,89,.52);
        position: relative;
        top: -95px;
        width: 560px !important;
        max-width: 100%;
        height: 310px !important;
    }
    @media(max-width:767px){
        .hero-section.armor .hero-caption .btn-group{
            margin-top: 30px;
        }
        .product_bottom_img iframe{
            height: 50vw !important;
            top: 0;
        }
    }
</style>
<?php get_header(); ?>
<section class="hero-section dark-bg armor">
    
    <div class="hero-img">
        <video autoplay loop muted preload playsinline>
          <source src="<?php echo the_field('background_video_ar'); ?>" type="video/mp4">
        </video>
    </div>

    <div class="hero-caption">
        <div class="container">
            <div class="hero-caption-inner text-center">
                <?php if(get_field('title_ar')){ ?><h1><?php the_field('title_ar') ?></h1><?php } ?>
                <?php if(get_field('content_ar')){ ?><p><?php the_field('content_ar') ?></p><?php } ?>
                <div class="video-mobile">
                <video autoplay loop muted preload playsinline>
                    <source src="<?php echo the_field('background_video_ar'); ?>" type="video/mp4">
                </video>
                </div>
                <div class="btn-group">
                    <?php 
                    $link = get_field('hero_button_simple_ar');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('hero_button_play_ar');
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
   
</section>
<?php $staus_block = get_field( 'hero_button_play_ar' ); ?>
<?php if (!$staus_block): ?>
    <section class="purchase-steps armor">
        <div class="container">
            <div class="purchase-steps-wrapper row">
               <?php
                if( have_rows('blocks_ar') ):
                while ( have_rows('blocks_ar') ) : the_row(); ?>
                <div class="steps-block cell-md-6 text-center">
                    <div class="text-block">
                        <?php if(get_sub_field('icon')){ ?>
                            <div class="purchase-icon">
                                <img src="<?php the_sub_field('icon') ?>" alt="">
                            </div>
                        <?php } ?>
                        <?php if(get_sub_field('title')){ ?><h3><?php the_sub_field('title') ?></h3><?php } ?>
                        <?php if(get_sub_field('content')){ ?><p><?php the_sub_field('content') ?></p><?php } ?>
                    </div>
                    <?php 
                    $link = get_sub_field('button');
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
<?php endif ?>

<section class="tabs-armor">
    <div class="container">
        <h2>Choose your Shield</h2>
        <div class="btn-goup-big">
            <div class="btn-big tab-active">
                <a href="javascript:;" class="link-tab-left" data-tab="cont-tab-left">Tactical<br>Shield III</a>  
                <div  class="target_img active">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                </div>
                <!-- <span>Stop Shotgun Threats</span>  -->
            </div>
            <div class="btn-big">
                <a href="javascript:;" class="link-tab-right" data-tab="cont-tab-right">Patrol<br>Shield IIIA</a>  
                <div  class="target_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">  
                </div>
                <!-- <span>Stop Shotgun Threats a</span>  -->
            </div>
        </div> 
        <div class="sub-cont">
            <div class="cont-tab-left sub-text-big cont-tab-armor tab-active">
                <span>Stops Rifle Threats</span> 
            </div>
            <div class="cont-tab-right sub-text-big cont-tab-armor">
                <span>Stops Pistol Threats</span> 
            </div>
        </div>        
    </div>
</section>

<section class="tabs-armor tabs-left hide">
    <div class="btn-goup-big">
        <div class="btn-big tab-active">
            <a href="javascript:;" class="link-tab-left" data-tab="cont-tab-left">Tactical<br>Shield III</a>  
        </div>
        <div class="btn-big">
            <a href="javascript:;" class="link-tab-right" data-tab="cont-tab-right">Patrol<br>Shield IIIA</a>  
        </div>
    </div>       
</section>

<div class="cont-tab-left cont-tab-armor tab-active">
    <section class="product-cover armor-title">
        <div class="container">
            <div class="d-flex">
                <!-- <div class="product-left product-main-inner">
                    <h3><?php //echo get_field( 'content_left_ar' ); ?></h3>
                    <p><?php //echo get_field( 'content_left_text_ar' ); ?></p>
                </div>
                <div class="product-right product-main-inner">
                    <h3><?php //echo get_field( 'content_right_ar' ); ?></h3>
                    <p><?php //echo get_field( 'content_right_text_ar' ); ?></p>
                </div> -->
                <div class="product-center product-main">
                    <?php echo get_field( 'content_center_text_ar' ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="product-cover armor">
        <div class="container">
            <a href="javascript:;" id="product_top_image" class="target_img hide"></a>

            <div class="wrap-points">
                <div class="d-flex first-flex desk">
                   <div class="product-left product-main-inner">
                      <div class="product-left-img product-img-cover active">
                        <a href="javascript:;" id="product_left_image" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_2" class="target_img active">
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
                        <a href="javascript:;" id="product_left_image_6" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_7" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_8" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_9" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_10" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <?php 
                        $image_back = get_field('back_image_ar');
                        if( !empty( $image_back ) ): ?>
                            <img class="product-main-img img-back" src="<?php echo esc_url($image_back['url']); ?>" alt="<?php echo esc_attr($image_back['alt']); ?>" />
                        <?php endif; ?>
                        <?php 
                        $image = get_field('front_image_ar');
                        if( !empty( $image ) ): ?>
                            <img class="product-main-img img-front" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
                                  <?php if(get_field('content_1_ar')){ ?><?php the_field('content_1_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_2">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation active">
                                  <?php if(get_field('content_2_ar')){ ?><?php the_field('content_2_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_3">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_3_ar')){ ?><?php the_field('content_3_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_4">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_4_ar')){ ?><?php the_field('content_4_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_5">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_5_ar')){ ?><?php the_field('content_5_ar') ?><?php } ?>
                                </div>
                            </div>
                            <div class="product-content-item" rel="product_left_image_6">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_6_ar')){ ?><?php the_field('content_6_ar') ?><?php } ?>
                                </div>
                            </div>
                           <div class="product-content-item" rel="product_left_image_7">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_7_ar')){ ?><?php the_field('content_7_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_8">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_8_ar')){ ?><?php the_field('content_8_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_9">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_9_ar')){ ?><?php the_field('content_9_ar') ?><?php } ?>
                                </div>
                           </div>
                            <div class="product-content-item" rel="product_left_image_10">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('content_10_ar')){ ?><?php the_field('content_10_ar') ?><?php } ?>
                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="product-right product-main-inner">
                       <div class="top-product">
                           <div class="top-product-img active product-img-cover">
                                <?php 
                                $image = get_field('product_top_image');
                                if( !empty( $image ) ): ?>
                                    <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                       </div>
                   </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="d-flex first-flex mobile-front">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover active">
                    <a href="javascript:;" id="product_left_image" class="target_img">
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
                    $image = get_field('front_image_ar');
                    if( !empty( $image ) ): ?>
                        <img class="product-main-img img-front" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
                              <?php if(get_field('content_1_ar')){ ?><?php the_field('content_1_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_3">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_3_ar')){ ?><?php the_field('content_3_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_4">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_4_ar')){ ?><?php the_field('content_4_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_5">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_5_ar')){ ?><?php the_field('content_5_ar') ?><?php } ?>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="product-right product-main-inner">
                   <div class="top-product">
                       <div class="top-product-img active product-img-cover">
                            <?php 
                            $image = get_field('product_top_image');
                            if( !empty( $image ) ): ?>
                                <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
            </div>

            <div class="d-flex first-flex mobile-back">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover active">
                    <a href="javascript:;" id="product_left_image_2" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_6" class="target_img active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                     <a href="javascript:;" id="product_left_image_7" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                     <a href="javascript:;" id="product_left_image_8" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_9" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_10" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <?php 
                    $image_back = get_field('back_image_ar');
                    if( !empty( $image_back ) ): ?>
                        <img class="product-main-img img-back" src="<?php echo esc_url($image_back['url']); ?>" alt="<?php echo esc_attr($image_back['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="product-content">
                        <div class="product-content-item" rel="product_left_image_2">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_2_ar')){ ?><?php the_field('content_2_ar') ?><?php } ?>
                            </div>
                        </div>
                        <div class="product-content-item active" rel="product_left_image_6">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_6_ar')){ ?><?php the_field('content_6_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_7">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_7_ar')){ ?><?php the_field('content_7_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_8">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_8_ar')){ ?><?php the_field('content_8_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_9">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_9_ar')){ ?><?php the_field('content_9_ar') ?><?php } ?>
                            </div>
                       </div>
                        <div class="product-content-item" rel="product_left_image_10">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('content_10_ar')){ ?><?php the_field('content_10_ar') ?><?php } ?>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="product-right product-main-inner">
                   <div class="top-product">
                       <div class="top-product-img active product-img-cover">
                            <?php 
                            $image = get_field('product_top_image');
                            if( !empty( $image ) ): ?>
                                <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
            </div>

            <!-- End Mobile -->
        </div>
    </section>

    <section class="product-cover before-sec">
        <div class="container before-row">
            <div class="d-flex">
                <div class="product-left product-main-inner">
                    <div class="btn-group">
                        <?php 
                        $button_ar = get_field('button_ar');
                        if( !empty( $button_ar ) ): ?>
                            <a class="btn" href="<?php echo esc_url($button_ar['url']); ?>" target="<?php echo esc_url($button_ar['target']); ?>">Request Quote</a>
                        <?php endif; ?>
                        <?php 
                        $button_play_ar = get_field('button_play_ar');
                        if( !empty( $button_play_ar ) ): ?>
                            <a class="btn-play" data-fancybox="" href="<?php echo esc_url($button_play_ar['url']); ?>" target="_self"><?php echo $button_play_ar['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="product-right product-main-inner">
                    <?php if(get_field('video_ar')){ ?>
                       <div class="product_bottom_img frame1">
                       <?php
                            $embed_video = get_field('embed_video');
                            echo $embed_video;
                         ?>
                        <!-- <video autoplay loop muted preload playsinline>
                              <source src="<?php the_field('video_ar') ?>" width="450" height="250" type="video/mp4">
                        </video> -->
                       </div>
                   <?php } ?>    
                </div>
            </div>
        </div>
    </section>

    <section class="bolawrap-section armor" style="background-image: url('<?php the_field('background_mob_ar') ?>')">
        <div class="bolawrap-img">
            <?php if(get_field('background_desk_ar')){ ?><img src="<?php the_field('background_desk_ar') ?>" alt="" class="desktop-only"><?php } ?>
            <?php if(get_field('background_mob_ar')){ ?><img src="<?php the_field('background_mob_ar') ?>" alt="" class="mobile-only"><?php } ?>
        </div>
        <div class="bolawrap-content container">
            <div class="bolawrap-title section-title dark-bg">
               
               <div class="bolawrap-inner-title">
                   <?php if(get_field('title_bolawrap_ar')){ ?>
                        <h2><?php the_field('title_bolawrap_ar') ?></h2>
                   <?php } ?>
                   <?php if(get_field('content_left_bolawrap_ar')){ ?>
                        <?php the_field('content_left_bolawrap_ar') ?>
                   <?php } ?>
               </div>
               
            </div>
            <div class="bolawrap-inner-content">
                <ol>
               <?php
                if( have_rows('content_right') ):
                    while ( have_rows('content_right') ) : the_row(); ?>
                        <li>
                            <?php if(get_sub_field('content')){ ?><p><?php the_sub_field('content') ?></p><?php } ?>
                            <?php if(get_sub_field('image')){ ?><img src="<?php the_sub_field('image') ?>" alt=""><?php } ?>
                        </li>
                    <?php endwhile;
                endif; ?>
                    <?php if(get_field('before_note')){ ?><li><p><?php the_field('before_note') ?></p></li><?php } ?>
                </ol>
                
                <?php if(get_field('note_ra')){ ?><span><?php the_field('note_ra') ?></span><?php } ?>
            </div>
        </div>
    </section>

    <section class="faq armor">
        <div class="container">
            <div class="section-header text-center">
                <h3 class="title">FAQ</h3>
            </div>
            <div class="wrap-acordion">
                <?php $acordions = get_field( 'acordions_ar' ); ?>
                <?php $num_items = count( get_field('acordions_ar') ); ?>
                <?php $count = 1; ?>
                <?php foreach ($acordions as $item): ?>
                    <?php if ($count == 1 ): ?>
                        <div class="wrap-col">
                    <?php endif ?>
                        <div>
                            <div class="accordion"><h5><?php echo $item['title_acor'] ?></h5></div>
                            <div class="panel"><p><?php echo $item['content_ac'] ?></p></div>
                        </div>
                    <?php $count++; ?>
                    <?php if ($count == 7 ): ?>
                        </div>
                        <div class="wrap-col">
                    <?php endif ?>
                    <?php if ($count == 12 ): ?>
                        </div>
                        <?php $count = 1; ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>

<div class="cont-tab-right cont-tab-armor">
    <section class="product-cover armor-title">
        <div class="container">
            <div class="d-flex">
                <!-- <div class="product-left product-main-inner">
                    <h3><?php //echo get_field( 'tab_two_content_left_ar' ); ?></h3>
                    <p><?php //echo get_field( 'tab_two_content_left_text_ar' ); ?></p>
                </div>
                <div class="product-right product-main-inner">
                    <h3><?php //echo get_field( 'tab_two_content_right_ar' ); ?></h3>
                    <p><?php //echo get_field( 'tab_two_content_right_text_ar' ); ?></p>
                </div> -->
                <div class="product-center product-main">
                    <?php echo get_field( 'tab_two_content_center_text_ar' ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="product-cover armor">
        <div class="container">
            <a href="javascript:;" id="product_top_image" class="target_img hide"></a>

            <div class="wrap-points">
                <div class="d-flex first-flex desk">
                   <div class="product-left product-main-inner">
                      <div class="product-left-img product-img-cover active">
                        <a href="javascript:;" id="product_left_image_11" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_12" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_13" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_14" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_15" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_16" class="target_img active">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_17" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_18" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                        <a href="javascript:;" id="product_left_image_19" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                       
                        <?php 
                        $image_back = get_field('tab_two_back_image_ar');
                        if( !empty( $image_back ) ): ?>
                            <img class="product-main-img img-back" src="<?php echo esc_url($image_back['url']); ?>" alt="<?php echo esc_attr($image_back['alt']); ?>" />
                        <?php endif; ?>
                        <?php 
                        $image = get_field('tab_two_front_image_ar');
                        if( !empty( $image ) ): ?>
                            <img class="product-main-img img-front" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="product-content">
                           <div class="product-content-item" rel="product_left_image_11">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_1_ar')){ ?><?php the_field('tab_two_content_1_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_12">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_2_ar')){ ?><?php the_field('tab_two_content_2_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_13">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_3_ar')){ ?><?php the_field('tab_two_content_3_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_14">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_4_ar')){ ?><?php the_field('tab_two_content_4_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_15">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_5_ar')){ ?><?php the_field('tab_two_content_5_ar') ?><?php } ?>
                                </div>
                            </div>
                            <div class="product-content-item" rel="product_left_image_16">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_6_ar')){ ?><?php the_field('tab_two_content_6_ar') ?><?php } ?>
                                </div>
                            </div>
                           <div class="product-content-item" rel="product_left_image_17">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_7_ar')){ ?><?php the_field('tab_two_content_7_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_18">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_8_ar')){ ?><?php the_field('tab_two_content_8_ar') ?><?php } ?>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_19">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_9_ar')){ ?><?php the_field('tab_two_content_9_ar') ?><?php } ?>
                                </div>
                           </div>
                            <div class="product-content-item" rel="product_left_image_20">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <?php if(get_field('tab_two_content_10_ar')){ ?><?php the_field('tab_two_content_10_ar') ?><?php } ?>
                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="product-right product-main-inner">
                       <div class="top-product">
                           <div class="top-product-img active product-img-cover">
                                <?php 
                                $image = get_field('tab_two_product_top_image');
                                if( !empty( $image ) ): ?>
                                    <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                       </div>
                   </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="d-flex first-flex mobile-front">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover active">
                    <a href="javascript:;" id="product_left_image_11" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_13" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_14" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_15" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    
                    <?php 
                    $image = get_field('tab_two_front_image_ar');
                    if( !empty( $image ) ): ?>
                        <img class="product-main-img img-front" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="product-content">
                       <div class="product-content-item" rel="product_left_image_11">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_1_ar')){ ?><?php the_field('tab_two_content_1_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_13">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_3_ar')){ ?><?php the_field('tab_two_content_3_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_14">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_4_ar')){ ?><?php the_field('tab_two_content_4_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_15">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_5_ar')){ ?><?php the_field('tab_two_content_5_ar') ?><?php } ?>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="product-right product-main-inner">
                   <div class="top-product">
                       <div class="top-product-img active product-img-cover">
                            <?php 
                            $image = get_field('tab_two_product_top_image');
                            if( !empty( $image ) ): ?>
                                <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
            </div>

            <div class="d-flex first-flex mobile-back">
               <div class="product-left product-main-inner">
                  <div class="product-left-img product-img-cover active">
                    <a href="javascript:;" id="product_left_image_12" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_16" class="target_img active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                     <a href="javascript:;" id="product_left_image_17" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                     <a href="javascript:;" id="product_left_image_18" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    <a href="javascript:;" id="product_left_image_19" class="target_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                    </a>
                    
                    <?php 
                    $image_back = get_field('tab_two_back_image_ar');
                    if( !empty( $image_back ) ): ?>
                        <img class="product-main-img img-back" src="<?php echo esc_url($image_back['url']); ?>" alt="<?php echo esc_attr($image_back['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="product-content">
                         <div class="product-content-item" rel="product_left_image_12">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_2_ar')){ ?><?php the_field('tab_two_content_2_ar') ?><?php } ?>
                            </div>
                        </div>
                        <div class="product-content-item active" rel="product_left_image_16">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_6_ar')){ ?><?php the_field('tab_two_content_6_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_17">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_7_ar')){ ?><?php the_field('tab_two_content_7_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_18">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_8_ar')){ ?><?php the_field('tab_two_content_8_ar') ?><?php } ?>
                            </div>
                       </div>
                       <div class="product-content-item" rel="product_left_image_19">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_9_ar')){ ?><?php the_field('tab_two_content_9_ar') ?><?php } ?>
                            </div>
                       </div>
                        <div class="product-content-item" rel="product_left_image_20">
                            <div class="product-content-line">
                                <svg id="svg">
                                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                </svg>
                            </div>
                            <div class="pr-content-animation">
                              <?php if(get_field('tab_two_content_10_ar')){ ?><?php the_field('tab_two_content_10_ar') ?><?php } ?>
                            </div>
                        </div>
                   </div>
               </div>
               <div class="product-right product-main-inner">
                   <div class="top-product">
                       <div class="top-product-img active product-img-cover">
                            <?php 
                            $image = get_field('tab_two_product_top_image');
                            if( !empty( $image ) ): ?>
                                <img  class="product-main-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
            </div>

            <!-- End Mobile -->
        </div>
    </section>

    <section class="product-cover before-sec">
        <div class="container before-row">
            <div class="d-flex">
                <div class="product-left product-main-inner">
                    <div class="btn-group">
                        <?php 
                        $button_ar = get_field('tab_two_button_ar');
                        if( !empty( $button_ar ) ): ?>
                            <a class="btn" href="<?php echo esc_url($button_ar['url']); ?>" target="<?php echo esc_url($button_ar['target']); ?>">Request Quote</a>
                        <?php endif; ?>
                        <?php 
                        $button_play_ar = get_field('tab_two_button_play_ar');
                        if( !empty( $button_play_ar ) ): ?>
                            <a class="btn-play" data-fancybox="" href="<?php echo esc_url($button_play_ar['url']); ?>" target="_self"><?php echo $button_play_ar['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="product-right product-main-inner">
                    <?php if(get_field('tab_two_video_ar')){ ?>
                       <div class="product_bottom_img frame2">
                        <?php
                            $embed_video = get_field('tab_two_embed_video');
                            echo $embed_video;
                         ?>
                            <!-- <video autoplay loop muted preload playsinline>
                              <source src="<?php the_field('tab_two_video_ar') ?>" type="video/mp4">
                            </video> -->
                       </div>
                   <?php } ?>    
                </div>
            </div>
        </div>
    </section>

    <section class="bolawrap-section armor" style="background-image: url('<?php the_field('tab_two_background_mob_ar') ?>')">
        <div class="bolawrap-img">
            <?php if(get_field('tab_two_background_desk_ar')){ ?><img src="<?php the_field('tab_two_background_desk_ar') ?>" alt="" class="desktop-only"><?php } ?>
            <?php if(get_field('tab_two_background_mob_ar')){ ?><img src="<?php the_field('tab_two_background_mob_ar') ?>" alt="" class="mobile-only"><?php } ?>
        </div>
        <div class="bolawrap-content container">
            <div class="bolawrap-title section-title dark-bg">
               
               <div class="bolawrap-inner-title">
                   <?php if(get_field('tab_two_title_bolawrap_ar')){ ?>
                        <h2><?php the_field('tab_two_title_bolawrap_ar') ?></h2>
                   <?php } ?>
                   <?php if(get_field('tab_two_content_left_bolawrap_ar')){ ?>
                        <?php the_field('tab_two_content_left_bolawrap_ar') ?>
                   <?php } ?>
               </div>
               
            </div>
            <div class="bolawrap-inner-content">
                <div class="tab-right-7">
               <?php
               $count = 1;
                if( have_rows('tab_two_content_right') ):
                    while ( have_rows('tab_two_content_right') ) : the_row(); ?>
                        <?php if ($count == 1): ?>
                            <ol>
                        <?php endif ?>
                        <li>
                            <?php if(get_sub_field('content')){ ?><p><?php the_sub_field('content') ?></p><?php } ?>
                            <?php if(get_sub_field('image')){ ?><img src="<?php the_sub_field('image') ?>" alt=""><?php } ?>
                        </li>
                        <?php if ($count == 4): ?>
                            </ol>
                            <ol class="ol-right">
                        <?php endif ?>
                        <?php if ($count == 7): ?>
                            </ol>
                        <?php endif ?>
                        <?php $count++; ?>
                    <?php endwhile;
                endif; ?>
                </div>
                <ol>
                    <?php if(get_field('tab_two_before_note')){ ?><li><p><?php the_field('tab_two_before_note') ?></p></li><?php } ?>
                </ol>
                <?php if(get_field('tab_two_note_ra')){ ?><span><?php the_field('tab_two_note_ra') ?></span><?php } ?>
            </div>
        </div>
    </section>

    <section class="faq armor">
        <div class="container">
            <div class="section-header text-center">
                <h3 class="title">FAQ</h3>
            </div>
            <div class="wrap-acordion">
                
                <?php $acordions = get_field( 'tab_two_acordions_ar' ); ?>
                <?php $num_items = count( get_field('tab_two_acordions_ar') ); ?>
                <?php $count = 1; ?>
                <?php foreach ($acordions as $item): ?>
                    <?php if ($count == 1 ): ?>
                        <div class="wrap-col">
                    <?php endif ?>
                        <div>
                            <div class="accordion"><h5><?php echo $item['title_acor'] ?></h5></div>
                            <div class="panel"><p><?php echo $item['content_ac'] ?></p></div>
                        </div>
                    <?php $count++; ?>
                    <?php if ($count == 7 ): ?>
                        </div>
                        <div class="wrap-col">
                    <?php endif ?>
                    <?php if ($count == 12 ): ?>
                        </div>
                        <?php $count = 1; ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>

<?php $items = get_field('slide'); ?>
<?php if ($items): ?>
    <section class="slide-armor">
        <div class="cont-all">
            <div class="container-tes">
                <div class="section-header text-center">
                    <h3 class="title">PRODUCTS</h3>
                </div>
                <div class="wrap-slide">
                    <?php foreach ($items as $item): ?>
                        <div class="item">
                            <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                            <div class="title">
                                <?php if ($item['title']): ?>
                                    <h3><?php echo $item['title'] ?></h3>    
                                <?php endif ?>
                                <?php if ($item['sub_title']): ?>
                                    <p><?php echo $item['sub_title']?></p>
                                <?php endif ?>
                            </div>
                            <?php if ($item['link']['url']): ?>
                                <a href="<?php echo $item['link']['url'] ?>" target="<?php echo $item['link']['target'] ?>"><?php echo $item['link']['title'] ?></a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<section class="bolawrap-cta force-margin-0 armor">
    <div class="container">
        <div class="cta-wrapper">
            <h3><?php the_field('cta_title_ra') ?></h3>
            <div class="btn-group">
                <?php 
                $link = get_field('cta_button_ra');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                <?php 
                $link = get_field('cta_button_link_ra');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
				
				<?php $text_link = (get_field('text_link')) ? get_field('text_link') : 'Contact Us' ; ?>
                <?php $code_form = (get_field('code_form')) ? get_field('code_form') : '' ; ?>
                <?php if (!empty($text_link)): ?>
                    <a href="javascript:;" class="btn-link" style="display: none"><?php echo $text_link; ?></a>
                <?php endif ?>
				
            </div>
        </div>
         <?php if (!empty($text_link)): ?>
            <div class="cont-form" style="display: none">
                <?php echo $code_form; ?>
            </div>    
        <?php endif ?>
    </div>
</section>

<?php get_footer(); ?>