<?php 
/* 
    Template Name: Template: Welcome Screen
*/ 
?>
<?php get_header("landing2"); ?>
<section class="hero-section-welcome">
        <video poster="" playsinline="" autoplay="" muted="" loop="" style="height:auto;" __idm_id__="985801729">
            <source src="https://ta-dev01.net/wrap/wp-content/uploads/2021/04/banner-video-32.mp4" type="video/mp4">      
        </video>
        <div class="container">
            <div class="welcome-hero-screeen">
                <figure class="hero-logo animate-o " id="hero_logo">
                    <a> <span><img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/log_wrap_welcome.png" alt=""> </span></a>
                </figure>  

                <h2 class="animate-o" id="hero_text">
                    <span class="no-typewrite">Driving public safety to </span>
                    <span class="typewrite" data-period="2000" data-type='["PROGRESS", "BETTER OUTCOMES", "DE-ESCALATION", "NON-LETHAL OPTIONS"]'>
                        <strong class="wrap"></strong>
                    </span>
                </h2>
            </div>
        </div>
        <div class="container sub-title">
            <h3 class="animate-o">Choose Safety Product</h3>
        </div>
        <div class="col__service">
            <div class="wrap-boxes">
                <div class="item-box animate-o" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-1.png)" id="_box01">
                    <img class="arrow animate-o" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-100.png" alt="">
                    <div class="bg-inner-figure" >
                        <div class="border-effect"></div>
                        <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bolawrap_logo_ko.png" alt="">
                        </figure>
                        <!-- <div class="service-inner"> -->
                            <div class="w-img-left">
                                <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/Product.png" alt="">
                            </div>
                            <div class="w-text">
                                <p>Like "remote handcuffs", BolaWrap® safely & humanely restrains resisting subjects from a distance without relying on pain compliance tools.</p>
                            </div>
                        <!-- </div> -->
                        <div class="w-footer">
                            <p>Enter Site</p>
                        </div>
                    </div>
                </div>

                <div class="item-box animate-o" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-2.png)" id="_box02">
                    <img class="arrow animate-o" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-100.png" alt="">
                    <div class="bg-inner-figure" >
                        <div class="border-effect"></div>
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bolawrap_logo_ko.png" alt="">
                        </figure>
                        <!-- <div class="service-inner"> -->
                            <div class="w-img-left">
                                <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/Product.png" alt="">
                            </div>
                            <div class="w-text">
                                <p>Like "remote handcuffs", BolaWrap® safely & humanely restrains resisting subjects from a distance without relying on pain compliance tools.</p>
                            </div>
                        <!-- </div> -->
                        <div class="w-footer">
                            <p>Enter Site</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
 <style>
 
 </style>
    
</section>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<footer class="footer-wrap ">
    <div class="container">
        <div class="row-div">
            <div class="col-div-24 col-1-footer">
                <?php if ( is_active_sidebar( 'footer-side-bar-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-side-bar-1' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-div-24 col-2-footer">
                <?php if ( is_active_sidebar( 'footer-side-bar-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-side-bar-2' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-div-52 col-3-footer">
            <?php if ( is_active_sidebar( 'footer-side-bar-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-side-bar-3' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

    <style>
        
    </style>
    <script>
        jQuery(document).ready(function() {
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<strong class="wrap">'+this.txt+'</strong>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
                }

                setTimeout(function() {
                that.tick();
                }, delta);
            };

            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                      new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 1px solid #fff;margin-left: 2px;}";
                document.body.appendChild(css);
            };

            // If Hover
            var over = false;
            jQuery('.bg-inner-figure').hover(function() {
                jQuery('.sub-title').css('opacity', '0.5');
            },
            function () {
                jQuery('.sub-title').css('opacity', '1');
            });

        });
    </script>

<script>
    jQuery(document).ready(function() {
        jQuery('#hero_logo').addClass('animate__animated animate__fadeInUp');
        jQuery('#hero_text').addClass('animate__animated animate__fadeInUp animate__delay-015s');

        jQuery('#_box01').addClass('animate__animated anim_fadeInUp animate__delay-05s');
        jQuery('#_box02').addClass('animate__animated anim_fadeInUp animate__delay-085s');

        jQuery('.hero-section-welcome .sub-title h3').addClass('animate__animated animate__fadeIn animate__delay-1_3s');
        jQuery('.item-box .arrow').addClass('animate__animated animate__fadeInDown animate__delay-1s');
    });
</script>

<?php wp_footer(); ?>