<?php 
/* 
    Template Name: Landing1 Template 
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
	
	/* Section experience  */
	.section-experience {
		background-repeat: no-repeat;
		background-size: cover;
		padding: 121px 0;
	}
	.section-experience-wrapp{
		display: flex;
		align-items: center;
	}
	.experience-cards{
		flex: 0 0 50%;
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.experience-card{
		flex: 0 0 48%;
		margin-bottom: 30px;
	}
	.experience-card-head{
		background-repeat: no-repeat;
		background-size: cover;
		min-height: 156px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
	.experience-card-body{
		display: flex;
		min-height: 156px;
		padding: 24px 20px;
		background-color: #fff;
		border-left: 4px solid #4cddff;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
	}
	.experience-card-body .card-date{
		flex: 0 0 20%;
		
	}
	.experience-card-body .card-date h5{
		color: #bdbdbd;
		font-weight: 600;
		font-size: 25px;
		line-height: 1;
		margin-bottom: 5px;
	}
	.experience-card-body .card-date p{
		color: #bdbdbd;
		font-size: 12px;
		line-height: 1;
	}
	.experience-card-body .card-details h6{
		text-transform: uppercase;
		color: #6a6a6a;
		margin-bottom: 10px

	}
	.experience-card-body .card-details p{
		font-size: 12px;
		line-height: 1;
		color: #a6a6a6;
		margin-bottom: 10px

	}
	.experience-card-body .card-details p i{
		font-size: 12px;
		line-height: 1;
		color: #a6a6a6;
		margin-bottom: 10px

	}
	.experience-list{
		flex: 0 0 50%;
		padding-left: 150px;
	}
	.experience-list ul{
		list-style: none;
		margin-bottom: 30px;
	}
	.experience-list ul li{
		position: relative;
		padding-left: 30px;
	}
	.experience-list ul li::before{
		content: " ";
    	position: absolute;
    	top: 8px;
    	left: 0;
    	width: 25px;
    	height: 23px;
    	background-image: url(../assets/images/experience-check.png);
    	background-repeat: no-repeat;
    	background-size: 20px;
	}

	/* Section FAQ  */
	.section-faq{
		background-repeat: no-repeat;
		background-size: cover;
		padding: 94px 0;
		position: relative;
	}
	.faq-video-img{
		position: absolute;
    	top: 60px;
    	left: 0px;
    	z-index: 1;
	}
	.section-faq-header{
		text-align: center;
		padding-bottom: 88px;
	}
	.section-faq-header h3{
		color: #fff;
		text-transform: uppercase;
	}
	.section-faq-wrapper{
		display: flex;
	}
	.section-faq-video{
		flex-bases: 50%;
		width: 50%;
		padding: 36px 60px 0 0
	}
	
	.faq-video-inner{
		position: relative;
		display: block;
    	padding: 15px;
    	border-radius: 5px;
    	box-shadow: 0 11px 32px 0 rgba(52,52,52,.45);
    	background-color: rgba(232,239,244,.62);
		width: 100%;
		z-index: 2;
	}
	.faq-video-inner iframe{
		width: 100% !important;
    	max-width: 100%;
    	height: 310px !important;
	}
	.faq-video-inner a{
		position: relative;
		display: block;
	}
	.faq-video-inner a:after{
		content: '';
		position: absolute;
		background: url(../assets/images/playbutton.png) center left no-repeat;
    	background-size: 100%;
    	background-repeat: no-repeat;
    	position: absolute;
    	top: 50%;
    	left: 50%;
    	transform: translate(-50%,-50%);
    	height: 53px;
    	width: 70px;
	}
	.section-faq-text{
		flex-bases: 50%;
		width: 50%;
	}
	.faq-accordion-item{
		margin-bottom: 10px;
	}
	.faq-accordion-button{
		background-color: #4c6072;
    	position: relative;
    	color: #444;
    	cursor: pointer;
    	padding: 18px 18px 18px 35px;
    	width: 100%;
    	text-align: left;
    	border: none;
    	outline: none;
    	transition: 0.4s;
    	/* min-height: 72px; */
	}
	.faq-accordion-button:before{
		content: '';
    	background-color: #1c252f;
    	width: 15px;
    	height: 15px;
    	border-radius: 50%;
    	background-position: 76% 92%;
    	position: absolute;
    	top: 20px;
    	left: 10px;
	}
	.faq-accordion-button:after{
		content: '\002B';
    	font-weight: bold;
    	float: left;
    	margin-left: 5px;
    	position: absolute;
    	top: 12px;
    	left: 0.53em;
    	color: #fff;
	}
	.faq-accordion-button h5{
		color: #fff;
    	margin-bottom: 0;
    	font-weight: 700;
    	font-size: 15px;
	}
	.faq-accordion-content {
		padding: 8px 18px;
    	background-color: #526779;
    	display: none;
    	overflow: hidden;
    	color: #fff;
	}
	.faq-tet-more{
		display: none;
	}
	.section-faq-text a{
		text-decoration: none;
	}

	/* Section Download  */
	.section-download{
		background-repeat: no-repeat;
		background-size: cover;
		padding: 145px 0;
	}
	.section-download-wrapper{
		display: flex;
		align-items: center;
	}
	.section-download-text{
		width: 45%;
	}
	.section-download-samples{
		width: 55%;
		padding-left: 200px;
		position:relative;
	}
	.sample-item{
		background-color: #fff;
		padding: 15px;
		border-radius: 5px
	}

	.slider-nav-content{
		position: absolute;
		top: 50%;
		left: 0;
		min-width: 140px;
		text-align: right;
		transform: translateY(-50%);

	}
	.slider-nav-content p{
		font-size: 20px;
		font-weight: bold;
	}
	.slider-nav-control.slick-slider .slick-track{
		display: unset;
	}
	.slider-nav-control .slick-list.draggable{
		padding: 0 !important;
	}
	.slider-nav-control.slick-slider .slick-track p{
		width: 100%!important;
		text-align: right;
		font-size: 18px;
		font-weight: 400;
	}
	.slider-nav-control.slick-slider .slick-track .slick-current{
		color: #ffc208;
		font-weight: bold
	}

	/* Bolawrap Section  */
	.section-bolawrap{
		padding: 125px 0 100px;
		position: relative;
	}
	.bolawrap-wrapper{
		display: flex;
		flex-wrap: wrap;
	}
	.bolawrap-left{
		width: 35%;
    	padding-right: 90px;
    	position: relative;
	}
	.bolawrap-right{
		width: 65%;
    	position: relative;
	}
	.bolawrap-right-img{
		position: relative;
	}
	.bolawrap-right-img1{
		position: absolute;
    	top: 0;
    	right: 0;
		z-index: 2;
	}
	.bolawrap-right-img2{
		position: absolute;
    	top: 200px;
    	right: 100px;
		z-index: 1;
	}

	@media(max-width: 992px){
		.experience-list{
			padding-left: 50px;
		}
		.section-experience-wrapp{
			flex-direction: column;
		}
		.experience-cards{
			order: 1;
		}
		.experience-list{
			padding-bottom: 40px;
		}
		/* FAQ section  */
		.section-faq-video{
			padding: 36px 20px 0 0;
		}

		/* Download Sample  */
		.section-download-wrapper{
			flex-direction: column;
		}
		.section-download-text {
		    width: 100%;
			margin-bottom: 40px;
		}
		.section-download-samples{
			width: 100%;
		}
		.slider-nav-control.slick-slider .slick-track p{
			text-align: center;
		}
		.slider-nav-content p{
			margin-bottom: 0;
		}
	}

	@media(max-width: 768px){
		.section-faq {
		    padding: 50px 0;
		}
		.section-faq-header {
		    padding-bottom: 40px;
		}
		.section-faq-wrapper{
			flex-direction: column;
		}
		.faq-video-img img{
		    width: 50%;
		}
		.section-faq-video {
    		flex-bases: 100%;
    		width: 100%;
    		padding: 0 0 30px;
		}
		.section-faq-text {
		    flex-bases: 100%;
		    width: 100%;
		}
		/* Section Download  */
		.section-download{
			padding: 70px 0;
		}
	}

    @media(max-width:767px){
        .hero-section.armor .hero-caption .btn-group{
            margin-top: 30px;
        }
        .product_bottom_img iframe{
            height: 50vw !important;
            top: 0;
		}
		
		/* Section experience  */
		.section-experience {
			padding: 70px 0;
		}
		
		
	}
	@media(max-width: 580px){
		/* Section experience  */
		.experience-card{
			flex: 0 0 100%
		}
		.experience-list{
			flex: 0 0 100%;
			padding-left: 0;
			padding-bottom: 30px;
		}
		/* Download Sample  */
		.section-download{
			padding: 50px 0;
		}
		.section-download-samples {
		    padding-left: 0;
		}
		.slider-nav-content {
		    position: static;
		    min-width: 100%;
		    text-align: center;
		    transform: none;
		}
		.slider-nav-control.slick-slider .slick-track{
			display: flex;
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

<section class="section-bolawrap">
	<div class="container">
		<div class="bolawrap-wrapper">
			<div class="bolawrap-left">
				<div class="bolawrap-left-img">
					<a href="javascript:;" id="product_left_image" class="target_img">
                        <img src="https://wraptech.flywheelstaging.com/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                    </a>
					<img class="product-main-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap-product3.png)" alt="">
				</div>
				<div class="bolawrap-content">
					<div class="bolawrap-content-item" rel="product_left_image">
                	    <!-- <div class="bolawrap-content-line" style="width: auto; height: auto;">
                	        <svg id="svg">
                	          <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                	        </svg>
                	    </div> -->
                	    <div class="pr-content-animation">
                	      	<h3>Safety</h3>
							<p>Slide down to turn off – device will vibrate and laser will turn on.</p>
                	    </div>
                	</div>
				</div>
				<div class="bolawrap-download">
					<a class="btn" href="#" target="_blank">download brochure</a>
					<a href="#" target="_blank">Download Spec Sheet</a>
				</div>
			</div>
			<div class="bolawrap-right">
				<div class="bolawrap-right-header">
					<h2>The BolaWrap</h2>
				</div>
				<div class="bolawrap-right-img">
					<div class="bolawrap-right-img1">
						<a href="javascript:;" id="product_left_image" class="target_img">
                    	    <img src="https://wraptech.flywheelstaging.com/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                    	</a>
						<img class="product-main-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap-product2.png)" alt="">
					
					</div>
					<div class="bolawrap-right-img2">
						<a href="javascript:;" id="product_left_image" class="target_img">
                    	    <img src="https://wraptech.flywheelstaging.com/wp-content/themes/bolawrap/assets/images/target.png" alt="">
                    	</a>
						<img class="product-main-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wrap-product.png)" alt="">
					</div>
				</div>
				<div class="bolawrap-content">
					<div class="bolawrap-content-item" rel="product_left_image">
                	    <!-- <div class="bolawrap-content-line" style="width: auto; height: auto;">
                	        <svg id="svg">
                	          <line id="line" x1="0" y1="100%" x2="100%" y2="0"></line>
                	        </svg>
                	    </div> -->
                	    <div class="pr-content-animation">
                	      	<h3>Safety</h3>
							<p>Slide down to turn off – device will vibrate and laser will turn on.</p>
                	    </div>
                	</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="section-experience" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-bg.jpg)">
    <div class="container">
		<div class="section-experience-wrapp">
			<div class="experience-cards">
				<div class="experience-card">
					<div class="experience-card-head" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-single-event.jpg)">
					</div>
					<div class="experience-card-body">
						<div class="card-date">
							<h5>23</h5>
							<p>OCT</p>
						</div>
						<div class="card-details">
							<h6>single event</h6>
							<p><i class="fas fa-clock"></i> 1:00am - 1:00am</p>
							<p><i class="fas fa-map-marker"></i> 1817 4th Street Tempe, AZ 85281</p>
						</div>
					</div>
				</div>
				<div class="experience-card">
					<div class="experience-card-head" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-single-event.jpg)">
					</div>
					<div class="experience-card-body">
						<div class="card-date">
							<h5>23</h5>
							<p>OCT</p>
						</div>
						<div class="card-details">
							<h6>single event</h6>
							<p><i class="fas fa-clock"></i> 1:00am - 1:00am</p>
							<p><i class="fas fa-map-marker"></i> 1817 4th Street Tempe, AZ 85281</p>
						</div>
					</div>
				</div>
				<div class="experience-card">
					<div class="experience-card-head" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-single-event.jpg)">
					</div>
					<div class="experience-card-body">
						<div class="card-date">
							<h5>23</h5>
							<p>OCT</p>
						</div>
						<div class="card-details">
							<h6>single event</h6>
							<p><i class="fas fa-clock"></i> 1:00am - 1:00am</p>
							<p><i class="fas fa-map-marker"></i> 1817 4th Street Tempe, AZ 85281</p>
						</div>
					</div>
				</div>
				<div class="experience-card">
					<div class="experience-card-head" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-single-event.jpg)">
					</div>
					<div class="experience-card-body">
						<div class="card-date">
							<h5>23</h5>
							<p>OCT</p>
						</div>
						<div class="card-details">
							<h6>single event</h6>
							<p><i class="fas fa-clock"></i> 1:00am - 1:00am</p>
							<p><i class="fas fa-map-marker"></i> 1817 4th Street Tempe, AZ 85281</p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="experience-list">
				<h3>Experience BolaWrap</h3>
				<ul>
					<li>Attend a live demo in your area</li>
					<li>Join a live online introductory webinar</li>
					<li>Sign up for a free ‘Train the Trainer’ in your area</li>
					<li>Meet us at an upcoming conference</li>
				</ul>
				<a class="btn" href="#">view schedule</a>
			</div>
		</div>
    </div>
</section>

<section class="section-faq" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq-bg.jpg)">
	<div class="faq-video-img">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq-product.png)" alt="product">
	</div>
	<div class="container">
		<div class="section-faq-header">
			<h3>video FAQ</h3>
		</div>
		<div class="section-faq-wrapper ">
			<div class="section-faq-video">
				
				<div class="faq-video-inner">
					<!-- <a href="https://youtu.be/KLbh9W7tWs4" data-fancybox="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/faq-video.png)" alt="video">
					</a> -->
					<iframe src="https://www.youtube.com/embed/CAUz_Nes200" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen" data-origwidth="560" data-origheight="315" style="width: 540px; height: 303.75px;"></iframe>
				</div>
			</div>
			<div class="section-faq-text">
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>Who is WRAP® Technologies?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>What is the BolaWrap®?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>What are the benefits of the BolaWrap®?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>What is De-escalation and Use of Force?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>How do police officers deal with subjects who pose a threat but refuse to comply with officer commands?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-accordion-item">
					<div class="faq-accordion-button">
						<h5>In which situation should the BolaWrap® be used?</h5>
					</div>
					<div class="faq-accordion-content">
						<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
					</div>
				</div>
				<div class="faq-tet-more">
					<div class="faq-accordion-item">
						<div class="faq-accordion-button">
							<h5>How do police officers deal with subjects who pose a threat but refuse to comply with officer commands?</h5>
						</div>
						<div class="faq-accordion-content">
							<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
						</div>
					</div>
					<div class="faq-accordion-item">
						<div class="faq-accordion-button">
							<h5>In which situation should the BolaWrap® be used?</h5>
						</div>
						<div class="faq-accordion-content">
							<p>All BolaWrap products are manufactured in the USA, at Wrap’s headquarters.</p>
						</div>
					</div>
				</div>
				<a href="#"><i class="fas fa-angle-down"></i> More</a>
			</div>
		</div>
	</div>
</section>

<section class="section-download" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/experience-bg.jpg)">
	<div class="container">
		<div class="section-download-wrapper">
			<div class="section-download-text">
				<h3>Download your policy writing template</h3>
				<p>We want to see Bola Wraps® make it into the hands of every officer both domestically and internationally to help save lifes and reduce the risk of lethal force. Let us help you succeed in reducing costs, saving lives, and protecting both officers, perpetrators, and victims from unnecessary harm.</p>
				<a class="btn" href="#">download samples</a>
			</div>
			<div class="section-download-samples">
				<div class="samples-slider">
					<div class="sample-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/download-sample.png)" alt="sample">
					</div>
					<div class="sample-item">
						<img src="https://static.toiimg.com/photo/72975551.cms" alt="sample">
					</div>
					<div class="sample-item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/download-sample.png)" alt="sample">
					</div>
				</div>
				<div class="slider-nav-content">
					<p>View Samples</p>
					<div class="slider-nav-control">
						<p> Sample 1</p>
						<p> Sample 2</p>
						<p> Sample 3</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>