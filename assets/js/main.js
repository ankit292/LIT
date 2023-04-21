// $(document).load($(window).bind("resize", checkPosition));
// function checkPosition()
// {
//     if($(window).width() < 767)
//     {
//         $(".DeskSvg").remove();
//     } else {
//         $(".medSvg").remove();
//     }
// }
$(document).ready(function(){
	// ticker ----------------------------
	var $ticker = $('[data-ticker="list"]'),
    tickerItem = '[data-ticker="item"]'
    itemCount = $(tickerItem).length,
    viewportWidth = 0;

		function setupViewport(){
		    $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');
		    
		    for (i = 0; i < itemCount; i ++){
		        var itemWidth = $(tickerItem).eq(i).outerWidth();
		        viewportWidth = viewportWidth + itemWidth;
		    }
		    
		    $ticker.css('width', viewportWidth);
		}
		if($(window).innerWidth() <= 767) {
		   function animateTicker(){
			    $ticker.animate({	
			        marginLeft: -viewportWidth
			      }, 100000, "linear", function() {
			        $ticker.css('margin-left', '0');
			        animateTicker();
			      });
			}                     
		}else{
			function animateTicker(){
			    $ticker.animate({	
			        marginLeft: -viewportWidth
			      }, 90000, "linear", function() {
			        $ticker.css('margin-left', '0');
			        animateTicker();
			      });
			}
		 }

		

		function initializeTicker(){
		    setupViewport();
		    animateTicker();
		    
		    // $ticker.on('mouseenter', function(){
		    //     $(this).stop(true);
		    // }).on('mouseout', function(){
		    //     animateTicker();
		    // });
		}

		initializeTicker();
	// ticker----------------------------
	if($(window).innerWidth() <= 767) {
	   $(".DeskSvg").remove();
	   $(".medVideo").remove();                      
	}else{$(".medSvg").remove(); }
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll >= 200) {
	        $(".clearHeader").addClass("darkHeader");
	    } else {
	        $(".clearHeader").removeClass("darkHeader");
	    }
	});
	$(".navbar-toggler").click(function(){
		$(this).toggleClass('hiden');
	})
	$(".tickerSlide .item").hover(
	  function () {
	    $(this).addClass("result_hover");
	  },
	  function () {
	    $(this).removeClass("result_hover");
	  }
	);
	
	// $('.masking1').hover(
	// 	function () {
	// 		$('.masking1').css({
	// 	    	'transform': 'scaleY(3.10104)'
	// 	    });

	// 	};
	// 	function () {
	// 	    $('.masking1').css({
	// 	    	'transform': 'scaleY(1.10104)'
	// 	    });
	// 	  }
	// 	);
	$(".masking1").hover(
	  function () {
	  	$('.masking1').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking1').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking1').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking1').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking1').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking1').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking2").hover(
	  function () {
	  	$('.masking2').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking2').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking2').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking2').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking2').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking2').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking3").hover(
	  function () {
	  	$('.masking3').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking3').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking3').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking3').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking3').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking3').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking4").hover(
	  function () {
	  	$('.masking4').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking4').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking4').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking4').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking4').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking4').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking5").hover(
	  function () {
	  	$('.masking5').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking5').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking5').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking5').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking5').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking5').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking6").hover(
	  function () {
	  	$('.masking6').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking6').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking6').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking6').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking6').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking6').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);
	$(".masking7").hover(
	  function () {
	  	$('.masking7').css({
		    	'transform': 'scaleY(2)'
		    });
	  	$('.masking7').next().css({
	    	'transform': 'scaleY(1.5)'
	    });
	    $('.masking7').prev().css({
	    	'transform': 'scaleY(1.2)'
	    });
	  },
	  function () {
	    $('.masking7').css({
		    	'transform': 'scaleY(1)'
		    });
	    $('.masking7').next().css({
	    	'transform': 'scaleY(1)'
	    });
	    $('.masking7').prev().css({
	    	'transform': 'scaleY(1)'
	    });
	  }
	);

	// $(".masking").hover(
     
	//   function () {
	//   	let clasFind = $(this).attr('id',);
	//   	$(this).css({
	//     	'transform': 'scaleY(3.10104)'
	//     });
	//     $(clasFind).css({
	//     	'transform': 'scaleY(3.10104)'
	//     });

	//     // $(this).next().css({
	//     // 	'transform': 'scaleY(5.10104)'
	//     // });
	//     // $(this).prev().css({
	//     // 	'transform': 'scaleY(1.10104)'
	//     // });
	//   },
	//   function () {
	//     $(this).css({
	//     	'transform': 'scaleY(1)'
	//     });
	//   }
	// );
	var brndRowOne = $('.brndRow.one');
	brndRowOne.owlCarousel({
		rtl:true,
	    center: true,
        items:3,
        loop:true,
        margin:40,
        nav:false,
        dots:false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:4,
	            margin:20
	        },
	        600:{
	            items:4
	        },
	        1000:{
	            items:6
	        },
	        1600:{
	            items:7
	        }
	    }
	});
	var brndRowTwo = $('.brndRow.two');
	brndRowTwo.owlCarousel({
		rtl:false,
	    center: true,
        items:3,
        loop:true,
        margin:40,
        nav:false,
        dots:false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:4,
	            margin:20
	        },
	        600:{
	            items:4
	        },
	        1000:{
	            items:6
	        },
	        1600:{
	            items:7
	        }
	    }
	});
	var owl = $('.tickerSlide');
	owl.owlCarousel({
	    center: true,
        items:5,
        loop:true,
        margin:20,
        nav:true,
        dots:false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:3,
	            margin:10
	        },
	        600:{
	            items:3,
	            margin:10
	        },
	        1000:{
	            items:7
	        },
	        1600:{
	            items:7
	        }
	    }
	});
	var owl2 = $('.litSerSlide');
	owl2.owlCarousel({
	    items:2,
	    loop:false,
	    margin:50,
	    stagepadding:50,
	    autoplay:false,
	    autoplayTimeout:1000,
	    nav:true,
        dots:false,
        // itemsDesktop : [1000,2],
        // scrollPerPage : true,
        slideBy: 2,
	    responsive:{
	        0:{
	            items:1,
	            slideBy: 1
	        },
	        600:{
	            items:1,
	            slideBy: 1
	        },
	        1000:{
	            items:2,
	            slideBy: 2
	        }
	    }
	});
});