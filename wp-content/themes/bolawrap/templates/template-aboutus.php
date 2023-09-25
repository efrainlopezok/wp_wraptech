<?php /* Template Name: About us Template */ ?>
<?php get_header(); ?>

<div class="inner-banner dark-bg" style="background-image: url('<?php the_field('aboutus_banner_image') ?>');background-size: cover;">
    <div class="container text-center">
        <?php if(get_field('aboutus_banner_content')){ ?><?php the_field('aboutus_banner_content') ?><?php } ?>
        <div class="investor-tab">
            <ul>
                <li class="active" data-name="leadership"><a href="#">Leadership</a></li>
                <li><a href="#"  data-name="our-inventor">Our Inventor</a></li>
                <li><a href="#" data-name="videos">Videos</a></li>
            </ul>
        </div>
    </div>
</div>
<section class="investor-cover about-us-investor">
    <div class="container">
        <div class="investor-item">
            <div id="leadership"  class="tab-content active">
                 <?php if (get_field('title_leadership')) {?>
                <div class="independent-title directors">
                    <h3><?php echo get_field('title_leadership'); ?></h3>
                </div>
                <?php } ?>
                <div class="governance-profiles d-flex">
                   <?php
                    if( have_rows('aboutus_governance_profile') ):
                        while ( have_rows('aboutus_governance_profile') ) : the_row(); ?>
                       <div class="governance-inner-profile">
                           <?php if(get_sub_field('aboutus_governance_linkedin_url')){ ?>
                           <div class="governacne-social-cover">
                               <a href="<?php the_sub_field('aboutus_governance_linkedin_url');?>"><img src="<?php echo get_field('aboutus_governance_linkedin_logo') ?>" alt=""></a>
                           </div>
                           <?php } ?>
                           <div class="governance-profile">
                                <div class="governance-profile-img">
                                   <?php 
                                    $image = get_sub_field('aboutus_governance_image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="gprofile-name">
                                        <?php if(get_sub_field('aboutus_governance_name')){ ?><h3><?php the_sub_field('aboutus_governance_name');?></h3><?php } ?>
                                        <?php if(get_sub_field('aboutus_governance_position')){ ?><p><?php the_sub_field('aboutus_governance_position');?></p><?php } ?>
                                    </div>
                                </div>
							    <?php if(get_sub_field('aboutus_governance_content')){ ?>
                                <div class="governance-profile-content">
                                    <?php the_sub_field('aboutus_governance_content');?>
                                </div>
							    <?php } ?>
                            </div>                    
                        </div>                    
                    <?php endwhile;
                    endif;
                    ?>
                </div>
				<?php if(get_field('aboutus_independent_title')){ ?>
                    <div class="independent-title">
                      <h3><?php the_field('aboutus_independent_title') ?></h3>
                    </div>
				<?php } ?>
                <div class="governance-profiles independent-profiles d-flex">
                   <?php
                    //wp_reset_query();
                    if( have_rows('aboutus_independent_directors') ):
                        while ( have_rows('aboutus_independent_directors') ) : the_row(); ?>
                       <div class="governance-inner-profile">
                          <?php if(get_sub_field('aboutus_independent_linkedin_url')){ ?>
                           <div class="governacne-social-cover">
                               <a href="<?php the_sub_field('aboutus_independent_linkedin_url');?>"><img src="<?php echo get_field('aboutus_governance_linkedin_logo'); ?>" alt=""></a>
                           </div>
                           <?php } ?>
                           <div class="governance-profile">
                                <div class="governance-profile-img">
                                   <?php 
                                    $image = get_sub_field('aboutus_independent_image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="gprofile-name">
                                        <h3><?php the_sub_field('aboutus_independent_name');?></h3>
                                        <p><?php the_sub_field('aboutus_independent_position');?></p>
                                    </div>
                                </div>
							    <?php if(get_sub_field('aboutus_independent_content')){ ?>
                                <div class="governance-profile-content">
                                    <?php the_sub_field('aboutus_independent_content');?>
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
            <div id="our-inventor" class="tab-content">
                <div class="our-inventor-cover">
                   <div class="inventor-left">
					    <?php if(get_field('inventor_main_video_url')){ ?>
                        <div class="about-video-item">
                            <a data-fancybox href="<?php the_field('inventor_main_video_url'); ?>">
                               <?php 
                                $image = get_field('inventor_image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>
					    <?php } ?>
                        <div class="our-inventor-content">
                            <?php if(get_field('inventor_title')){ ?><h3><?php the_field('inventor_title'); ?></h3><?php } ?>
                            <?php if(get_field('inventor_main_content')){ ?><?php the_field('inventor_main_content'); ?><?php } ?>
                        </div>
                    </div>
                    <div class="inventor-right">
                       <?php
                        if( have_rows('video_bar_repeater') ):
                            while ( have_rows('video_bar_repeater') ) : the_row(); ?>
                                <div class="inventor-right-items">
                                    <a href="<?php the_sub_field('video_barurl');?>" data-fancybox>
                                        <?php 
                                        $image = get_sub_field('video_bar_image');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                    <div class="inc-content">
                                        <?php if(get_sub_field('video_bar_title')){ ?><h4><?php the_sub_field('video_bar_title');?></h4><?php } ?>
                                        <?php if(get_sub_field('video_bar_text')){ ?><p><?php the_sub_field('video_bar_text');?></p><?php } ?>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="investor-item">
            <div id="videos" class="tab-content">
               <div class="about-video-scrollbar">
                <div class="about-video-cover d-flex row">
                   <?php
                    if( have_rows('about_video_repeater') ):
                        while ( have_rows('about_video_repeater') ) : the_row(); ?>
                            <div class="about-video-item cell-md-6">
                                <?php if(get_sub_field('about_poster_image')){ ?>
                                <a data-fancybox href="<?php the_sub_field('about_video_url');?>" class="about-video-img">
                                    <img src="<?php the_sub_field('about_poster_image');?>" alt="">
                                </a>
                                <?php } ?>
                                <div class="about-video-content">
                                    <?php if(get_sub_field('about_video_title')){ ?><h4><?php the_sub_field('about_video_title');?></h4><?php } ?>
                                    <?php if(get_sub_field('about_video_content')){ ?><p><?php the_sub_field('about_video_content');?></p><?php } ?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
                </div>
				<div class="about-video-button text-center pt-30">
					<?php 
					$link = get_field('video_button_link');
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
</section>
<section class="custom-article-cover">
   <div class="container">
   <div class="d-flex">
        <div class="custom-article-images">
            <div class="custom-article-scroll">
                <div class="custom-article-flex">
                   <?php
                    if( have_rows('article_images_repeater') ):
                        while ( have_rows('article_images_repeater') ) : the_row(); ?>
                            <a data-fancybox href="<?php the_sub_field('article_image');?>" class="custom-article-item cell-md-4">
                                <img src="<?php the_sub_field('article_image');?>" alt="" />
                            </a>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="custom-article-content">
        <?php if(get_field('article_right_content')){ ?><?php the_field('article_right_content');?><?php } ?>
        <?php 
        $link = get_field('article_right_button');
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
<section class="client-logo about-client-logo">
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
<section id="contact" class="form-cover">
	<div class="container">
		<!-- <div class="section-title text-center">
<h3><b>Let's Connect!</b></h3>
</div> -->
		<!--<div class="typeform-widget" data-url="https://judahmeiteles.typeform.com/to/QrBE1v" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>-->
	<section class="bolawrap-cta force-margin-0" style="background:none;">
        <div class="container">
            <div class="cta-wrapper">
				<?php $pageID = get_option('page_on_front'); ?>
                <h3><?php the_field('cta_title', $pageID) ?></h3>
                <div class="btn-group">
					<?php 
					$link = get_field('cta_button', $pageID);
					if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					<?php 
					$link = get_field('cta_button_link', $pageID);
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
</section>
<?php get_footer(); ?>