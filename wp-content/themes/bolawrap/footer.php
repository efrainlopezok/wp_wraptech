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


global $wpdb;
$timeZone = new DateTimeZone('UTC');
$lastRequestRecordStoredInDB = $wpdb->get_results( "SELECT * FROM StockPrice ORDER BY id DESC LIMIT 1");
$lastRequestDate = new DateTime($lastRequestRecordStoredInDB[0]->request_date);
$dateNow = new DateTime('now', $timeZone);
$dateComparison = $lastRequestDate->diff($dateNow);
$hoursPassed = (int) $dateComparison->h;
$daysPassed = (int) $dateComparison->d;
$results = $wpdb->get_results( "SELECT * FROM StockPrice");
/**
 * Api call for the stock quote
 */
$url = 'https://yahoo-finance15.p.rapidapi.com/api/yahoo/qu/quote/WRAP';
$options = array(
	'headers' => array(
	  'Content-Type' => 'application/json',
	  'x-rapidapi-key' => 'dc606185dbmsh1008a1e5e1382d9p16abe7jsn142b72090674',
	  'x-rapidapi-host' => 'yahoo-finance15.p.rapidapi.com'
	)
);

function load_request($response) {
	try {
		$json = json_decode( $response['body'] );
	} catch ( Exception $ex ) {
		$json = null;
	}
	return $json;
}

// if 4 hours has passed or there's any records in the db the call to the api will be made
if ($hoursPassed >= 4 || $daysPassed > 0 || empty($lastRequestRecordStoredInDB)) {

	// get the stock price
	$apiRequest = load_request(wp_remote_get($url, $options));

	if ($apiRequest->message) {
		return;
	}

	$stockQuotePrice = number_format((float)$apiRequest[0]->regularMarketPrice, 2, '.', '');

	// log the price into the database table
	$wpdb->insert( 
	    'StockPrice', 
	    array( 
			'price' => $stockQuotePrice,
			'request_date' => current_time('mysql', 1)
	    )
	);

}

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
                           <?php if(has_nav_menu('social')) {
                               //For navigation
                               wp_nav_menu( array( 'theme_location' => 'social', 'container' => false) );
                            } ?>
                        </div>
                       </div>
                       <div class="footer-right">
                           <div class="footer-right-item">
                               <div class="footer-title">Explore</div>
                               <?php if(has_nav_menu('footer')) {
                                   //For navigation
                                   wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false) );
                                } ?>
                           </div>
                           <div class="footer-right-item">
                               <div class="footer-title">Contact</div>
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
                    <span>NASDAQ: <b id="stockPriceBTNText">WRAP <?php echo $lastRequestRecordStoredInDB[0]->price; ?></b></span>
                    <i class="far fa-envelope"></i>
                    </a>
				</div>
            </div>
        </div>

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
