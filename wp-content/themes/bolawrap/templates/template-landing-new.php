<?php 
/* 
    Template Name: New Landing Page 
*/ 


$navigation = (get_field( 'slim_navigation_landing_new' )) ? get_field( 'slim_navigation_landing_new' ) : '' ;
if( $navigation ){
  get_header('landing-new'); 
}else{
  get_header(); 
}

?>


<?php $hero = (get_field( 'hero_landing_new' )) ? get_field( 'hero_landing_new' ) : '' ; ?>
<?php if (!empty($hero)): ?>
    <section class="hero-section dark-bg armor landing">


        <div class="hero-img landing">

        
          <video autoplay loop muted preload playsinline>    
            <source src="<?php the_field('background_video', 5027) ?>" type="video/mp4">
          </video>

            <div class="hero-caption landing">

                <div class="container">
                    <div class="landing-containaer">

                        <div class="fist-row">
                            <div class="details-wrapper">
                                <h3><?php echo $hero['title']; ?></h3>
                                <p><?php echo $hero['content']; ?></p>
                                <?php if($hero['btn']['active']): ?>
                                  <a href="<?php echo $hero['btn']['links_to']['url']; ?>" class="btn"><?php echo $hero['btn']['text']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>







<?php $bol_lan = (get_field( 'bolawrap_landing', $post->ID )) ? get_field( 'bolawrap_landing', $post->ID) : '' ;?>
<?php if (!empty($bol_lan)): ?>
<section class="product-cover bola-points">
  <div class="container">
    <div class="product-featured-description">
        <div class="left">
          <h2><?php echo $bol_lan['title']; ?></h2>
        </div>
        <div class="right">

          <?php echo $bol_lan['content']; ?>
          <span class="mobile">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Rectangle-leftpng.png" alt="Arrow Down">
          </span>
          <a class="btn" href="<?php echo $bol_lan['btn']['url']; ?>" target="<?php echo $bol_lan['btn']['target']; ?>"><?php echo $bol_lan['btn']['title']; ?></a>

        </div>
      </div>
    </div>
  <div class="custom-bg" style="background-image: url(<?php echo $bol_lan['background']['url']; ?>)">
  <div class="container">
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

            <img class="product-main-img" src="<?php echo $bol_lan['image_left']; ?>" alt="">
          </div>


          <div class="product-content">

            <div class="product-content-item active" rel="product_left_image">
              <div class="product-content-line">
                <svg id="svg">
                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                </svg>
              </div>
              <div class="pr-content-animation active">
                <h3><?php echo $bol_lan['title_1']; ?></h3>
                <p><?php echo $bol_lan['description_1']; ?></p>
              </div>
            </div>
                          

            <div class="product-content-item" rel="product_left_image_2">
              <div class="product-content-line">
                <svg id="svg">
                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                </svg>
              </div>
              <div class="pr-content-animation ">
                <h3><?php echo $bol_lan['title_2']; ?></h3>
                <p><?php echo $bol_lan['description_2']; ?></p>
              </div>
            </div>


            <div class="product-content-item" rel="product_left_image_3">
              <div class="product-content-line">
                <svg id="svg">
                  <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                </svg>
              </div>
              <div class="pr-content-animation">
                <h3><?php echo $bol_lan['title_3']; ?></h3>
                <p><?php echo $bol_lan['description_3']; ?></p>
              </div>
            </div>


            <div class="product-content-item" rel="product_left_image_4">
              <div class="product-content-line">
                <svg id="svg">
                  <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                </svg>
              </div>
              <div class="pr-content-animation">
                <h3><?php echo $bol_lan['title_4']; ?></h3>
                <p><?php echo $bol_lan['description_4']; ?></p>
              </div>
            </div>


            <div class="product-content-item" rel="product_left_image_5">
              <div class="product-content-line">
                <svg id="svg">
                  <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                </svg>
              </div>
              <div class="pr-content-animation">
                <h3><?php echo $bol_lan['title_5']; ?></h3>
                <p><?php echo $bol_lan['description_5']; ?></p>
              </div>
            </div>

            

            <div class="product-content-item" rel="product_top_image">
                <div class="pr-content-animation">
                    <h3><?php echo $bol_lan['title_6']; ?></h3>
                    <p><?php echo $bol_lan['description_6']; ?></p>
                </div>
                <div class="product-top-svg right-svg has-site-loaded" style="height: 134.172px; width: 306.5px;">
                    <svg id="svg1">
                    <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                    </svg>
                </div>
            </div>

          </div>
        </div>

                   <div class="product-right product-main-inner">
                        
                       <div class="top-product">
                            <div class="top-product-img product-img-cover active">
                                <a href="javascript:;" id="product_top_image" class="target_img active">
                                    <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                                </a>
                                <img class="product-main-img first" src="<?php echo $bol_lan['image_right']; ?>" alt="">
                            </div>
                       </div>
                    </div>

                </div>
            </div>
        </div>
      </div>

        <div class="container">
            <div class="wrap-points mob">
                <div class="d-flex first-flex">
                        
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
                            <img class="product-main-img" src="<?php echo $bol_lan['image_left']; ?>" alt="">
                        </div>
                        <div class="product-content">

                            <div class="product-content-item active" rel="product_left_image">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation active">
                                    <h3><?php echo $bol_lan['title_1']; ?></h3>
                                    <p><?php echo $bol_lan['description_1']; ?></p>
                                </div>
                           </div>
                          
                           <div class="product-content-item" rel="product_left_image_2">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation ">
                                  <h3><?php echo $bol_lan['title_2']; ?></h3>
                                    <p><?php echo $bol_lan['description_2']; ?></p>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_3">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_3']; ?></h3>
                                    <p><?php echo $bol_lan['description_3']; ?></p>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_4">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_4']; ?></h3>
                                    <p><?php echo $bol_lan['description_4']; ?></p>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_5">
                                <div class="product-content-line">
                                     <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_5']; ?></h3>
                                    <p><?php echo $bol_lan['description_5']; ?></p>
                                </div>
                            </div>

                            <div class="product-content-item" rel="product_left_image_6">
                                <div class="product-content-line bottom">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_6']; ?></h3>
                                    <p><?php echo $bol_lan['description_6']; ?></p>
                                </div>
                            </div>

                            <div class="product-content-item" rel="product_left_image_7">
                                <div class="product-content-line bottom">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_7']; ?></h3>
                                    <p><?php echo $bol_lan['description_7']; ?></p>
                                </div>
                            </div>

                            <div class="product-content-item" rel="product_left_image_8">
                                <div class="product-content-line bottom">
                                    <svg id="svg">
                                      <line id="line" x1="100%" y1="0" x2="0" y2="100%"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_8']; ?></h3>
                                    <p><?php echo $bol_lan['description_8']; ?></p>
                                </div>
                            </div>


                       </div>
                       <div class="top-product">
                        <div class="top-product-img product-img-cover active">
                            <img class="product-main-img first" src="<?php echo $bol_lan['image_right_mobile']; ?>" alt="">
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bola-wrap-demostration-image">
          <img src="<?php echo $bol_lan['image_bottom']; ?>" alt="Bola Wrap Demostration">
        </div>

    </section>
<?php endif ?>




<?php $experience = (get_field( 'experience_landing_new' )) ? get_field( 'experience_landing_new' ) : '' ;?>
<?php if (!empty($experience)): ?>
    <section class="section-experience">
      <div class="container">
        <div class="inner-slider-title text-center">
          <h2><?php echo $experience['title']; ?></h2>
          <div class="content"><?php echo $experience['content']; ?></div>
        </div>
      </div>
      <?php if (!empty($experience['boxes'])): ?>
        <div class="landing-slider">
          <div class="wrap-slide-landing">
            <?php foreach ($experience['boxes'] as $slide): ?>
              <div class="item">
                <h5><?php echo $slide['title']; ?></h5>
                <p><?php echo $slide['content']; ?></p>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      <?php endif ?>

    </section>
<?php endif ?>

<?php
$presence = get_field('bolawrap_presence_landing_new', $post->ID);
?>
<section class="case-study bolawrap-presence">
    <div class="container">
      <h2 class="featured-title">
        <?php echo $presence['featured_title']; ?>
      </h2>
      <h3 class="mobile">
        <?php echo $presence['subtitle']; ?>
      </h3>
    </div>
    <div class="container">
        <div class="case-study-wrapper row">
            <div class="case-study-text cell-lg-5 cell-md-6">

              <span class="sub-title"><?php echo $presence['left']['headline']; ?></span>
              <h2><?php echo $presence['left']['title']; ?></h2>

            </div>
            <div class="case-study-video cell-md-6">
                <div class="top-img">
                    <img src="<?php echo $presence['device_image']['url']; ?>" alt="">
                </div>
                <div class="video-block">

                    <?php foreach($presence['right'] as $video): ?>

                      <div class="video-block-inner">
                        <a href="<?php echo $video['video']; ?>" data-fancybox="">
                            <img src="<?php echo $video['thumbnail']['url']; ?>" alt="">
                        </a>
                      </div>

                    <?php endforeach; ?>

                </div>
                <div class="bottom-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap2-min.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<?php $partners = get_field('ourpartners_landing_new', $post->ID); ?>
<div class="client-logo our-partners pt-50">
   <div class="container">
      <h2>
        <?php echo $partners['title']; ?>
      </h2>
      <div class="client-logo-inner">

        <?php foreach($partners['partners'] as $partner): ?>
         <div class="client-item grayscale">

            <?php if($partner['link_optional']['url']): ?>
              <a href="<?php echo $partner['link_optional']['url']; ?>" target="_blank">
            <?php endif; ?>

              <img src="<?php echo $partner['logo']['url']; ?>" alt="Partner Logo">

            <?php if($partner['link_optional']['url']): ?>
              </a>
            <?php endif; ?>


         </div>
        <?php endforeach; ?>
         
      </div>
   </div>
</div>


<?php $get = (get_field( 'get_bolawrap_landing' )) ? get_field( 'get_bolawrap_landing' ) : '' ;?>
<?php if (!empty($get)): ?>
    <section class="hover-section">
        <div class="bg-cover">
            <div class="left-content">
                <h4><?php echo $get['title'] ?></h4>
            </div>
            <div class="bar-options">
                <?php $count = 0 ?>
                <?php foreach ($get['list'] as $item): ?>
                    <?php $class_hover = ($count == 0) ? 'h-active' : '' ; ?>
                    <div class="bar-item <?php echo $class_hover; ?>">
                      <a href="<?php echo $item['link']['url']; ?>">
                      <h5> <?php echo $item['title']; ?> </h5>
                      <p><?php echo $item['content']; ?> </p>
                        <div class="left-arrow">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                      </a>
                    </div>
                    <?php $count++; ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>


<?php 

$slim_footer = get_field('slim_footer_landing_new', $post->ID);
if( $slim_footer ){
  get_footer('landing-new'); 
}else{
  get_footer(); 
}

?>