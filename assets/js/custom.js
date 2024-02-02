jQuery(document).ready(function($) {

    /*------------------------------------------------
                DECLARATIONS
    ------------------------------------------------*/
    
        var loader                  = $('#loader');
        var loader_container        = $('#preloader');
        var scroll                  = $(window).scrollTop();  
        var scrollup                = $('.backtotop');
        var dropdown_toggle         = $('.main-navigation button.dropdown-toggle');
        var menu_toggle             = $('#masthead .menu-toggle');
        var primary_menu            = $('#masthead ul.nav-menu');
    
    /*------------------------------------------------
                PRELOADER
    ------------------------------------------------*/
    
        loader_container.delay(1000).fadeOut();
        loader.delay(1000).fadeOut("slow");
    
    /*------------------------------------------------
                BACK TO TOP
    ------------------------------------------------*/
    
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1) {
                scrollup.css({bottom:"100px"});
            } 
            else {
                scrollup.css({bottom:"-100px"});
            }
        });
    
        scrollup.click(function() {
            $('html, body').animate({scrollTop: '0px'}, 800);
            return false;
        });
    
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1) {
                $('.menu-sticky #masthead').addClass('nav-shrink');
            }
            else {
                $('.menu-sticky #masthead').removeClass('nav-shrink');
            }
        });
    
    /*------------------------------------------------
                NAVIGATION
    ------------------------------------------------*/
    
        menu_toggle.click(function() {
            primary_menu.slideToggle();
            $(this).toggleClass('active');
            $('#masthead .main-navigation').toggleClass('menu-open');
            $('.menu-overlay').toggleClass('active');
           
        });
    
        dropdown_toggle.click(function() {
            $(this).toggleClass('active');
           $(this).parent().find('.sub-menu').first().slideToggle();
        });
    
        $('.main-navigation ul li.search-menu a').click(function(e) {
            e.preventDefault();
            $(this).toggleClass('search-active');
            $('.main-navigation #search').fadeToggle();
            $('.main-navigation .search-field').focus();
        });
    
    /*------------------------------------------------
                SLICK SLIDER
    ------------------------------------------------*/
    
        $('.coast_pro_destination_section-slider').slick({
            Infinite: true,
            centerMode: false,
            centerPadding: 0,
            slidesToShow: 4,
            slidesToScroll: 2,
            dots: false,
            arrows: true,
            responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            ]
        });
    
        $('.testimonial-slider').slick({
            centerMode: true,
            centerPadding: 0,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            ]
        });

        $('.interest-slider').slick({
            centerMode: true,
            centerPadding: 0,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
            ]
        });

        $('.coast-interest-slider').slick({
            Infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            }
            ]
        });

         $('.blog-slider').slick({
            Infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true
                }
            }
            ]
        });


    $('#open-popup-button').on('click', function(){
        $('#coast-pro-video-container').show();
    })
   // Button click event to open Magnific Popup
   $('#open-popup-button').on('click', function() {
    // Open Magnific Popup
        $.magnificPopup.open({
            items: {
                src: $('#coast-pro-video-container'),
                type: 'inline'
            }
        });
    }); 

    // Optional: Add a click event to the stop video button
    $('#stop-video-button').on('click', function() {
        $.magnificPopup.close();
    });
        

    /*------------------------------------------------
                    Accordion
    ------------------------------------------------*/
    var faq = $('.faq-group');
    
    faq.find('.each-faq').each(function() {
        if( !$(this).hasClass('open') ) {
            $(this).find('.faq-content').hide();
        }
    });
    
    faq.find('.faq-trigger').on('click', function(el) {
        var openFaq = $(this).closest('.each-faq');
    
        openFaq.toggleClass('open').find('.faq-content').slideToggle( 300 );
        openFaq.siblings('.each-faq:visible').each(function() {
            $(this).removeClass('open').find('.faq-content').slideUp( 300 );
        });
    
    });
    
    
    /*------------------------------------------------
                Tab Filter
    ------------------------------------------------*/
    
    $('ul.tabs li').click(function(event) {
        event.preventDefault();
    
        var tab_id = $(this).attr('data-tab');
    
        $('ul.tabs li').removeClass('active');           
        $(this).addClass('active');
    
        $('.tab-content').hide();
        $( "#"+tab_id ).fadeIn('slow');
    });
    
    /*------------------------------------------------
                    PACKERY
    ------------------------------------------------*/
        $('.grid').imagesLoaded( function() {
            $('.grid').packery({
                itemSelector: '.grid-item'
            });
        });
    
    
    /*------------------------------------------------
                Sticky Sidebar
    ------------------------------------------------*/
    
    if ($(window).width() > 766 ) {
        //   setTimeout(() => {
        //     document.location.reload();
        // }, 30);
      
          $('#gallery-1').removeClass('clear');
      
          $('#gallery-2').removeClass('clear');
      } 
      else {
          $('#gallery-1').addClass('clear');
      
          $('#gallery-2').addClass('clear');
      }
    
    
    /*------------------------------------------------
            Match Height
    ------------------------------------------------*/
    
    $('.service-container .entry-container').matchHeight();
    function makeTimer() {
        var endTime = document.getElementById('timer').dataset.date;
        var endTime = document.getElementById('timer').dataset.date;
        var timeLeft = endTime - Math.floor((Date.now())/1000);
        if(timeLeft >= 0 ){
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }else{
            $("#timer").html("<span>Expired</span>");
        }
    }
    var count_down = document.getElementById('timer');
    if (count_down !== null)
        setInterval(function() { makeTimer(); }, 1000);
    
    /*--------------------------------------------------------------
     Keyboard Navigation
    ----------------------------------------------------------------*/
    if( $(window).width() < 1024 ) {
        $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });
    
        $('#primary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });
    
        $('#search').find("button").unbind('keydown');
    
    }
    else {
        $('#primary-menu').find("li").unbind('keydown');
    
        $('#search').find("button").bind( 'keydown', function(e) {
            var tabKey              = e.keyCode === 9;
            var shiftKey            = e.shiftKey;
    
            if( tabKey ) {
                e.preventDefault();
                $('#search').hide();
                $('.search-menu > a').removeClass('search-active').focus();
            }
    
            if( shiftKey && tabKey ) {
                e.preventDefault();
                $('#search').show();
                $('.main-navigation .search-field').focus();
                $('.search-menu > a').addClass('search-active');
            }
        });
    
        $('.search-menu > a').on('keydown', function (e) {
            var tabKey              = e.keyCode === 9;
            var shiftKey            = e.shiftKey;
            
            if( $('.search-menu > a').hasClass('search-active') ) {
                if ( shiftKey && tabKey ) {
                    e.preventDefault();
                    $('#search').hide();
                    $('.search-menu > a').removeClass('search-active').focus();
                }
            }
        });
    }
    
    $(window).resize(function() {
        if( $(window).width() < 1024 ) {
            $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });
    
            $('#primary-menu > li:last-child button:not(.active)').bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });
    
            $('#search').find("button").unbind('keydown');
    
        }
        else {
            $('#primary-menu').find("li").unbind('keydown');
    
            $('#search').find("button").bind( 'keydown', function(e) {
                var tabKey              = e.keyCode === 9;
                var shiftKey            = e.shiftKey;
    
                if( tabKey ) {
                    e.preventDefault();
                    $('#search').hide();
                    $('.search-menu > a').removeClass('search-active').focus();
                }
    
                if( shiftKey && tabKey ) {
                    e.preventDefault();
                    $('#search').show();
                    $('.main-navigation .search-field').focus();
                    $('.search-menu > a').addClass('search-active');
                }
            });
    
            $('.search-menu > a').on('keydown', function (e) {
                var tabKey              = e.keyCode === 9;
                var shiftKey            = e.shiftKey;
                
                if( $('.search-menu > a').hasClass('search-active') ) {
                    if ( shiftKey && tabKey ) {
                        e.preventDefault();
                        $('#search').hide();
                        $('.search-menu > a').removeClass('search-active').focus();
                    }
                }
            });
        }
    });
    
    menu_toggle.on('keydown', function (e) {
        var tabKey    = e.keyCode === 9;
        var shiftKey  = e.shiftKey;
    
        if( menu_toggle.hasClass('active') ) {
            if ( shiftKey && tabKey ) {
                e.preventDefault();
                primary_menu.slideUp();
                $('.main-navigation').removeClass('menu-open');
                $('.menu-overlay').removeClass('active');
                menu_toggle.removeClass('active');
            };
        }
    });
    
    
    /*------------------------------------------------
                    END JQUERY
    ------------------------------------------------*/
    
});
    
