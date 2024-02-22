(function ($) {
    "use strict";
    
    new WOW().init();  
    
    
    /*---background image---*/
	function dataBackgroundImage() {
		$('[data-bgimg]').each(function () {
			var bgImgUrl = $(this).data('bgimg');
			$(this).css({
				'background-image': 'url(' + bgImgUrl + ')', // + meaning concat
			});
		});
    }
    
    
    $(window).on('load', function () {
        dataBackgroundImage();
    });
    
    
    /*---stickey menu---*/
    $(window).on('scroll',function() {    
       var scroll = $(window).scrollTop(),
           screensize = $(window).width();
        if(screensize >= 480){
           if (scroll < 100 ) {
            $(".sticky-header").removeClass("sticky");
           }else{
            $(".sticky-header").addClass("sticky");
           }
        }
    });
    
    // Slick Slider Activation
    var $sliderActvation = $('.slick_slider_activation');
    if($sliderActvation.length > 0){
        $sliderActvation.slick({
          prevArrow:'<button class="prev_arrow"><i class="icon-arrow-left icons"></i></button>',
          nextArrow:'<button class="next_arrow"><i class="icon-arrow-right icons"></i></button>',
        });
    };
    
    
    // Slick Slider Activation
    $('.zoom_tab_img').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 4,
        arrows:false,
        vertical: true,
        focusOnSelect: true,
        asNavFor: '.product_zoom_main_img',
        responsive:[
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 3,
                 vertical: false,  
                  arrows: false,
              }
            },
            {
              breakpoint: 768,
              settings: {
                  slidesToShow: 4,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              }
            },
        ]

    });
    
    // Slick Slider Activation
    $('.product_zoom_main_img').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 1,
        arrows:false,
        vertical: true,
        asNavFor: '.zoom_tab_img',
        responsive:[
            {
              breakpoint: 576,
              settings: {
                 vertical: false,  
              }
            },
        ]
    });
    
    
    
    /*---canvas menu activation---*/
    $('.canvas_open').on('click', function(){
        $('.offcanvas_menu_wrapper,.body_overlay').addClass('active')
    });
    
    $('.canvas_close,.body_overlay').on('click', function(){
        $('.offcanvas_menu_wrapper,.body_overlay').removeClass('active')
    });
    
    
    //Shopping Cart addClass removeClass
    $('.shopping_cart > a').on('click', function(){
        $('.mini_cart,.body_overlay').addClass('active')
    });
    $('.mini_cart_close a,.body_overlay').on('click', function(){
        $('.mini_cart,.body_overlay').removeClass('active')
    });
    
    
    //Search Box addClass removeClass
    $('.header_search > a').on('click', function(){
        $('.page_search_box').addClass('active')
    });
    $('.search_close > i').on('click', function(){
        $('.page_search_box').removeClass('active')
    });
    
    
    /*--- Magnific Popup Video---*/
    $('.port_popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    
    
    
    $(document).ready(function() {
      $('select,.select_option').niceSelect();
    });
    
    
    /*instagram activation*/
    $.instagramFeed({
        'username': 'portfolio.devitems',
        'container': "#instagramFeed",
        'display_profile': false,
        'display_biography': false,
        'display_gallery': true,
        'styling': false,
        'items': 8,
        "image_size": "480",
        'items_per_row': 4,
        'margin': 2,
    });

      /*---  ScrollUp Active ---*/
    $.scrollUp({
        scrollText: '<i class="ion-android-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    /*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');
    
    $offcanvasNavSubMenu.slideUp();
    
    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.siblings('ul').slideUp('slow');
            }else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if( $this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/) ){
        	$this.parent().toggleClass('menu-open');
        }else if( $this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/) ){
        	$this.toggleClass('menu-open');
        }
    });
    

     /*---shop grid activation---*/
    $('.shop_toolbar_btn ul li a').on('click', function (e) {
        
		e.preventDefault();
        
        $('.shop_toolbar_btn ul li a').removeClass('active');
		$(this).addClass('active');
        
		var parentsDiv = $('.shop_wrapper');
		var viewMode = $(this).data('role');
        
        
		parentsDiv.removeClass('grid_3 grid_4 grid_5 grid_list').addClass(viewMode);

		if(viewMode == 'grid_3'){
			parentsDiv.children().addClass('col-lg-4 col-md-4 col-sm-6').removeClass('col-lg-3 col-cust-5 col-12');
            
		}

		if(viewMode == 'grid_4'){
			parentsDiv.children().addClass('col-lg-3 col-md-4 col-sm-6').removeClass('col-lg-4 col-cust-5 col-12');
		}
        
        if(viewMode == 'grid_list'){
			parentsDiv.children().addClass('col-12').removeClass('col-lg-3 col-lg-4 col-md-4 col-sm-6 col-cust-5');
		}
            
	});
  
    
    
    /*blog Isotope activation*/
   $('.blog_page_gallery').imagesLoaded( function() {
        // init Isotope
        var $grid = $('.blog_page_gallery').isotope({
           itemSelector: '.gird_item',
            percentPosition: true,
            masonry: {
                columnWidth: '.gird_item'
            }
        });
            
        // filter items on button click
        $('.blog_messonry_button').on( 'click', 'button', function() {
           var filterValue = $(this).attr('data-filter');
           $grid.isotope({ filter: filterValue });
            
           $(this).siblings('.active').removeClass('active');
           $(this).addClass('active');
        });
       
    });
    
    
      
     /*---  Accordion---*/
    $(".faequently-accordion").collapse({
        accordion:true,
        open: function() {
        this.slideDown(300);
      },
      close: function() {
        this.slideUp(300);
      }		
    });	
    
    
  
    //Tooltip
    tippy("[data-tippy-content]")
   
    
    
    /*---MailChimp---*/
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,
        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

    });
    function mailChimpResponse(resp) {

        if (resp.result === 'success') {
            $('.mailchimp-success').addClass('active')
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);

        } else if(resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }  
    }
 
    
    /*---slider-range here---*/
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 16, 400 ],
        slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
       }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
       " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    
    //Quantity Counter
    $(".pro-qty").append('<a href="#" class="inc qty-btn">+</a>');
      $(".pro-qty").prepend('<a href="#" class= "dec qty-btn">-</a>');
    
      $(".qty-btn").on("click", function (e) {
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.hasClass("inc")) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
          // Don't allow decrementing below zero
          if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
          } else {
            newVal = 1;
          }
        }
        $button.parent().find("input").val(newVal);
    });
    
    
    
})(jQuery);	
