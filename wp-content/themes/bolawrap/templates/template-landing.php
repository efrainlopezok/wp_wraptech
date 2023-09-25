<?php 
/* 
    Template Name: Landing Page
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

<?php $hero = (get_field( 'hero_landing' )) ? get_field( 'hero_landing' ) : '' ;?>
<?php if (!empty($hero)): ?>
    <section class="hero-section dark-bg armor landing hero-land" >
        <div class="hero-img landing" style="background-image: url(https://i.imgur.com/WvcdEPi.png)!important;">
            <!-- <img width="100%" src="https://i.imgur.com/WvcdEPi.png" alt="background"> -->
            <video autoplay loop muted preload playsinline>    
                <source src="<?php echo  get_site_url(); ?>/wp-content/uploads/2020/02/V.BolaWrap.Slomo2_.B.Roll_-1-2.mp4" type="video/mp4">
            </video>
            <div class="hero-caption landing">
                <div class="container">
                    <div class="landing-containaer">
                        <div class="fist-row">
                            <div class="details-wrapper">
                                <h3><?php echo $hero['title']; ?></h3>
                                <div class="information-nav sec-desk">
                                    <ul>
                                    <?php foreach ($hero['items'] as $item): ?>
                                            <?php  
                                            $time = explode(":", $item['time']);
                                            $minutes = $time['0'];
                                            $secs    = $time['1'];
                                            $totalSecs   = ($minutes * 60) + $secs; 
                                            ?>
                                            <li> <a href="<?php echo $totalSecs; ?>" > <?php echo $item['item']['title']; ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="video-wraper">
                                <div classs="video-play">
                                    <div class="video-play" data-id="<?php echo $hero['video']; ?>">
                                        <iframe src="https://www.youtube.com/embed/<?php echo $hero['video']; ?>?start=1&controls=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="information-nav sec-mob">
                                    <ul>
                                    <?php foreach ($hero['items'] as $item): ?>
                                            <?php  
                                            $time = explode(":", $item['time']);
                                            $minutes = $time['0'];
                                            $secs    = $time['1'];
                                            $totalSecs   = ($minutes * 60) + $secs; 
                                            ?>
                                            <li> <a href="<?php echo $totalSecs; ?>" > <?php echo $item['item']['title']; ?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $slids = (get_field( 'slide_landing' )) ? get_field( 'slide_landing' ) : '' ;?>
            <?php if (!empty($slids)): ?>
                    <div class="landing-slider">
                        <div class="section-header text-center">
                            <h3 class="title">Body Cam Footage</h3>
                        </div>
                        <div class="wrap-slide-landing">
                            <?php foreach ($slids['items'] as $slide): ?>
                                <div class="item">
                                    <h5><?php echo $slide['title']; ?></h5>
                                    <p><?php echo $slide['sub_title']; ?></p>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
            <?php endif ?>
        </div>
    </section>
<?php endif ?>



<?php $bol_lan = (get_field( 'bolawrap_landing' )) ? get_field( 'bolawrap_landing' ) : '' ;?>
<?php if (!empty($bol_lan)): ?>
<section class="product-cover bola-points">
        <div class="container">
            <!-- <a href="javascript:;" id="product_top_image" class="target_img hide"></a> -->

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
                       <!--  <a href="javascript:;" id="product_left_image_6" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_7" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a>
                         <a href="javascript:;" id="product_left_image_8" class="target_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/target.png" alt="">
                        </a> -->
                        <img class="product-main-img" src="<?php echo $bol_lan['image_left']; ?>" alt="">
                        <div class="product-left-actions 1111">
                           <a href="<?php echo $bol_lan['button']['url']  ?>" class="btn down-pdf" download><?php echo $bol_lan['button']['title']  ?></a>
                           <a href="<?php echo $bol_lan['link']['url']  ?>" class="btn-download down-pdf link-a" download><?php echo $bol_lan['link']['title']  ?></a>
                       </div>
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

                       </div>
                   </div>

                   <div class="product-right product-main-inner">
                        <div class="product-right-header">
                            <h2><?php echo $bol_lan['title']; ?></h2>
                        </div>
                        <div class="product-content p-right">                       
                           <div class="product-content-item active" rel="product_top_image">
                                <div class="pr-content-animation">
                                    <h3><?php echo $bol_lan['title_6']; ?></h3>
                                    <p><?php echo $bol_lan['description_6']; ?></p>
                                </div>
                                <div class="product-top-svg has-site-loaded" style="height: 134.172px; width: 306.5px;">
                                    <svg id="svg1">
                                    <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                           </div>
                           <div class="product-content-item active" rel="product_top_image_7">
                                <div class="pr-content-animation">
                                    <h3><?php echo $bol_lan['title_7']; ?></h3>
                                    <p><?php echo $bol_lan['description_7']; ?></p>
                                </div>
                                <div class="product-top-svg has-site-loaded" style="height: 134.172px; width: 306.5px;">
                                    <svg id="svg1">
                                    <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                           </div>
                           <div class="product-content-item active" rel="product_top_image_8">
                                <div class="pr-content-animation">
                                <h3><?php echo $bol_lan['title_8']; ?></h3>
                                    <p><?php echo $bol_lan['description_8']; ?></p>
                                </div>
                                <div class="product-top-svg has-site-loaded" style="height: 134.172px; width: 306.5px;">
                                    <svg id="svg1">
                                    <line id="line" x1="0" y1="0" x2="100%" y2="100%"></line>
                                    </svg>
                                </div>
                           </div>
                       </div>
                       <div class="top-product">
                            <div class="top-product-img product-img-cover active">
                                <a href="javascript:;" id="product_top_image" class="target_img active">
                                    <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                                </a>
                                 <a href="javascript:;" id="product_top_image_7" class="target_img">
                                    <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                                </a>
                                 <a href="javascript:;" id="product_top_image_8" class="target_img">
                                    <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                                </a>
                                <img class="product-main-img first" src="<?php echo $bol_lan['image_right']; ?>" alt="">
                            </div>
                       </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="wrap-points mob">
                <div class="d-flex first-flex ">
                    <div class="product-right-header">
                        <h2><?php echo $bol_lan['title']; ?></h2>
                    </div>
                    <div class="product-left-actions 2222">
                        <a href="<?php echo $bol_lan['button']['url']  ?>" class="btn down-pdf"><?php echo $bol_lan['button']['title']  ?></a>
                        <a href="<?php echo $bol_lan['link']['url']  ?>" class="btn-download down-pdf"><?php echo $bol_lan['link']['title']  ?></a>
                   </div>
                        
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
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="0" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_6']; ?></h3>
                                    <p><?php echo $bol_lan['description_6']; ?></p>
                                </div>
                            </div>
                           <div class="product-content-item" rel="product_left_image_7">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="0" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_7']; ?></h3>
                                    <p><?php echo $bol_lan['description_7']; ?></p>
                                </div>
                           </div>
                           <div class="product-content-item" rel="product_left_image_8">
                                <div class="product-content-line">
                                    <svg id="svg">
                                      <line id="line" x1="0" y1="0" x2="0" y2="0"></line>
                                    </svg>
                                </div>
                                <div class="pr-content-animation">
                                  <h3><?php echo $bol_lan['title_8']; ?></h3>
                                    <p><?php echo $bol_lan['description_8']; ?></p>
                                </div>
                           </div>
                       </div>
                       <div class="top-product-img product-img-cover">
                            <img class="product-main-img first" src="<?php echo $bol_lan['image_right_mob']; ?>" alt="">
                            <!-- <img class="product-main-img second" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap-product.png)" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php $experence = (get_field( 'boxes_landing' )) ? get_field( 'boxes_landing' ) : '' ;?>
<?php if (!empty($experence)): ?>
    <section class="section-experience" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-bg.jpg)">
        <div class="container">
            <div class="section-experience-wrapp">
               	<div class="experience-cards">
                    <?php 
                    $events = tribe_get_events( [
                       'posts_per_page' => 4,
                       'start_date'     => 'now',
                    ] );
                    ?>                    
                    <?php foreach ($events as $event): ?>
                        <div class="experience-card">
                            <?php $thumbnail = get_the_post_thumbnail_url($event->ID);  ?>
                            <?php if (!empty($thumbnail)): ?>
                                <div class="experience-card-head" style="background-image: url(<?php echo $thumbnail; ?>)">
                                    <a href="<?php echo get_the_permalink($event->ID); ?>" target="_blank"></a>
                                </div>
                            <?php else: ?>
                                <div class="experience-card-head" style="background-image: url(<?php echo $box['image']; ?>)">
                                    <a href="<?php echo get_the_permalink($event->ID); ?>" target="_blank"></a>
                                </div>    
                            <?php endif ?>
                            <div class="experience-card-body">
                                <div class="card-date">
                                    <?php 
                                    $data_star = tribe_get_start_date($event);
                                    $data_star = explode("@", $data_star);
                                    $unixtime_star = strtotime($data_star[0]);

                                    $data_end = tribe_get_end_date($event);
                                    $data_end = explode("@", $data_end);
                                    ?>
                                    <?php $date = explode(" ", $box['date']); ?>
                                    <h5><?php echo date('d', $unixtime_star); ?></h5>
                                    <p><?php echo date('M', $unixtime_star); ?></p>
                                </div>
                                <div class="card-details">
                                    <h6><a href="<?php echo get_the_permalink($event->ID); ?>" target="_blank"><?php echo $event->post_title; ?></a></h6>
                                    <p><i class="fas fa-clock"></i> <?php echo $data_star[1] ?> - <?php echo $data_end[1] ?></p>
                                    <?php if (!empty(tribe_get_venue($event))): ?>
                                        <p><i class="fas fa-map-marker"></i> <?php echo tribe_get_venue($event); ?></p>    
                                    <?php endif ?>
                                </div>
                            </div>
                        </div> 
                    <?php endforeach ?>
                    
                    <?php wp_reset_query(); ?>
                </div>
                <div class="experience-list">
                    <h3><?php echo $experence['title'] ?></h3>
                    <ul>
                        <?php foreach ($experence['list'] as $list): ?>
                            <li><?php echo $list['item'] ?></li>
                        <?php endforeach ?>
                    </ul>
                    <a class="btn" href="<?php echo $experence['btn']['url'] ?>" target="<?php echo $experence['btn']['target'] ?>"><?php echo $experence['btn']['title'] ?></a>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>

<?php $faq = (get_field( 'faq_landing' )) ? get_field( 'faq_landing' ) : '' ;?>
<?php if (!empty($faq)): ?>
    <section class="section-faq" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq-bg.jpg)">
        <div class="faq-video-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq-product.png)" alt="product">
        </div>
        <div class="container">
            <div class="section-faq-header">
                <h3><?php echo $faq['title']; ?></h3>
            </div>
            <div class="section-faq-wrapper ">
                <div class="section-faq-video">
                    <div class="faq-video-inner">
                        <?php foreach ($faq['accordion'] as $item): ?>
                            <?php 
                            $url_id = "";
                            if (strpos($item['content'], 'watch?v=') !== false) {
                                $id_vid = explode('?v=', $item['content']); 
                                $url_id = $id_vid['1'] ;
                            }else{
                                $id_vid_1 = explode('be/', $item['content']); 
                                $url_id = $id_vid_1['1'] ;
                            }
                            ?>
                            <a href="<?php echo $item['content'] ?>" data-fancybox="">
                                <img src="https://img.youtube.com/vi/<?php echo $url_id; ?>/maxresdefault.jpg" alt="video">
                            </a>
                            <?php $count_faq++; ?>
                        <?php endforeach ?>
                        
                    </div>
                </div>
                <div class="section-faq-text">
                    <?php $count_faq = 0 ?>
                    <?php foreach ($faq['accordion'] as $item): ?>
                        <?php 
                        $url_id = "";
                        if (strpos($item['content'], 'watch?v=') !== false) {
                            $id_vid = explode('?v=', $item['content']); 
                            $url_id = $id_vid['1'] ;
                        }else{
                            $id_vid_1 = explode('be/', $item['content']); 
                            $url_id = $id_vid_1['1'] ;
                        }
                        ?>
                        <?php $class_faq = ($count_faq == 0) ? 'f-active' : '' ; ?>
                        <div class="faq-accordion-item-land <?php echo $class_faq; ?>" data-url="<?php echo $item['content'] ?>" data-id="https://img.youtube.com/vi/<?php echo $url_id; ?>/maxresdefault.jpg" data-num="<?php echo $count_faq; ?>">
                            <div class="faq-accordion-button">
                                <h5><?php echo $item['title'] ?></h5>
                            </div>
                            <div class="faq-accordion-content">
                                <p><?php echo $item['content'] ?></p>
                            </div>
                        </div>
                        <?php $count_faq++; ?>
                    <?php endforeach ?>
                    <div class="section-faq-action"  >
                        <i class="fas fa-angle-down"></i>
                        <a href="#" id="show-more-acordion" style="display: none"> More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>


<?php $download = (get_field( 'download_landing' )) ? get_field( 'download_landing' ) : '' ;?>
<?php if (!empty($download)): ?>
    <section class="section-download" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-bg.jpg)">
        <div class="container">
            <div class="section-download-wrapper">
                <div class="section-download-text">
                    <h3><?php echo $download['title'] ?></h3>
                    <p><?php echo $download['content'] ?></p>
                    <a class="btn" href="javascript:;"><?php echo $download['btn']['title'] ?></a>
                    <?php foreach ($download['slide'] as $slide): ?>
                        <div style="display: none;" class="btn-download">
                            <a href="<?php echo $slide['file']; ?>"  download>1</a>   
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="section-download-samples">
                    <div class="samples-slider">
                        <?php foreach ($download['slide'] as $slide): ?>
                            <div class="sample-item">
                                <img src="<?php echo $slide['image']; ?>" alt="sample">
                            </div>  
                        <?php endforeach ?>
                    </div>
                    <div class="slider-nav-content">
                        <p><?php echo $download['title_slide'] ?></p>
                        <div class="slider-nav-control">
                            <?php foreach ($download['slide'] as $slide): ?>
                                <p data-file="<?php echo $slide['file']; ?>"><?php echo $slide['title'] ?></p>    
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>


<?php $get = (get_field( 'get_bolawrap_landing' )) ? get_field( 'get_bolawrap_landing' ) : '' ;?>
<?php if (!empty($get)): ?>
    <section class="hover-section">
        <div class="bg-cover">
            <div class="left-content">
                <h4><?php echo $get['title'] ?> <br> <span class="font-light"><?php echo $get['title_sub'] ?></span></h4>
            </div>
            <div class="bar-options">
                <?php $count = 0 ?>
                <?php foreach ($get['list'] as $item): ?>
                    <?php $class_hover = ($count == 0) ? 'h-active' : '' ; ?>
                    <div class="bar-item <?php echo $class_hover; ?>">
                        <a href="<?php echo $item['link']['url']; ?>">
                        <h5> <?php echo $item['title']; ?> </h5>
                        <p><?php echo $item['content']; ?> </p>
                        <!-- <a href="<?php echo $item['link']['url']; ?>"> -->
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
<?php get_footer(); ?>