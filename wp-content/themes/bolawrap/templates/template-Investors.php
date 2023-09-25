<?php /* Template Name: Investors Template */ ?>
<?php get_header(); ?>
<?php 
    $arg =  array('post_type' =>'post');
    $posts = new WP_Query( $arg );
    $args=query_posts($arg);
    $post_type = 'post';
    $count_posts =$posts->found_posts;
    $per_page_post = get_option( 'posts_per_page' );


    /**
     * Stock Price from db
     */
    global $wpdb;
    $lastRequestRecordStoredInDB = $wpdb->get_results( "SELECT * FROM StockPrice ORDER BY id DESC LIMIT 1");
?>
<script type="text/javascript">
var post_offset, increment,loading=0;
var post_type = '<?php echo $post_type; ?>';
var total_post = '<?php echo $count_posts?>';
var number_of_post = '<?php echo $per_page_post;?>';

function ajax_load(){
    if(loading) return true;

    if(!loading) {
        loading=1;

        var params = {"offset":post_offset,"post_type":post_type,"number_of_post":number_of_post,"total_post":total_post,action:"get_articles_invest"}
        
        jQuery.post("<?php echo home_url(); ?>/wp-admin/admin-ajax.php",params,function(data){
            post_offset += increment;
            //console.log(post_offset);
            loading=0;

            var mydata = data.split('||');
                if(mydata[0]){
                    var $boxes = jQuery(mydata[0].trim());
                    jQuery('#announcements .post-load').append(mydata[0]);

                if(mydata[1] == 0){
                    jQuery('#announcements .load-more .btn').hide();
                }

                } else {
                    jQuery('#announcements .load-more .btn').hide();
                }
        });
    }
}

jQuery(document).ready(function(){
    jQuery("#announcements .load-more .btn-primary").click(function(){
        ajax_load();
        return false;
    });
});

</script>




<?php 
$today = date('Ymd');
$arg1 =  array('post_type' =>'events','meta_query' => array(array('key' => 'event_date','compare' => '<', 'type' => 'DATE', 'value' => $today,)),);
$posts1 = new WP_Query( $arg1 );
$args1 =query_posts($arg1);
$post_type1 = 'events';
$count_posts1 = $posts1->found_posts;
$per_page_post1 = 4;
?>
<script type="text/javascript">
var post_offset_event, increment1, loading1=0;
var post_type1 = '<?php echo $post_type1; ?>';
var total_post1 = '<?php echo $count_posts1; ?>';
var number_of_post1 = '<?php echo $per_page_post1;?>';

function ajax_load_events(){
    
    
    if(loading1) return true;

    if(!loading1) {
        loading1=1;

        var params = {"offset":post_offset_event,"post_type1":post_type1,"number_of_post1":number_of_post1,"total_post1":total_post1,action:"get_articles_events"}
        
        jQuery.post("<?php echo home_url(); ?>/wp-admin/admin-ajax.php",params,function(data){
            post_offset_event += increment1;
            loading1=0;

            var mydata = data.split('||');
                if(mydata[0]){
                    var $boxes = jQuery(mydata[0].trim());
                    jQuery('.past-events-cover .events-item').append(mydata[0]);

                if(mydata[1] == 0){
                    jQuery('.event-load-more .btn').hide();
                }

                } else {
                    jQuery('.event-load-more .btn').hide();
                }
        });
    }
}

jQuery(document).ready(function(){
    jQuery(".event-load-more .btn-primary").click(function(){
        ajax_load_events();
        return false;
    });
});

</script>

<?php 
    $arg =  array('post_type' =>'post');
    $posts = new WP_Query( $arg );
    $args=query_posts($arg);
    $post_type = 'post';
    $count_posts =$posts->found_posts;
    $per_page_post = get_option( 'posts_per_page' );
?>
<div class="inner-banner dark-bg" style="background-image: url('<?php the_field('investor_banner_image') ?>');background-size: cover;">
    <div class="container text-center">
        <h1>
        <span>NASDAQ: <b>WRAP $<?php echo $lastRequestRecordStoredInDB[0]->price; ?></b></span>
        </h1>
        <div class="video-wrap">
            <div class="text-center video-caption-top pb-20">
                <?php if(get_field('video_poster_image_investors')){ ?><img src="<?php the_field('video_poster_image_investors'); ?>"/><?php } ?>
                <?php if(get_field('video_url_investors')){ ?>
                <div class="video-right-inner">
                    <?php //echo do_shortcode( '[embedyt] '. get_field('video_url') . ' [/embedyt]' ); ?>
                    <a href="<?php the_field('video_url_investors'); ?>" data-fancybox class="testimonial-play "></a>
                </div>
                <?php } ?>
            </div>
            <?php
                $investor_btn = get_field('investor_presentation') ? get_field('investor_presentation') : ""; 
                if($investor_btn['url'] != ""){ ?>
                <a class="btn btn-investor" href="<?php echo $investor_btn['url'] ?>" target="<?php echo $investor_btn['target'] ?>"> <?php echo $investor_btn['title'] ?></a>
            <?php } ?>                
        </div> 
        <div class="btn-group">
            <?php $content = get_field('content_investor') ?>
            <?php if($content){?>
                <p><?php echo $content; ?></p>
            <?php }?>
            <?php $form_content = get_field('form_investor') ?>
            <?php if($form_content){?>
                <?php echo do_shortcode($form_content); ?>
            <?php }?>
           <?php 
            $link = get_field('investor_button_1');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="<?php the_field('investorbutton_1_icon'); ?>" alt=""></a>
            <?php endif; ?>
            <?php if(get_field('investorbutton_2_icon')){ ?><a href="#" class="btn btn-sidebar"><?php the_field('investorbutton_2'); ?><img src="<?php the_field('investorbutton_2_icon'); ?>" alt=""></a><?php } ?>
        </div>
        <div class="investor-tab">
            <ul>
                <li class="active"><a href="#">Announcements</a></li>
                <li><a href="#">SEC Filings</a></li>
                <li><a href="#">Governance</a></li>
                <li><a href="#">Events & Presentations</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="investor-cover">
    <div class="container">
        <div class="investor-item">
            <div id="announcements" class="tab-content active">
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
                                    <?php if(get_the_date()){ ?><span class="md-date"><strong><?php echo get_the_date(); ?></strong></span><?php } ?>   
                                    <?php if(get_the_title()){ ?><h3><span><?php echo wp_trim_words(get_the_title(),6,'...'); ?></span></h3><?php } ?>   
                                    <?php if(get_the_content()){ ?><p><?php echo wp_trim_words(get_the_content(),40,'...'); ?><a href="<?php the_permalink(); ?>">Read Article ></a></p> <?php } ?>                                 
                                </div>
                            </div>
                        </div> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="load-more read-more cf">
                        <?php  if($count_posts > $per_page_post  ) {
                            echo '<a id="cta-link" class="btn btn-primary">Load More...</a>';
                        } ?>
                </div>
            </div>
        </div>
        <div class="investor-item">
            <div id="sec-filings"  class="tab-content">
                <div class="sec-filings-table">
                <table>
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Type</th>
                      <th>Filings Descriptions</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                    wp_reset_query();                      
                    if( have_rows('sec_filings_repeater') ):
                        $totalfillings = count(get_field('sec_filings_repeater'));
                        $number = 10;
                        $count = 0;
                        while ( have_rows('sec_filings_repeater') ) : the_row(); ?>                            
                        <tr>
                          <td data-column="Date"><?php if(get_sub_field('sec_filings_date')){ ?><?php the_sub_field('sec_filings_date') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="Type"><?php if(get_sub_field('sec_filings_type')){ ?><?php the_sub_field('sec_filings_type') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="Filling Discription"><?php if(get_sub_field('sec_filings_description')){ ?><?php the_sub_field('sec_filings_description') ?><?php }else{ ?> - <?php } ?></td>
                          <td data-column="View">
                              <a target="_blank" href="<?php the_sub_field('view_url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.png" alt=""></a>
                              <a target="_blank" href="<?php the_sub_field('sec_fillings_upload_docs') ?>" class="<?php if(!get_sub_field('sec_fillings_upload_docs')){ ?> no-link-td <?php } ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/file.png " alt=""></a>
                          </td>
                        </tr>
                      <?php 
                      $count++;
                      if ($count == $number) {
                          // we've shown the number, break out of loop
                          break;
                      }endwhile;
                    endif;
                    ?>
                  </tbody>
                </table>
                </div>
                <div class="sec-filings-btn load-more read-more cf">
                    <a id="fillings-show-more-link" class="btn noUtm" href="javascript: fillings_show_more();"<?php if ($totalfillings < $count) { ?> style="display: none;"<?php } ?>>Load More Filings</a>
                </div>
            </div>
        </div>
        <div class="investor-item">
            <div id="investor-governance" class="tab-content">
                <?php if (get_field('title_governance')) {?>
                <div class="independent-title directors">
                    <h3><?php echo get_field('title_governance'); ?></h3>
                </div>
                <?php } ?>
               <div class="governance-profiles d-flex">
                   <?php
                    if( have_rows('governance_profile') ):
                        while ( have_rows('governance_profile') ) : the_row(); ?>
                       <div class="governance-inner-profile">
                           <?php if(get_sub_field('governance_linkedin_url')){ ?>
                           <div class="governacne-social-cover">
                               <a href="<?php the_sub_field('governance_linkedin_url');?>"><img src="<?php echo get_field('governance_linkedin_logo') ?>" alt=""></a>
                           </div>
                           <?php } ?>
                           <div class="governance-profile">
                                <div class="governance-profile-img">
                                   <?php 
                                    $image = get_sub_field('governance_image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="gprofile-name">
                                        <?php if(get_sub_field('governance_name')){ ?><h3><?php the_sub_field('governance_name');?></h3><?php } ?>
                                        <?php if(get_sub_field('governance_position')){ ?><p><?php the_sub_field('governance_position');?></p><?php } ?>
                                    </div>
                                </div>
                                <?php if(get_sub_field('governance_content')){ ?>
                                <div class="governance-profile-content">
                                    <?php the_sub_field('governance_content');?>
                                </div>
                                <?php } ?>
                            </div>                    
                        </div>                    
                    <?php endwhile;
                    endif;
                    ?>
                </div>
                <?php if(get_field('independent_title')){ ?>
                <div class="independent-title">
                  <h3><?php the_field('independent_title') ?></h3>
                </div>
                <?php } ?>
                <div class="governance-profiles independent-profiles d-flex">
                   <?php
                    //wp_reset_query();
                    if( have_rows('independent_directors') ):
                        while ( have_rows('independent_directors') ) : the_row(); ?>
                       <div class="governance-inner-profile">
                          <?php if(get_sub_field('independent_linkedin_url')){ ?>
                           <div class="governacne-social-cover">
                               <a href="<?php the_sub_field('independent_linkedin_url');?>"><img src="<?php echo get_field('governance_linkedin_logo'); ?>" alt=""></a>
                           </div>
                           <?php } ?>
                           <div class="governance-profile">
                                <div class="governance-profile-img">
                                   <?php 
                                    $image = get_sub_field('independent_image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="gprofile-name">
                                        <h3><?php the_sub_field('independent_name');?></h3>
                                        <p><?php the_sub_field('independent_position');?></p>
                                    </div>
                                </div>
                                <?php if(get_sub_field('independent_content')){ ?>
                                <div class="governance-profile-content">
                                    <?php the_sub_field('independent_content');?>
                                </div>
                                <?php } ?>
                            </div>                    
                        </div>                    
                    <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="investor-item">
            <div id="events-investor" class="tab-content">
                <div class="events-cover">
                    <div class="events-title">
                        <h2>Upcoming Events:</h2>
                    </div>
                    <div class="events-items">
                        <div class="events-item">
                           <?php 
                            wp_reset_query();
                            //wp_reset_postdata();
                            $today = date('Ymd');
                            $args = array(
                                'post_type' => 'events',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'meta_query' => array(
                                    array(
                                        'key' => 'event_date',
                                        'compare' => '>=',
                                        'type' => 'DATE',
                                        'value' => $today,
                                    )
                                    ),
                            );
                            ?>
                            <?php 
                                $query1 = new WP_Query( $args );
                                while ( $query1->have_posts() ) {
                                    $query1->the_post();
                                ?>
                                <div class="upcoming-events">
                                    <div class="d-flex flex-nowrap">
                                       <div class="event-img">
                                           <?php echo get_the_post_thumbnail(); ?>
                                       </div>
                                       <div class="event-content">
                                        <?php 
                                         $date_string = get_field('event_date');
                                        $date = DateTime::createFromFormat('Ymd', $date_string);
                                        ?>
                                          <p class="events-date-custom"><?php echo $date->format('F jS, Y'); ?></p>
                                           <h3><?php the_title(); ?></h3>
                                           <?php the_content(); ?>
                                           <ul>
                                              <?php
                                                if( have_rows('links_repeater') ):
                                                    while ( have_rows('links_repeater') ) : the_row(); ?>                                                    
                                                    <li>
                                                       <?php 
                                                        $link = get_sub_field('link_item');
                                                        if( $link ): 
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                                            ?>
                                                                <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                        <?php endif; ?>                                                
                                                    </li>
                                                <?php endwhile;
                                                endif;
                                                ?>
                                           </ul>
                                       </div>
                                    </div>
                                    
                                </div>
                            <?php } wp_reset_query(); ?>                        
                        </div>
                    </div>
                </div>
                <div class="events-cover past-events-cover">
                    <div class="events-title">
                        <h2>Past Events:</h2>
                    </div>
                    <div class="events-items">
                        <div class="events-item">
                           <?php 
                            wp_reset_query();
                            //wp_reset_postdata();
                            $today = date('Ymd');
                            $args2 = array(
                                'post_type' => 'events',
                                'post_status' => 'publish',
                                'posts_per_page' => $per_page_post1,
                                'meta_query' => array(
                                    array(
                                        'key' => 'event_date',
                                        'compare' => '<',
                                        'type' => 'DATE',
                                        'value' => $today,
                                    )
                                    ),
                            );
                            ?>
                            <?php 
                            //wp_reset_postdata();
                                $query1 = new WP_Query( $args2 );
                                while ( $query1->have_posts() ) {
                                    $query1->the_post();
                                ?>
                                <div class="upcoming-events">
                                    <div class="d-flex">
                                       <div class="event-content">
                                        <?php 
                                         $date_string = get_field('event_date');
                                        $date = DateTime::createFromFormat('Ymd', $date_string);
                                        ?>
                                          <p class="events-date-custom"><?php echo $date->format('F jS, Y'); ?></p>
                                           <h3><?php the_title(); ?></h3>
                                           <ul>
                                              <?php
                                                if( have_rows('links_repeater') ):
                                                    while ( have_rows('links_repeater') ) : the_row(); ?>                                                   
                                                    <li>
                                                       <?php 
                                                        $link = get_sub_field('link_item');
                                                        if( $link ): 
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                                            ?>
                                                            <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                        <?php endif; ?>                                                
                                                    </li>
                                                <?php endwhile;
                                                endif;
                                                ?>
                                           </ul>
                                       </div>
                                    </div>
                                </div>
                            <?php } wp_reset_query(); ?>                        
                        </div>
                        <div class="event-load-more read-more cf text-center">
                            <?php  if($count_posts1 > $per_page_post1  ) {
                                echo '<a class="btn btn-primary">Load More</a>';
                            } ?>
                        </div>
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
                            $lightbox_checkbox = get_sub_field('lightbox_checkbox',5027);
                            if( !$lightbox_checkbox ){ ?>
                              <?php if(get_sub_field('client_logo_url',5027)){ ?>
                               <a href="<?php the_sub_field('client_logo_url',5027) ?>" target="_blank">
                                   <?php } ?> 
                                          <?php 
                                            $image = get_sub_field('client_image',5027);
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?> 
                                   <?php if(get_sub_field('client_logo_url',5027)){ ?>
                               </a>
                               <?php } ?>
                           <?php }else{ ?>
                               <?php if(get_sub_field('lightbox_video_url',5027)){ ?>
                                   <a data-fancybox href="<?php the_sub_field('lightbox_video_url',5027) ?>">
                                       <?php } ?> 
                                              <?php 
                                                $image = get_sub_field('client_image',5027);
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?> 
                                       <?php if(get_sub_field('lightbox_video_url',5027)){ ?>
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
<div class="company-overview">
    <div class="container">
        <div class="d-flex">
            <div class="company-left">
                <?php if(get_field('overview_content')){ ?><?php the_field('overview_content') ?><?php } ?>
                <?php 
                $link = get_field('overview_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>    
            </div>
            <div class="company-right">
                <div class="d-flex">
                   <?php
                    if( have_rows('title_with_content_repeater') ):
                        while ( have_rows('title_with_content_repeater') ) : the_row(); ?>
                            <div class="company-right-item">
                               <?php if(get_sub_field('overview_title')){ ?><h4><?php the_sub_field('overview_title');?></h4><?php } ?>
                               <?php if(get_sub_field('overview_content')){ ?><?php the_sub_field('overview_content');?><?php } ?>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    post_offset = increment = <?php echo $per_page_post; ?>;
</script>
<script type="text/javascript">
    post_offset_event = increment1 = <?php echo $per_page_post1; ?>;
</script>
<script type="text/javascript">
    var fillings_field_post_id = <?php echo $post->ID; ?>;
    var fillings_field_offset = <?php echo $number; ?>;
    var fillings_field_nonce = '<?php echo wp_create_nonce('fillings_field_nonce'); ?>';
    var fillings_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
    var fillings_more = true;
    function fillings_show_more() {
        jQuery.post(
            fillings_ajax_url, {
                // this is the AJAX action we set up in PHP
                'action': 'fillings_show_more',
                'post_id': fillings_field_post_id,
                'offset': fillings_field_offset,
                'nonce': fillings_field_nonce
            },
            function (json) {
                // add content to container
                // this ID must match the containter
                // you want to append content to
                jQuery('#sec-filings tbody').append(json['content']);
                // update offset
                fillings_field_offset = json['offset'];
                // see if there is more, if not then hide the more link
                if (!json['more']) {
                    // this ID must match the id of the show more link
                    jQuery('#fillings-show-more-link').css('display', 'none');
                }
            },
            'json'
        );
    }
</script>
<?php get_footer(); ?>