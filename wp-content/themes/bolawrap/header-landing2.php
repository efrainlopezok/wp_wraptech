<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
session_start();
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<!-- Header -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		
		
        <script type="text/javascript">
			jQuery(document).ready(function($) {

				$(".epyt-gallery").append('<span class="back-arrow"></span>')

				$(".back-arrow").click(function(event) {
					$(".epyt-gallery .epyt-gallery-list").slideToggle();
					$('.__youtube_prefs__')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
				});

				$(".epyt-gallery-thumb").click(function(event) {
					$(".epyt-gallery .epyt-gallery-list").slideUp();
				});
				
				
      //param passing script
			var getParams = function (url) {
			var params = {};
			var parser = document.createElement('a');
			parser.href = url;
			var query = parser.search.substring(1);
			var vars = query.split('&');
			for (var i = 0; i < vars.length; i++) {
				var pair = vars[i].split('=');
				params[pair[0]] = decodeURIComponent(pair[1]);
			}
			return params;
      };
      
      // get all the params
      var params = getParams(window.location.href);
      // initialize holder list
      var paramList = [];
      
      // validate params before they are added to the list
			for(var on in params){
        if(on && on !== '') {
          var value = on + '=' +params[on];
          paramList.push(value);
        }
      }
      
      // validate that there's something to add
      if (paramList.length !== 0 ) {
        $('a').each(function(){
          try{
            // add the params list to all links 
            if(!$(this).hasClass("noUtm") && !$(this).parent(".noUtm").length ){
              if($(this).attr('href').indexOf('?')>=0){
                $(this).attr('href',$(this).attr('href')+'&'+paramList.join('&'));
              }else{
                $(this).attr('href',$(this).attr('href')+'?'+paramList.join('&'));
              }
            }	
          }catch(e){}
        });
      }

			});
		</script>
	
		<script>
!function(e,i){if(!e.pixie){var n=e.pixie=function(e,i,a){n.actionQueue.push({action:e,actionValue:i,params:a})};n.actionQueue=[];var a=i.createElement("script");a.async=!0,a.src="//acdn.adnxs.com/dmp/up/pixie.js";var t=i.getElementsByTagName("head")[0];t.insertBefore(a,t.firstChild)}}(window,document);
pixie('init', 'e5dcbb9b-0717-4e09-a5b7-929d11873bb2');
pixie('event', 'PageView');
</script>
<noscript><img width="1" height="1" style="display:none;" src="//ib.adnxs.com/pixie?pi=e5dcbb9b-0717-4e09-a5b7-929d11873bb2&e=PageView&script=0" /></noscript>
<script>
!function(e,i){if(!e.pixie){var n=e.pixie=function(e,i,a){n.actionQueue.push({action:e,actionValue:i,params:a})};n.actionQueue=[];var a=i.createElement("script");a.async=!0,a.src="//acdn.adnxs.com/dmp/up/pixie.js";var t=i.getElementsByTagName("head")[0];t.insertBefore(a,t.firstChild)}}(window,document);
pixie('init', 'bfcb75e6-ffa9-418c-9830-7ef537995b95');
pixie('event', 'PageView');
</script>
<noscript><img width="1" height="1" style="display:none;" src="//ib.adnxs.com/pixie?pi=bfcb75e6-ffa9-418c-9830-7ef537995b95&e=PageView&script=0" /></noscript>
<script type="text/javascript">
_linkedin_partner_id = "2242636";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2242636&fmt=gif" />
</noscript>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '561371958104404');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=561371958104404&ev=PageView&noscript=1"
/></noscript>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2977521249027449');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2977521249027449&ev=PageView&noscript=1"
/></noscript>

	
	</head>

  <body <?php body_class(); ?>>
  <a class="typeform-share button" href="https://form.typeform.com/to/QrBE1v" data-mode="popover" style="z-index:9999;width:54px;height:54px;position:fixed;box-shadow:0px 2px 12px rgba(0, 0, 0, 0.06), 0px 2px 4px rgba(0, 0, 0, 0.08);right:26px;bottom:60px;border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;background:#192B38;overflow:hidden;line-height:0;" target="_blank"> <span class="icon"> <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' style="margin-top:6px;"> <path d='M21 0H0V9L10.5743 24V16.5H21C22.6567 16.5 24 15.1567 24 13.5V3C24 1.34325 22.6567 0 21 0ZM7.5 9.75C6.672 9.75 6 9.07875 6 8.25C6 7.42125 6.672 6.75 7.5 6.75C8.328 6.75 9 7.42125 9 8.25C9 9.07875 8.328 9.75 7.5 9.75ZM12.75 9.75C11.922 9.75 11.25 9.07875 11.25 8.25C11.25 7.42125 11.922 6.75 12.75 6.75C13.578 6.75 14.25 7.42125 14.25 8.25C14.25 9.07875 13.578 9.75 12.75 9.75ZM18 9.75C17.172 9.75 16.5 9.07875 16.5 8.25C16.5 7.42125 17.172 6.75 18 6.75C18.828 6.75 19.5 7.42125 19.5 8.25C19.5 9.07875 18.828 9.75 18 9.75Z' fill='white' /> </svg> </span> </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
		<div class="wrapper">
            <div class="main-container">
                <!-- device menu -->
                <div class="mobilenav cell-md-none">
                    <div class="nav-backdrop"></div>
                    <!-- hamburger -->
                    <a href="javascript:;" class="hamburger">
                        <span class="wrap">
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                    </a>
                    <div class="menu-state" data-clickable="true">
                        <!-- menu header and hamburger -->
                        <div class="row no-gutters">
                            <div class="cell-8">
                            </div>
                            <a href="javascript:;" class="hamburger close">
                                    <span class="wrap">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </span>
                                </a>
                        </div>
                        <!--  main responsive menu -->
                        <div class="menu-outer">
                            <?php if(has_nav_menu('primary')) {
                               //For navigation
                               wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false) );            
                            } ?>
                            <div class="footer-social">
                               <ul>
                                  <?php
                                    if( have_rows('social_link','option') ):
                                        while ( have_rows('social_link','option') ) : the_row(); ?>                                                
                                           <li>
                                               <a href="<?php the_sub_field('link','option'); ?>"><?php the_sub_field('icon','option'); ?></a>
                                           </li>
                                        <?php endwhile;
                                    endif;
                                    ?>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>

                <!-- header part -->
        <!-- header part -->
        <?php
        $contact_us = get_field('contact_us','option') ? get_field('contact_us','option') : ''; 
        $investors = get_field('investors','option') ? get_field('investors','option') : ''; 
        
        $contact_us_url = '';
        $contact_us_title = '';
        $contact_us_target = '';
         if($contact_us != ''){
  
          $contact_us_url = $contact_us['url'] ? $contact_us['url'] : '';
          $contact_us_title = $contact_us['title'] ? $contact_us['title'] : '';
          $contact_us_target = $contact_us['target'] ? $contact_us['target'] : '';
         }                           
         $investors_url = '';
         $investors_title = '';
         $investors_target = '';
          if($investors != ''){
   
           $investors_url = $investors['url'] ? $investors['url'] : '';
           $investors_title = $investors['title'] ? $investors['title'] : '';
           $investors_target = $investors['target'] ? $investors['target'] : '';
          }        
        ?>
        <header class="main-header-2">
                    <div class="row-div">
                          <div class="col-div-6">
                                      <a href="<?php echo $contact_us_url; ?>" class="btn btn-yellow-2" target="<?php echo $contact_us_target; ?>" ><?php echo $contact_us_title; ?></a>
                          </div>  
                          <div class="col-div-6">
                                    <a href="<?php echo $investors_url; ?>" target="<?php echo $investors_target; ?>"><?php echo $investors_title; ?></a>
                          </div>  
                  </div>
                </header>
