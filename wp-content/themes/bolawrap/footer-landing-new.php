<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>



			</div>

            <!-- footer part -->
            <footer class="main-footer">
               <div class="footer-text-bg">
                   <img src="<?php the_field('footer_background','option') ?>" alt="">
               </div>
                <div class="container dark-bg">
                   <div class="d-flex align-items-center">
                       <div class="footer-left">
                           <a href="<?php echo get_site_url(); ?>" class="footer-logo">
                               <img src="<?php the_field('footer_logo','option') ?>" alt="">
                           </a>
                          <div class="social-link desktop-only">
                            <ul id="menu-privacy-menu" class="menu">

                              <?php 

                              $footer_links = get_field('footer_settings_landing_new', $post->ID)['external_links'];
                              
                              foreach($footer_links as $link): ?>


                                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?php echo $link['link']['url']; ?>" target="<?php echo $link['link']['target']; ?>"><?php echo $link['link']['title']; ?></a></li>

                              <?php endforeach; ?>

                            </ul>
                          </div>
                       </div>
                       <div class="footer-right">
                           <div class="footer-right-item">

                                <div class="mobile">
                                    <div class="footer-title">Explore</div>
                                    <?php if(has_nav_menu('footer')) {
                                    //For navigation
                                    wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false) );
                                    } ?>
                                </div>

                           </div>
                           <div class="footer-right-item">
                               <div class="footer-title">Contact</div>
                               
                               <?php 
                               $footer_before_address_title_active = get_field('footer_settings_landing_new', $post->ID)['footer_address_title_active_landing_new'];
                               $footer_before_address_title_text = get_field('footer_settings_landing_new', $post->ID)['footer_address_title_text_landing_new'];
                               
                               if( $footer_before_address_title_active ): ?>
                                    <div class="footer-headquarters"><strong><?php echo $footer_before_address_title_text; ?></strong></div>
                               <?php endif; ?>
                               <div class="footer-address"><?php the_field('address','option'); ?></div>
                               <div class="footer-contact"><a href="tel:<?php the_field('phone_number','option'); ?>"><?php the_field('phone_number','option'); ?></a></div>
                               <div class="footer-email"><a href="mailto:<?php the_field('email_address','option'); ?>"><?php the_field('email_address','option'); ?></a></div>
                               <div class="footer-social">
                                   <ul>
                                      <?php
                                        if( have_rows('social_link','option') ):
                                            while ( have_rows('social_link','option') ) : the_row(); ?>
                                               <li>
                                                   <a href="<?php the_sub_field('link','option'); ?>" target="_blank"><?php the_sub_field('icon','option'); ?></a>
                                               </li>
                                            <?php endwhile;
                                        endif;
                                        ?>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="social-link mobile-only">
                   <?php if(has_nav_menu('social')) {
                       //For navigation
                       wp_nav_menu( array( 'theme_location' => 'social', 'container' => false) );
                    } ?>
                    </div>
                </div>
				<?php if(get_field('site_by_content','option')){ ?>
				<div class="site-built-by">
					<p><a href="<?php the_field('site_by_url','option') ?>" target="_blank"><?php the_field('site_by_content','option') ?> <img src="<?php the_field('site_by_logo','option') ?>"></a></p>
				</div>
				<?php } ?>
            </footer>
			<?php
            // $stockdata = file_get_contents('https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=WRTC&interval=5min&apikey=D8Y7WU17P1UZ5D6L');
            $stockdata = file_get_contents('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=WRTC&apikey=D8Y7WU17P1UZ5D6L');
            $myArray = json_decode($stockdata, true);

            ?>

            <div class="req-invite-cover">
                <div class="req-content">
					<a href="javascript:void(0)" class="req-close-btn"><i class="far fa-times-circle"></i></a>
                    <h4><?php the_field('form_title','option') ?></h4>
                    <?php echo do_shortcode( '[contact-form-7 id="20" title="Contact Form"]' ); ?>
                    <!--<p><?php //the_field('form_footer_text','option') ?></p>-->
                </div>
                <div class="req-button">
                <!-- $_SESSION["stockPrice"] -->
                    <a href="javascript:void(0)">
                    <span>NASDAQ: <b id="stockPriceBTNText">WRAP </b></span>
                    <i class="far fa-envelope"></i>
                    </a>
				</div>
            </div>
        </div>
        <script>
            var valueHolderId = "stockPriceBTNText";
            var todayStockPrice = null;
            var stockPriceRequestTime = null;
            var passedHours = null;
            var apiKey = "98e0db0f32mshb6c4c56681cebfcp123f64jsnf75776ceaab7";
            var stockSymbol = "WRAP";
            var requestUrl = "https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?symbols="+stockSymbol+"&region=US";
            // var settings = {
            //     "async": true,
            //     "crossDomain": true,
            //     "url": requestUrl,
            //     "method": "GET",
            //     "headers": {
            //         "Content-Type": "application/json",
            //         "x-rapidapi-key": apiKey,
            //         "x-rapidapi-host": "apidojo-yahoo-finance-v1.p.rapidapi.com"
            //     }
            // };
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://yahoo-finance15.p.rapidapi.com/api/yahoo/qu/quote/WRAP",
                "method": "GET",
                "headers": {
                    "x-rapidapi-key": "7959dfdbc1msh2a30c654b9f0af3p1552d9jsn45dc4286f43c",
                    "x-rapidapi-host": "yahoo-finance15.p.rapidapi.com"
                }
            };

            function handleApiError() {
                var default_price = 5.08;
                var todayStockPriceFromStorage = localStorage.getItem('todayStockPrice') ?? default_price;
                try {
                    if (todayStockPriceFromStorage) {
                        // console.log('Note: Value retrieved from storage.');
                        todayStockPrice = todayStockPriceFromStorage;
                        var lastRequestDate = localStorage.getItem("stockPriceRequestTime");
                        var passedHours = lastRequestDate ? getPassedTime(new Date(lastRequestDate), new Date()).hours: null;

                        if (passedHours && passedHours >= 4) {
                            localStorage.setItem("todayStockPrice", default_price);
                            todayStockPrice = default_price;
                        }

                        jQuery(`#${valueHolderId}`).append(todayStockPrice);
                    } else {
                        throw new Error(`Stock Api Unavailable, and there's no previous price stored.`)
                    }
                } catch (e) {
                    console.log(`Note: ${e.message}`);
                    jQuery(`#${valueHolderId}`).append(todayStockPrice);
                }
            }

            function getPassedTime(startDateTime, newDate) {
                var startStamp = startDateTime.getTime();
                var newStamp = newDate.getTime();
                var diff = Math.round((newStamp - startStamp) / 1000);

                var days = Math.floor(diff / (24 * 60 * 60));
                diff = diff - days * 24 * 60 * 60;
                var hours = Math.floor(diff / (60 * 60));
                diff = diff - hours * 60 * 60;
                var minutes = Math.floor(diff / 60);
                diff = diff - minutes * 60;
                var seconds = diff;

                return { days, hours, minutes, seconds };
            }

            todayStockPrice = localStorage.getItem("todayStockPrice");
            stockPriceRequestTime = localStorage.getItem("stockPriceRequestTime");
            if (!stockPriceRequestTime) {
                stockPriceRequestTime = new Date();
                localStorage.setItem("stockPriceRequestTime", new Date());
            }
            passedHours = getPassedTime(new Date(stockPriceRequestTime), new Date()).hours;

            if (!todayStockPrice || passedHours >= 4) {
                jQuery.ajax(settings).done(function (response) {
                    try {
                        console.log('Call has been made.');
                        var stockRegularPrice = parseFloat(response[0]["ask"]).toFixed(2);
                        localStorage.setItem('todayStockPrice', stockRegularPrice);
                        localStorage.setItem("stockPriceRequestTime", new Date());
                        jQuery(`#${valueHolderId}`).append(stockRegularPrice);
                    } catch (e) {
                        handleApiError();
                    }
                }).fail(function(error) {
                    handleApiError();
                });
            } else {
                handleApiError();
            }




        </script>
        <script>
            var wpcf7Form = document.querySelector( '.req-invite-cover .wpcf7' );

            wpcf7Form.addEventListener( 'wpcf7submit', function( event ) {
                setTimeout(function(){
                    if($('.req-invite-cover .wpcf7-response-output ').hasClass('wpcf7-mail-sent-ok')){
                        $('.req-button a').trigger('click');
                    }
                },2000)
            }, false );
        </script>

		<?php wp_footer(); ?>

    <!-- Twitter universal website tag code -->
    <script>
    !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init','o424v');
    twq('track','PageView');
    </script>
    <!-- End Twitter universal website tag code -->

	</body>
</html>
