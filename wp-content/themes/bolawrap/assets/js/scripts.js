var $ = jQuery.noConflict();

/* Script on ready
------------------------------------------------------------------------------*/
$(document).ready(function ($) {

    // custom-article isotope
    $( ".investor-tab li a" ).on('click',function (e) {
    e.preventDefault();    
        setTimeout(function(){
            $('.custom-article-flex').isotope({
                itemSelector: '.custom-article-item',
            });
        },100);
    });

    /* Responsive Jquery Navigation */
    $('.hamburger').click(function (event) {
        $('.mobilenav').toggleClass('is-open');
    });

    $('.mobilenav .nav-backdrop').click(function () {
        $('.mobilenav').removeClass('is-open');
    });

    var clickable = $('.menu-state').attr('data-clickable');
    $('.mobilenav li:has(ul)').addClass('has-sub');
    $('.mobilenav .has-sub>a').append('<em class="caret">');
    if (clickable == 'true') {
        $('.mobilenav .has-sub>.caret').addClass('trigger-caret');
    } else {
        $('.mobilenav .has-sub > a').addClass('trigger-caret').attr('href', 'javascript:;');
    }

    /* menu open and close on single click */
    $('.mobilenav .has-sub a').click(function () {
        var element = $(this).parent('li');
        if (element.hasClass('is-open')) {
            element.removeClass('is-open');
            element.find('li').removeClass('is-open');
            element.find('ul').slideUp(200);
        }
        else {
            element.addClass('is-open');
            element.children('ul').slideDown(200);
            element.siblings('li').children('ul').slideUp(200);
            element.siblings('li').removeClass('is-open');
            element.siblings('li').find('li').removeClass('is-open');
            element.siblings('li').find('ul').slideUp(200);
        }
    });

    /* Product section line */
    product_line();


    /* Prodcution section target image jquery */
    if ($(window).width() > 767) {
        $('.target_img').on('click', function () {
            $('.target_img').removeClass('active');
            $(this).addClass('active');
            $('.product-img-cover').removeClass('active');
            $(this).parent('.product-img-cover').addClass('active');
            $('.product-content-item').removeClass('active');
            var k = $(this).attr('id');
            $('.product-content-item').each(function () {
                var j = $(this).attr('rel');
                if (k == j) {
                    $(this).addClass('active');
                }
            })
            setTimeout(function () {
                product_line();
            }, 10)

            //if($(window).width() < 768){
            // if ($('.product-left .product-content-item').hasClass('active')) {
            //     $('html,body').animate({
            //         scrollTop: $('.product-left .product-content-item.active').offset().top - ($(window).height() / 2)
            //     })
            // }
            //}

        })
    } else {
        $('.target_img').on('click', function () {
            var that = $(this);
            $(this).parents('.product-left').find('.product-content-item').removeClass('active');
            $(this).parents('.product-left').find('.target_img').removeClass('active');
            $(this).addClass('active');
            $(this).parent('.product-img-cover').addClass('active');
            var k = $(this).attr('id');
            $('.product-content-item').each(function () {
                var j = $(this).attr('rel');
                if (k == j) {
                    $(this).addClass('active');
                }
            })
            // if ($(this).parents('.product-main-inner').find('.xs_top_content').hasClass('mobile-only')) {
            //     $('html,body').animate({
            //         scrollTop: that.parents('.product-main-inner').find('.xs_top_content').offset().top - ($(window).height() / 2)
            //     })
            // } else {
            //     $('html,body').animate({
            //         scrollTop: $('.product-left .product-content-item.active').offset().top - ($(window).height() / 2)
            //     })
            // }

        })
    }

    // Armor
    if ($(window).width() < 767) {
        $('.mobile-front .target_img').on('click', function () {
            $('.mobile-front .target_img').removeClass('active');
            $(this).addClass('active');
            $('.mobile-front .product-img-cover').removeClass('active');
            $(this).parent('.mobile-front .product-img-cover').addClass('active');
            $('.mobile-front .product-content-item').removeClass('active');
            var k = $(this).attr('id');
            $('.mobile-front .product-content-item').each(function () {
                var j = $(this).attr('rel');
                if (k == j) {
                    $(this).addClass('active');
                }
            })
            setTimeout(function () {
                product_line();
            }, 10)

            //if($(window).width() < 768){
            // if ($('.mobile-front .product-left .product-content-item').hasClass('active')) {
            //     $('html,body').animate({
            //         scrollTop: $('.mobile-front .product-left .product-content-item.active').offset().top - ($(window).height() / 2)
            //     })
            // }
            //}
        })
    }

    if ($(window).width() < 767) {
        $('.mobile-back .target_img').on('click', function () {
            $('.mobile-back .target_img').removeClass('active');
            $(this).addClass('active');
            $('.mobile-back .product-img-cover').removeClass('active');
            $(this).parent('.mobile-back .product-img-cover').addClass('active');
            $('.mobile-back .product-content-item').removeClass('active');
            var k = $(this).attr('id');
            $('.mobile-back .product-content-item').each(function () {
                var j = $(this).attr('rel');
                if (k == j) {
                    $(this).addClass('active');
                }
            })
            setTimeout(function () {
                product_line();
            }, 10)

            //if($(window).width() < 768){
            // if ($('.mobile-back .product-left .product-content-item').hasClass('active')) {
            //     $('html,body').animate({
            //         scrollTop: $('.mobile-back .product-left .product-content-item.active').offset().top - ($(window).height() / 2)
            //     })
            // }
            //}
        })
    }

    /* Request form - sticky form */
    if ($(window).width() > 1199) {
        $(".req-button a").on("click", function () {
            $(this).parents(".req-invite-cover").toggleClass("active");
            $('.req-invite-cover').addClass('has-clicked');
        });
        /*$( ".wpcf7-form" ).submit(function( event ) {
          $(".req-invite-cover").toggleClass("active");
        });*/
        $(".req-button").length > 0 && $(".req-button").css("width", $(".req-invite-cover").height());
        
        $('.req-close-btn').on("click", function () {
            $(".req-invite-cover").removeClass("active");
        });
    } else {
        $(".req-button a").on("click", function () {
            if ($(this).parents(".req-invite-cover").hasClass('active')) {
                $(this).parents(".req-invite-cover").removeClass('active').find('.req-content').stop().slideUp();
            } else {
                $(this).parents(".req-invite-cover").addClass('active').find('.req-content').stop().slideDown();
            }
        })
        //$(".req-button").length > 0 && $(".req-button").css("width", $(".req-invite-cover").height());
        
        $('.req-close-btn').on("click", function () {
            $(".req-invite-cover").removeClass('active').find('.req-content').stop().slideUp();
        });
    }
    
    


    /* Client Logo custom scrollbar */
    if (jQuery('.client-logo-inner').length > 0) {
        jQuery('.client-logo-inner').mCustomScrollbar({
            theme: "dark-3",
            axis: "x",
            advanced: { autoExpandHorizontalScroll: true },
            mouseWheel: true,
            mouseWheelPixels: 150,
            wheelSpeed: 100
        });
    }
    
    // Slide
    jQuery('.wrap-slide').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }}
        ]
    });
    // if (jQuery('.wrap-slide').length > 0) {
    //     jQuery('.wrap-slide').mCustomScrollbar({
    //         scrollButtons:{ enable:true },
    //         theme: "dark-3",
    //         axis: "x",
    //         advanced: { autoExpandHorizontalScroll: true },
    //         mouseWheel: true,
    //         mouseWheelPixels: 400,
    //         wheelSpeed: 100,
    //     });
    // }
    /* News section inner scrollbar */
    /*if (jQuery('.news-inner').length > 0) {
        jQuery('.news-inner').mCustomScrollbar({
            theme: "dark-3",
            advanced: { autoExpandHorizontalScroll: true },
            mouseWheel: true,
            mouseWheelPixels: 60,
            scrollEasing: "easeInOut"
        });
    }*/


    /* Grayscale - client logo section */
    $('.client-item').on('mouseenter', function () {
        $(this).removeClass('grayscale');
    })
    $('.client-item').on('mouseleave', function () {
        $(this).removeClass('grayscale');
    })

    $(".client-item").mouseenter(function () {
        $(this).removeClass('grayscale');
    })
        .mouseleave(function () {
            $(this).addClass('grayscale');
        });

    /* Mobile - product section scrollbar */
    $('.custom-btn, .pr-content-animation .btn, .xs_top_content .btn').on('click', function () {
        $('html,body').animate({
            scrollTop: $('.form-cover').offset().top
        })
        return false;
    })

    /* Get maxheight of News section - title height */
    news_height();

    /* if (jQuery('.media-post-left-inner').length > 0) {
        jQuery('.media-post-left-inner').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 137,
            wheelSpeed: 10,
        });
    }*/
    

    if (jQuery('.news-inner-scroll').length > 0) {
        jQuery('.news-inner-scroll').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 50,
            wheelSpeed: 10,
        });
    }


    if (jQuery('.media-post-video').length > 0) {
        jQuery('.media-post-video').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 273,
            wheelSpeed: 10
        });
    }

    if (jQuery('.governance-profile-content').length > 0) {
        jQuery('.governance-profile-content').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 250,
            wheelSpeed: 1
        });
    }
    /*if (jQuery('#investor-governance').length > 0) {
        jQuery('#investor-governance').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 250,
            wheelSpeed: 1
        });
    }*/

    /*if (jQuery('.sec-filings-table').length > 0) {
        jQuery('.sec-filings-table').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 250,
            wheelSpeed: 1
        });
    }*/
    /*if (jQuery('#leadership').length > 0) {
        jQuery('#leadership').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 250,
            wheelSpeed: 1
        });
    }*/
    /*if (jQuery('.about-video-scrollbar').length > 0) {
        jQuery('.about-video-scrollbar').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 490,
            wheelSpeed: 1,
            mouseWheel:0
        });
    }*/
    if (jQuery('.custom-article-scroll').length > 0) {
        jQuery('.custom-article-scroll').mCustomScrollbar({
            theme: "dark-3",
            axis: "y",
            advanced: { autoExpandHorizontalScroll: false },
            mouseWheel: true,
            mouseWheelPixels: 250,
            wheelSpeed: 1
        });
    }





    $('.investor-tab li').on('click', function () {
        var k = $(this).index();
        var j = $(this).find('a').data('name');
        $('.investor-tab li').removeClass('active');
        $(this).addClass('active');
        $('.investor-item .tab-content').removeClass('active');
        $('.investor-cover .investor-item').eq(k).find('.tab-content').addClass('active');

        if ($('#investor-governance').hasClass('active')) {
            $('.client-logo').hide();

        } else {
            $('.client-logo').show();
        }

        if (j == 'our-inventor') {
            $('.custom-article-cover').addClass('active');
        } else {
            $('.custom-article-cover').removeClass('active');
        }
        return false;
    })



    $('.tabs-nav a').on('click', function (event) {
        event.preventDefault();

        $('.tab-active').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage div.tab-content').hide();
        // $($(this).attr('href')).show();
        var id_tab = $(this).attr('href');
        var res = id_tab.replace("#", "");
        jQuery('.tabs-stage .'+res).show();
    });

    // Active tabs-nav
    var hash = window.location.hash;
    if (hash) {
        jQuery('.mediapage-category li').removeClass('tab-active');
        jQuery('.tabs-stage .tab-content').css('display','none');
        switch(hash) {
            case '#coverage':
                jQuery('.mediapage-category li.coverage').addClass('tab-active');
                jQuery('.tabs-stage .coverage').css('display','block');
                break;
            case '#announcements':
                jQuery('.mediapage-category li.announcements').addClass('tab-active');
                jQuery('.tabs-stage .announcements').css('display','block');
                break;
            case '#heroes':
                jQuery('.mediapage-category li.heroes').addClass('tab-active');
                jQuery('.tabs-stage .heroes').css('display','block');
                break;
            default:
                jQuery('.mediapage-category li.coverage').addClass('tab-active');
                jQuery('.tabs-stage .coverage').css('display','block');
        }
    }else{
        $('.tabs-nav a:first').trigger('click'); // Default
    }

    $('.inner-banner .btn-sidebar').on('click', function () {
        $('.req-button a').trigger('click');
    });
    
    //load section media page
    jQuery(document).on('click', '.tabs-stage .coverage .load-more a', function(e) {
        var pos = jQuery(window).scrollTop();
        jQuery('html').attr('data-pos', pos); // get actual scrollpos
    });
    jQuery(document).on('click', '.tabs-stage .announcements .load-more a', function(e) {
        var pos = jQuery(window).scrollTop();
        jQuery('html').attr('data-pos', pos); // get actual scrollpos
    });
    jQuery(document).on('click', '.tabs-stage .heroes .load-more a ', function(e) {
        var pos = jQuery(window).scrollTop();
        jQuery('html').attr('data-pos', pos); // get actual scrollpos
    });
    
    // if($('.menu').length){
     //    $('.menu a[href*=#]:not([href=#])').click(function () {
     //        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
     //            var target = $(this.hash);
      //           target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      //           if (target.length) {
      //               $('html,body').animate({
      //                   scrollTop: target.offset().top
       //              }, 1000);
       //              return false;
       //          }
      //       }
     //    });
   //  }
    
    // Acordion
    jQuery('.wrap-acordion .accordion').click(function(event) {
        /* Act on the event */
        jQuery(this).toggleClass('active');
        jQuery(this).parent().find('.panel').slideToggle(500);
    });  

    // Tabs
 
        

    jQuery('.btn-goup-big .btn-big a').click(function(e) {
        e.preventDefault();
        jQuery('.btn-goup-big .btn-big').removeClass('tab-active');
        jQuery('.cont-tab-armor').removeClass('tab-active');

        var tab = jQuery(this).attr('data-tab');
        
        jQuery('.btn-goup-big .btn-big').removeClass('tab-active');
        jQuery('.btn-goup-big a').removeClass('tab-link-active');
        jQuery('.'+tab).addClass('tab-active');

        
        
        if(tab == 'cont-tab-right'){

            jQuery('.btn-goup-big .btn-big').find('.link-tab-right').parent().addClass('tab-active');
           
            if(jQuery(window).width() <= 767){
                jQuery('.mobile-front #product_left_image_11').trigger('click');
                jQuery('.mobile-back #product_left_image_12').trigger('click');
            }else{
                jQuery('#product_left_image_12').trigger('click');
           
                setTimeout(function () {
                    jQuery('#product_left_image_12').trigger('click');
                }, 300)
            }

           
        }
        if(tab == 'cont-tab-left'){

            jQuery('.btn-goup-big .btn-big').find('.link-tab-left').parent().addClass('tab-active');
            
            if(jQuery(window).width() <= 767){
                jQuery('.mobile-front #product_left_image_3').trigger('click');
                jQuery('.mobile-back #product_left_image_2').trigger('click');
            }else{
                jQuery('#product_left_image_2').trigger('click');
            }

        }
    });


    jQuery('.btn-goup-big .btn-big a').click(function(e) {
        jQuery('.frame1 iframe').attr('src', jQuery('.frame1 iframe').attr('src'));
        jQuery('.frame2 iframe').attr('src', jQuery('.frame2 iframe').attr('src'));
    });
    
    jQuery(".bolawrap-cta.armor .btn-group .btn-link").click(function() {
        // jQuery( ".cont-form" ).toggle({
        //     duration: 100,
        // });
        jQuery(".cont-form").fadeToggle();
    });


    if (jQuery('.wrap-slide-landing').length > 0) {
        jQuery('.wrap-slide-landing').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 5,
            autoplay: false,
            autoplaySpeed:5000,
            centerPadding: '60px',
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 1324,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                }
            },

            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });
    }

});
function news_height() {
    var maxHeight = 0;
    $(".news-header h4").css('height', 'auto');
    $(".news-header").each(function () {
        if (maxHeight < $(this).find('h4').height()) {
            maxHeight = $(this).find('h4').height();
        }
    })
    if($(window).width() > 767){
        $(".news-header h4").height(maxHeight);
    }

}
/* Script on load
------------------------------------------------------------------------------*/
$(window).on('load', function () {
    $('.req-invite-cover').addClass('site-loaded');
    $('.product-left .product-content').css('opacity', '1');
    $('.product-top-svg').addClass('has-site-loaded');

    var url = $(location).attr("href");
    var id = url.substring(url.lastIndexOf('?') + 1);
    var id_hash = url.substring(url.lastIndexOf('#') + 1);
    if(url != id_hash){
        $('html,body').animate({
            scrollTop: $('#'+ id_hash).offset().top - $('header').outerHeight()
        }, 1000)
    }

    var openToggle = getCookie("open"); 
    if (openToggle===undefined) {
        setTimeout(function(){
            if($('body').hasClass('home')){
                if(!$('.req-invite-cover').hasClass('has-clicked')){
                    $('.req-button a').trigger('click');
                    setCookie("open", true, 1);
                }
            }
        },15000)
    }
    
    // Change url link on boxes
    jQuery('.news-cover.sec-recent .news-item').each(function(i, el) {        
        var url = jQuery(this).find('.text-center a').attr('href');
        var base_url = url.split('?');
        var new_url = url.split('#');
        var new_url = new_url['1'].split('&');
        var url_valid = base_url['0']+'?=undefined#'+new_url['0'];
        jQuery(this).find('.text-center a').attr('href',url_valid);       
    });

    // Purchasing Page
    var pur_page = jQuery('body.page-template-template-purchase').length;
    if (pur_page > 0) {
        setTimeout(function () {
            jQuery('#product_left_image_6').trigger('click');
        }, 600)
    }else{
        // Load Armor page
        if (jQuery(window).width() >= 767) {
            setTimeout(function () {
                jQuery('#product_left_image_2').trigger('click');
            }, 500)
        }else{
            setTimeout(function () {
                jQuery('.product-content-item').removeClass('active');
                jQuery('.target_img').removeClass('active');
                jQuery('.mobile-front #product_left_image_3').trigger('click');
                jQuery('.mobile-back #product_left_image_2').trigger('click');
            }, 700)
        }
    }

});

/* Script on scroll
------------------------------------------------------------------------------*/
var count_scr = 0;
$(window).on('scroll', function () {

    if ($(this).scrollTop() > 1) {
        $('.main-header').addClass('header-sticky');
    } else {
        $('.main-header').removeClass('header-sticky');
    }

    var pur_page = jQuery('body.page-template-template-purchase').length;
    if (pur_page > 0) {
        if (jQuery(this).scrollTop() > 50) {
            if(count_scr <= 50){
                setTimeout(function () {
                    console.log('scroll page');
                    jQuery('#product_left_image_6').trigger('click');
                }, 400)
                count_scr++;
            }
        }
    }else{
        if (jQuery(this).scrollTop() > 50) {
            if (jQuery(window).width() >= 767) {
                if(count_scr <= 3){
                    setTimeout(function () {
                        jQuery('#product_left_image_2').trigger('click');
                    }, 400)
                    count_scr++;
                }
            }
        }
    }

    // Tab Left 
    if (jQuery(this).scrollTop() > 700) {
        jQuery('.tabs-armor.tabs-left').fadeIn();
    }else{
        jQuery('.tabs-armor.tabs-left').fadeOut();
    }

});

/* Script on resize
------------------------------------------------------------------------------*/
$(window).on('resize', function () {
    function getMobileOperatingSystem() {
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;
      
        // Windows Phone must come first because its UA also contains "Android"
        if (/windows phone/i.test(userAgent)) {
            return "Windows Phone";
        }

        var ua = navigator.userAgent.toLowerCase();
        var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
        if(isAndroid) {
            return "Android";
        }
    
        // iOS detection from: http://stackoverflow.com/a/9039885/177710
        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            return "iOS";
        }
    
        return "unknown";
    }

    var pur_page = jQuery('body.page-template-template-purchase').length;
    if (pur_page > 0) {
        setTimeout(function () {
            product_line();
            news_height();
        }, 100)
    }else{
        if (jQuery(window).width() < 767) {
            if(getMobileOperatingSystem() == "iOS" || getMobileOperatingSystem() == "Android"){
                // jQuery('.product-cover.armor .product-content-item').removeClass('active');
                
                // jQuery('.mobile-back #product_left_image_2').trigger('click');
                // jQuery('.mobile-front #product_left_image_3').trigger('click');

                console.log('return');
                return;
            }else{
                setTimeout(function () {
                    product_line();
                    news_height();
                }, 100)
            
                if (jQuery(window).width() > 767) {
                    jQuery('.product-cover.armor .product-content-item').removeClass('active');
                    jQuery('#product_left_image_2').trigger('click');
                }
                if (jQuery(window).width() < 767) {
                    jQuery('.product-cover.armor .product-content-item').removeClass('active');

                    jQuery('.mobile-front #product_left_image_3').trigger('click');
                    jQuery('.mobile-back #product_left_image_2').trigger('click');

                }
            }   
        }else{
            setTimeout(function () {
                product_line();
                news_height();
            }, 100)
            if (jQuery(window).width() > 767) {
                jQuery('.product-cover.armor .product-content-item').removeClass('active');
                jQuery('#product_left_image_2').trigger('click');
            }
            if (jQuery(window).width() < 767) {
                jQuery('.product-cover.armor .product-content-item').removeClass('active');

                jQuery('.mobile-front #product_left_image_3').trigger('click');
                jQuery('.mobile-back #product_left_image_2').trigger('click');
            }
        }
    }

});

/* Script all functions
------------------------------------------------------------------------------*/
function product_line() {
    /* Second Product line(Top Product) */
    if ($('.product-content').length) {
        var j1 = $('.product-content').offset().top;
        var k1 = $('#product_top_image').offset().top;

        var p1 = $('.product-content').offset().left;
        var t1 = $('#product_top_image').offset().left;

        var p_height1 = (j1 - k1) + ($('#product_top_image').outerHeight() / 2) - 20;
        var p_width1 = (t1 - p1) - 20;
        $('.product-top-svg').css('height', p_height1);
        $('.product-top-svg').css('width', p_width1);
    }

    /* First product line(left product) */
    if ($('.product-content-line').length) {
        $('.product-content-line').css('width', 'auto');
        $('.product-content-line').css('height', 'auto');


        var j = $('.product-content-item.active').offset().top;
        var k = $('.product-left-img .target_img.active').offset().top;
        if (j > k) {
            var p_height = j - k + ($('.product-left-img .target_img.active').outerHeight() / 2) - 30;
            $('.product-content-item.active').addClass('value-minus');
        } else {
            var p_height = k - j + ($('.product-left-img .target_img.active').outerHeight() / 2) - 30;
            $('.product-content-item.active').removeClass('value-minus');
        }

        var p = $('.product-content-item.active').offset().left;
        var t = $('.product-left-img .target_img.active').offset().left;
        if (p > t) {
            var p_width = p - t - $('.product-left-img .target_img.active').outerWidth() - 25;

        } else {
            var p_width = t - p - $('.product-left-img .target_img.active').outerWidth() - 10;
        }

        $('.product-content-line').css('width', p_width);
        $('.product-content-line').css('height', p_height);
    }


}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}