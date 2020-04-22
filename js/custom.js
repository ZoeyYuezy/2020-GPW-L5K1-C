/*
*	Author: Pixel Art Inc.
*	URL:	http://www.pixelartinc.com
*/


jQuery(document).ready(function() {

    $ = jQuery;
	
	//Login
		$('#login-link').click(function(){
			$('.login-popup-wrapper').fadeIn('slow',function(){
				$(this).children('#login-popup').fadeIn('fast');			
			});
		});
		$('.close').click(function(){
			$(this).parents('.login-popup-wrapper').fadeOut('slow');
			$(this).parent('#login-popup').fadeOut('slow');
		});
	
	//Flex Slider
	$('.flexslider').flexslider({
		animation: "slide"	
	});
	//Accordions
	 $( "#accordion" ).accordion();
	 $( "#widget_accordion" ).accordion();
     $( "#slider_tabs" ).tabs();
	
	//For Reservation form
	$( "#datepicker" ).datepicker();
	$( "#clender" ).datepicker();		
	$( "#spinner" ).spinner();
	$( "#spinner-two" ).spinner();
	$( "#spinner-three" ).spinner();
	
	//Carousal
	$('#carousel').carouFredSel({
		auto: false,
        prev: '.prev',
        next: '.next',
		scroll:1
	});
	
	//HOver  
	$('#carousel li').mouseover(function () {
        $(this).siblings().css({
            opacity: 0.35
        })
    })
        .mouseout(function () {
            $(this).siblings().css({
                opacity: 1
            })
        });		
	 
	 $("#vcarousel").jCarouselLite({
        vertical: true,
		btnPrev: '.d-down',
        btnNext: '.d-up',
        auto: 500,
        speed: 1600,
        visible: 4
    });


    $('#carousel_two').carouFredSel({
        responsive: true,
        circular: false,
        auto: false,
        items: {
            visible: 1,
            width: 200,
            height: '56%'
        },
        prev: '.prev',
        next: '.next',
        scroll: {
            fx: 'fade'
        }
    });

    $('#thumbs').carouFredSel({
        responsive: true,
        circular: false,
        infinite: false,
        auto: false,
        prev: '#prev',
        next: '#next',
        items: {
            visible: {
                min: 2,
                max: 6
            }

        }
    });

    $('#thumbs a').click(function() {
        $('#carousel_two').trigger('slideTo', '#' + this.href.split('#').pop() );
        $('#thumbs a').removeClass('selected');
        $(this).addClass('selected');
        return false;
    });


    $("nav ul li ").hover(function(){
        $(this).children('ul').stop(true, true).slideDown(500);
    }, function(){
        $(this).children('ul').stop(true, true).slideUp(500);
    });

    //Dropdown Navigation
    function open_nav(){
        $(".responsive_nav  .open").click(function(e){
            e.preventDefault();
            $(this).children('ul').stop(true, true).slideDown(500);
            $(this).removeClass('open').addClass('close-nav');
            close_nav();
        });
    }
    open_nav();
    function close_nav(){
        $(".responsive_nav .close-nav").click(function(e){
            e.preventDefault();
            $(this).children('ul').stop(true, true).slideUp(500);
            $(this).removeClass('close-nav').addClass('open');
            open_nav();
        });
    }
	
	//Cycle Slider
	$('.testimonial').cycle({
		next:   '#test-next',
		prev:   '#test-prev'
	});
	$('.notify .slider').cycle({
		next:   '.left',
		prev:   '.right'
	});
	
	$('.tweet').cycle({
		fx: 'scrollHorz',
		next:   '.tweet-l',
		prev:   '.tweet-r'
	});

    /*****************************
     Portfolio Filtration
    *****************************/
    var $container = $('#project-container');
    $container.isotope({
        itemSelector : '.element'
    });
    var $optionSets = $('.option-set'),
        $optionLinks = $optionSets.find('a');
    $optionLinks.click(function(){
        var $this = $(this);
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

            changeLayoutMode( $this, options )
        } else {

            $container.isotope( options );
        }

        return false;
    });

    $( "#tabs_two" ).tabs();
	
	/*****************************
     HOver Background change
    *****************************/
	
	 $('.crousal-btn a').hover(
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 -38px)"},
                {duration:500}
            )
        },
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 0)"},
                {duration:500}
            )
        }
    );
	
	$('.test-button a').hover(
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 -32px)"},
                {duration:500}
            )
        },
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 0)"},
                {duration:500}
            )
        }
    );
	
	$('.social-nav a').hover(
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 -40px)"},
                {duration:500}
            )
        },
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 0)"},
                {duration:500}
            )
        }
    );
	
	$('.like').hover(
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 -92px)"},
                {duration:500}
            )
        },
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 0)"},
                {duration:500}
            )
        }
    );
	
	$('.tweet').hover(
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 -58px)"},
                {duration:500}
            )
        },
        function(){
            $(this).stop().animate(
                {backgroundPosition: "(0 0)"},
                {duration:500}
            )
        }
    );
	
	 $.extend($.fx.step,{
        backgroundPosition: function(fx) {
            if (fx.pos === 0 && typeof fx.end == 'string') {
                var start = $.css(fx.elem,'backgroundPosition');
                start = toArray(start);
                fx.start = [start[0],start[2]];
                var end = toArray(fx.end);
                fx.end = [end[0],end[2]];
                fx.unit = [end[1],end[3]];
            }
            var nowPosX = [];
            nowPosX[0] = ((fx.end[0] - fx.start[0]) * fx.pos) + fx.start[0] + fx.unit[0];
            nowPosX[1] = ((fx.end[1] - fx.start[1]) * fx.pos) + fx.start[1] + fx.unit[1];
            fx.elem.style.backgroundPosition = nowPosX[0]+' '+nowPosX[1];

            function toArray(strg){
                strg = strg.replace(/left|top/g,'0px');
                strg = strg.replace(/right|bottom/g,'100%');
                strg = strg.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");
                var res = strg.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);
                return [parseFloat(res[1],10),res[2],parseFloat(res[3],10),res[4]];
            }
        }
    });
	
	$.simpleWeather({
		zipcode: '76309',
		unit: 'c',
		success: function(weather) {
			html = '<h2>'+weather.city+', '+weather.region+'</h2>';
			html += '<figure style="background-image: url('+weather.image+');"></figure>';
			html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'</p>';
			$("#weather").html(html);
		},
		error: function(error) {
			$("#weather").html('<p>'+error+'</p>');
		}
	});
	
	

	
});